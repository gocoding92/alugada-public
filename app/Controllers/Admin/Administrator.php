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
    }

    public function index($nohp = "")
    {
        $nohplogin = $this->session->get('nohplogin');
        // var_dump($nohplogin);die;
        
        // dd($nohplogin);
        if ($nohplogin == NULL or $nohplogin == "") {
            // dd("Belum ada Login");
            $nohplogin = 12341234;
            $userlogin = $this->alugada->userbynohp($nohplogin);
        } else {
            // dd("Sudah ada Login");
            $nohplogin = $nohplogin;
            $userlogin = $this->alugada->userbynohp($nohplogin);
            $data = [
                'namauser'      => $userlogin['nama'],
                'nohplogin'      => $nohplogin,
                'validation' => \config\services::validation(),
            ];
            return redirect()->to('administrator-area/dashboard');;
        }

        $data = [
            'namauser'      => $userlogin['nama'],
            'nohplogin'      => $nohplogin,
            'validation' => \config\services::validation(),
        ];
        // var_dump($data);die;
        return view('admin/administratorView', $data);
    }

    public function verifikasilogin()
    {
        // dd("Benar login");
        $nohplogin = $this->request->getvar('nohp');
        $passwordlogin = $this->request->getvar('password');

        $terdaftar = $this->alugada->userbynohp($nohplogin);

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
            $validation = \config\services::validation();
            return redirect()->to('/login')->withInput();
        }


        // cek No HP terdaftar belum

        if ($terdaftar) {     //Jika Nomor sudah terdaftar
            // var_dump("Terdaftar");die;
            if ($passwordlogin == $terdaftar['password']) {
                $data = [
                    'nohplogin' => $nohplogin,
                    'namauser'  => $terdaftar['nama'],
                    'validation' => \config\services::validation(),
                ];
                $this->session->set($data);
                // return redirect()->to('/');

                if ($terdaftar['role'] == 1) {
                    return redirect()->to('administrator-area/dashboard')->withInput();
                } elseif ($terdaftar['role'] != 1) {
                    // return view('homeView', $data);
                    return redirect()->to('administrator');
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
