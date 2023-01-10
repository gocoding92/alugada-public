<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ModelAlugada;


class Administrator extends BaseController
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->alugada = new ModelAlugada();
        $this->session = \Config\Services::session();
        $this->validation  = \config\services::validation();

        $this->nohplogin = session()->get('nohplogin');
        if($this->nohplogin==Null or $this->nohplogin==""){
            $this->nohplogin = 12341234;
        }

    }

    public function index($nohp = "")
    {
        // $role=$this->alugada->userbynohp($this->nohplogin)['role'];
        // if($role != 1){
        //     session()->setFlashdata('belumterdaftar','Silahkan login dengan Nomor Admin');
        //     return redirect()->to('administrator');
        // }

        $userlogin = $this->alugada->userbynohp($this->nohplogin);
        
        $data = [
            'namauser'      => $userlogin['nama'],
            'nohplogin'      => $this->nohplogin,
            'photouser'     => $userlogin['gambar'],
            // 'validation'    => \config\services::validation(),
            'validation'    => $this->validation,
        ];

        if ($userlogin['role'] != 1 ) {
            return view('admin/administratorView', $data);
        } else {    
            return redirect()->to('administrator-area/dashboard');;
        }

    }

    public function verifikasilogin()
    {
        // var_dump("Baner");die;
        $nohplogin = $this->request->getvar('nohp');
        $passwordlogin = $this->request->getvar('password');


        $terdaftar = $this->alugada->userbynohp($nohplogin);
        // var_dump($terdaftar);die;

        // Validasi
        if (!$this->validate(
            [
                'nohp'  => [
                    'rules'  => 'required',
                    'errors' => [
                        'required'  => 'Nomor HP harus diisi dengan benar',
                    ]
                ],
                'password'  => [
                    'rules'  => 'required',
                    'errors' => [
                        'required'  => 'Password harus diisi dengan benar',
                    ]
                ]
            ]
        )) {
            $validation = $this->validation;
            return redirect()->to('/administrator')->withInput();
        }

        // cek No HP terdaftar belum        
        if ($terdaftar) {     //Jika Nomor sudah terdaftar
            // var_dump("Ya ".$terdaftar['nama']);die;
            if ($passwordlogin == $terdaftar['password']) {
                $data = [
                    'nohplogin' => $nohplogin,
                    'namauser'  => $terdaftar['nama'],
                    // 'validation' => \config\services::validation(),
                    'validation'    => $this->validation,
                ];
                $this->session->set($data);
                // return redirect()->to('/');

                if ($terdaftar['role'] == 1) {
                    return redirect()->to('administrator-area/dashboard')->withInput();
                } elseif ($terdaftar['role'] != 1) {
                    // var_dump("Bukan admin");die;
                    session()->setFlashdata('belumterdaftar','Masukkan Nomor yang terdaftar sebagai Admin');
                    return redirect()->to('administrator')->withInput();
                }
                // return view('homeView', $data);

            } else {
                session()->setFlashdata('passwordsalah', 'Password yang anda masukkan salah');
                return redirect()->to('administrator')->withInput();
            }
        } else {
            session()->setFlashdata('belumterdaftar', 'Masukkan nomor yang terdaftar sebagai Admin');
            return redirect()->to('administrator')->withInput();
        }
    }
}
