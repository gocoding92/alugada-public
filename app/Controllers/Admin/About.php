<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ModelAlugada;

class About extends BaseController
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->alugada = new ModelAlugada();
        $this->session = \Config\Services::session();

        $this->nohplogin = session()->get('nohplogin');
        if ($this->nohplogin == Null or $this->nohplogin == "") {
            $this->nohplogin = 12341234;
        }
        // $role=$this->alugada->userbynohp($this->nohplogin)['role'];
        // if($role !=1){
        //     return redirect()->to('administrator');
        //     // var_dump($testrole);die;
        // }


    }

    //Tentang kami
    public function index()
    {
        $role = $this->alugada->userbynohp($this->nohplogin)['role'];
        if ($role != 1) {
            session()->setFlashdata('belumterdaftar', 'Masukkan nomor yang terdaftar sebagai Admin');
            return redirect()->to('administrator');
        }
        //
        // var_dump(12345);die;
        // if($this->nohplogin == 12341234){
        //     session()->setFlashdata('belumterdaftar', 'Masukkan nomor yang terdaftar sebagai Admin');
        //     return redirect()->to('administrator');
        // }

        $tentangkami = $this->alugada->tentangkami();
        // foreach($version as $v){

        // }
        $data = [
            'namauser'      => $this->alugada->userbynohp($this->nohplogin)['nama'],
            'photouser'     => $this->alugada->userbynohp($this->nohplogin)['gambar'],
            'tentangkami'   => $tentangkami,
            // 'versi'   => $tentangkami['versi'],
            'nohplogin'      => $this->nohplogin,
        ];
        return view('admin/about/tentangkamiView', $data);
    }

    public function aktifasitentangkami($id, $is_active)
    {
        if ($is_active == 0) {
            $data = [
                'is_active' => 1,
            ];
            $this->alugada->updatetentangkami($id, $data);
        } elseif ($is_active == 1) {
            $data = [
                'is_active' => 0,
            ];
            $this->alugada->updatetentangkami($id, $data);
        }
        return redirect()->to('administrator-tentangkami');
    }

    public function edittentangkami($id)
    {
        // var_dump($id);die;

        // var_dump($isi);die;
        $data = [
            'nohplogin' => $this->nohplogin,
            'photouser' => $this->alugada->userbynohp($this->nohplogin)['gambar'],
            'namauser' => $this->alugada->userbynohp($this->nohplogin)['nama'],
            'id'    => $id,
            'isi'   => $this->alugada->tentangkamibyid($id)['isi'],
        ];
        return view('admin/about/edittentangkamiView', $data);
    }
    public function updatetentangkami()
    {
        $id = $this->request->getVar('id');
        // var_dump($isi);die;
        $data = [
            'isi'   => $this->request->getVar('isi'),
        ];
        $this->alugada->updatetentangkami($id, $data);
        return redirect()->to('administrator-tentangkami');
    }

    public function tambahtentangkami()
    {
        // var_dump(123456);die;
        $data = [
            'isi' => $this->request->getVar('isi'),
            'versi' => $this->request->getVar('versi'),
            'is_active' => 0,
        ];
        $this->alugada->simpantentangkami($data);
        return redirect()->to('administrator-tentangkami');
    }


    //Hubungi kami
    public function hubungikami()
    {
        //
        // var_dump(12345);die;
        // if($this->nohplogin == 12341234){
        //     session()->setFlashdata('belumterdaftar', 'Masukkan nomor yang terdaftar sebagai Admin');
        //     return redirect()->to('administrator');
        // }
        $role = $this->alugada->userbynohp($this->nohplogin)['role'];
        if ($role != 1) {
            session()->setFlashdata('belumterdaftar', 'Masukkan nomor yang terdaftar sebagai Admin');
            return redirect()->to('administrator');
        }

        $hubungikami = $this->alugada->hubungikami();
        // foreach($version as $v){

        // }
        $data = [
            'namauser'      => $this->alugada->userbynohp($this->nohplogin)['nama'],
            'photouser'     => $this->alugada->userbynohp($this->nohplogin)['gambar'],
            'hubungikami'   => $hubungikami,
            // 'versi'   => $tentangkami['versi'],
            'nohplogin'      => $this->nohplogin,
        ];
        return view('admin/about/hubungikamiView', $data);
    }
    public function tambahhubungikami()
    {
        // var_dump(123456);die;
        $data = [
            'isi' => $this->request->getVar('isi'),
            'versi' => $this->request->getVar('versi'),
            'is_active' => 0,
        ];
        $this->alugada->simpanhubungikami($data);
        return redirect()->to('administrator-hubungikami');
    }
    public function edithubungikami($id)
    {

        // var_dump($isi);die;
        $data = [
            'nohplogin' => $this->nohplogin,
            'photouser' => $this->alugada->userbynohp($this->nohplogin)['gambar'],
            'namauser' => $this->alugada->userbynohp($this->nohplogin)['nama'],
            'id'    => $id,
            'isi'   => $this->alugada->hubungikamibyid($id)['isi'],
        ];
        return view('admin/about/edithubungikamiView', $data);
    }
    public function updatehubungikami()
    {
        $id = $this->request->getVar('id');
        $data = [
            'isi'   => $this->request->getVar('isi'),
        ];
        // var_dump($data);die;
        $this->alugada->updatehubungikami($id, $data);
        return redirect()->to('administrator-hubungikami');
    }
    public function aktifasihubungikami($id, $is_active)
    {
        // var_dump($is_active);die;
        if ($is_active == 0) {
            $data = [
                'is_active' => 1,
            ];
            $this->alugada->updatehubungikami($id, $data);
        } elseif ($is_active == 1) {
            $data = [
                'is_active' => 0,
            ];
            $this->alugada->updatehubungikami($id, $data);
        }
        return redirect()->to('administrator-hubungikami');
    }
}
