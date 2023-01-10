<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
// use App\Models\Admin\ModelAlugada;
use App\Models\ModelAlugada;

class DashboardController extends BaseController
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->modelalugada = new ModelAlugada();
        // $this->modelslider = new ModelSlider();
        $this->session = \Config\Services::session();

        $this->nohplogin = session()->get('nohplogin');
        if($this->nohplogin==Null or $this->nohplogin==""){
            $this->nohplogin = 12341234;
        }

    }

    public function index()
    {
        if($this->nohplogin == 12341234){
            session()->setFlashdata('belumterdaftar', 'Masukkan nomor yang terdaftar sebagai Admin');
            return redirect()->to('administrator');
        }
        // var_dump($this->modelalugada->userbynohp($this->nohplogin)['gambar']);die;
        $query = $this->modelalugada->readSlider();

        // var_dump($this->modelalugada->readSlider());
        // exit;
        // $user = $this->modelalugada->user();
        $data = [
            'namauser'          => $this->modelalugada->userbynohp($this->nohplogin)['nama'],
            'photouser'         => $this->modelalugada->userbynohp($this->nohplogin)['gambar'],
            'tentangkami'       => $this->modelalugada->tentangkami(),
            'nohplogin'         => $this->session->get('nohplogin'),
            'user'              => $this->modelalugada->user(),
            'layanan'           => $this->modelalugada->layanan(),
            'sublayanan'        => $this->modelalugada->sublayanan(),
            'ahli'        => $this->modelalugada->ahli(),
            'terampil'        => $this->modelalugada->terampil(),
            // 'engineering'   => $this->modelalugada->ahlisublayanan(105),

            // 'iklancarikerja'    => array(),
            // 'iklancarikerja'    => $this->modelalugada->iklancarikerja(),
            // 'iklanproperty'    => $this->modelalugada->iklanproperty(),
            // 'iklanproperty'    => $this->modelalugada->slider(),
            'iklancarikerja'    => array(),
            'iklanproperty'    => array(),
            // 'iklanproperty'    => array(),
            // 'iklanmobilmotor'    => array(),
            'iklanmobilmotor'    => array(),
            'slider'    => $query,
            // 'iklanmobilmotor'    => $this->modelalugada->iklanmobilmotor(),
        ];

        return view('admin/dashboard/indexView', $data);
    }

    public function delete($id)
    {
        $id = $this->request->getVar('id');
        $delete = $this->modelalugada->deleteSlider($id);

        // redirect()->to('/administrator-area/dashboard/');
        return redirect()->back();
    }

    public function create()
    {
        return view('admin/dashboard/create');
    }

    public function saveSlider()
    {
        $title = $this->request->getVar('title');
        $description = $this->request->getVar('description');
        // $title = $this->request->getVar('title');

        $data = ([
            'title' => $title,
            'description' => $description,
        ]);

        $this->modelalugada->insertSlider($data);
        return redirect()->to('/administrator-area/dashboard');
    }

    public function edit($id)
    {
        $id_slider = $this->modelalugada->editSlider($id);
        $data = ([
            'id' => $id_slider
        ]);
        return view("/administrator-area/dashboard/edit", $data);
    }
}
