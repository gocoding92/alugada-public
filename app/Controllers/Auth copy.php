<?php

namespace App\Controllers;

use App\Models\ModelAlugada;
use CodeIgniter\I18n\Time;

class Auth extends BaseController
{

    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->modelalugada = new ModelAlugada();
        $this->session = \Config\Services::session();
    }


    public function logout()
    {
        $this->session->remove('nohppengunjung');
        $this->session->remove('nohploginregister');
        $this->session->remove('otp');
        $this->session->remove('nohploginregister');
        $this->session->remove('password');
        $this->session->remove('lupapassword');

        return redirect()->to('/');
    }

    public function index()         // User Login +> ke login view
    {
        $nohppengunjung = $this->session->get('nohppengunjung');
        if ($nohppengunjung == null) {
            $nohppengunjung = 123;
        }
        $nohploginregister = $this->session->get('nohploginregister');
        $data = [
            'title'         => "Login",
            'pengunjung'    => $this->modelalugada->userbynohp($nohppengunjung),
            // 'layanan'       => $this->modelalugada->layanan(),
            'nohp'          => $nohploginregister,
        ];

        return view('auth/loginView', $data);
    }

    public function submit_login()
    {
        $nohploginregister = $this->request->getVar('nohp');
        $password = $this->request->getVar('password');

        //Cek No Hp terdaftar tidak
        $terdaftar = $this->modelalugada->userbynohp($nohploginregister);

        $datalogin = [
            'nohploginregister'     => $nohploginregister
        ];
        $dataUser = [
            'data_user'     => $terdaftar
        ];

        $this->session->set($datalogin);
        $this->session->set($dataUser);

        if ($terdaftar) { // =============== Jika Terdaftar =========================

            //============ Cek Password ============
            if ($password != $terdaftar['password']) {
                return redirect()->to('login');
            }

            $datapengunjung = [
                'nohppengunjung' => $nohploginregister
            ];
            $this->session->set($datapengunjung);
            return redirect()->to('/');
        } else {
            return redirect()->to('register');
        }
    }

    public function register()
    {
        $nohppengunjung = $this->session->get('nohppengunjung');
        if ($nohppengunjung == null) {
            $nohppengunjung = 123;
        }
        $nohploginregister = $this->session->get('nohploginregister');
        $data = [
            'title'         => "Register",
            'pengunjung'    => $this->modelalugada->userbynohp($nohppengunjung),
            // 'layanan'       => $this->modelalugada->layanan(),
            'nohp'          => $nohploginregister,
        ];

        return view('auth/registerView', $data);
    }

    public function submit_register()
    {
        $nohppengunjung = $this->session->get('nohppengunjung');
        if ($nohppengunjung == null) {
            $nohppengunjung = 123;
        }

        $nohploginregister = $this->request->getVar('nohp');

        $terdaftar = $this->modelalugada->userbynohp($nohploginregister);

        if ($terdaftar) {
            return redirect()->to('login');
        }

        $datanohpregister = [
            'nohploginregister' => $this->request->getVar('nohp'),
        ];
        $this->session->set($datanohpregister);

        $this->_otp();
        $this->session->get('otp');
        return redirect()->to('otp');
    }

    //=============================== Generate OTP dan kirim ke user ==========
    private function _otp()
    {
        $otp = rand(1000, 9999);
        $dataotp = [
            'otp'   => $otp,
        ];
        $this->session->set($dataotp);
    }

    public function otp()
    {
        $nohppengunjung = $this->session->get('nohppengunjung');
        if ($nohppengunjung == null) {
            $nohppengunjung = 123;
        }
        $nohploginregister = $this->session->get('nohploginregister');
        $data = [
            'title'         => "OTP",
            'pengunjung'    => $this->modelalugada->userbynohp($nohppengunjung),
            // 'layanan'       => $this->modelalugada->layanan(),
            'nohp'          => $nohploginregister,
            'otp'           => $this->session->get('otp'),
        ];

        return view('auth/otpView', $data);
    }

    // ========================================= Cek OTP =====================
    public function submit_otp()
    {
        $nohppengunjung = $this->session->get('nohppengunjung');
        if ($nohppengunjung == null) {
            $nohppengunjung = 123;
        }

        $otp = $this->request->getVar('otp');
        $nohp = $this->request->getVar('nohp');

        // ===================================== Jika OTP Benar
        if ($otp == $this->session->get('otp')) {
            if ($this->session->get('lupapassword') == 1) {
                return redirect()->to('buat-password-baru');
            }

            return redirect()->to('data-otp');

            // ===================================== Jika OTP Salah
        } else {

            return redirect()->to('otp');
        }
    }

    public function data_otp()
    {
        $nohppengunjung = $this->session->get('nohppengunjung');
        if ($nohppengunjung == null) {
            $nohppengunjung = 123;
        }
        $nohp = $this->session->get('nohploginregister');

        $data = [
            'title'         => "Register",
            'pengunjung'    => $this->modelalugada->userbynohp($nohppengunjung),
            'nohp'          => $nohp,
        ];
        return view('auth/inputDataView', $data);
    }


    //=============== Dari inputDataView ===================================
    public function submit_data_user()
    {
        $nama = $this->request->getVar('nama');
        $nohp = $this->session->get('nohploginregister');
        // echo $nohp;die;

        $nohppengunjung = $this->session->get('nohppengunjung');
        if ($nohppengunjung == null) {
            $nohppengunjung = 123;
        }

        // Ceck password dan confirm password sama atau tidak

        //Jika password dan confirm password tidak sama
        if ($this->request->getVar('password') != $this->request->getVar('confirmpassword')) {
            // var_dump("Password tidak sama");die;
            $this->session->setFlashdata('pesan', 'Password harus sama');
            return redirect()->to('data-otp');
        }

        //Jika password dan confirm password sama
        //Simpan data
        $datauser = [
            'nama'          => $nama,
            'nohp'          => $nohp,
            'password'      => $this->request->getVar('password'),
            'role'          => 10,
            'suspend'       => 0,
            'is_active'     => 1,
            'created_at'    => Time::now(),
            'updated_at'    => Time::now(),
            'gambar'        => "pengunjung.png"
        ];
        $this->modelalugada->simpannewuser($datauser);

        $datasesi = [
            'nohppengunjung' => $nohp,
        ];
        $this->session->set($datasesi);

        return redirect()->to('/');
    }

    public function lupa_password()
    {
        // var_dump("Benar Lupa Password");
        $nohppengunjung = $this->session->get('nohppengunjung');
        if ($nohppengunjung == null) {
            $nohppengunjung = 123;
        }

        $data = [
            'pengunjung'    => $this->modelalugada->userbynohp($nohppengunjung),
            'title'         => "Lupa Password",
            // 'nohp'          => $nohp
        ];

        return view('auth/lupaPasswordView', $data);
    }

    public function submit_lupa_password()
    {
        $data = [
            'nohploginregister'     => $this->request->getvar('nohp'),
            'lupapassword'          => $this->request->getvar('lupapassword'),
        ];
        $this->session->set($data);
        $this->_otp();

        return redirect()->to('otp');
    }

    public function buat_password_baru()
    {
        $nohppengunjung = $this->session->get('nohppengunjung');
        if ($nohppengunjung == null) {
            $nohppengunjung = 123;
        }

        $pengunjung = $this->modelalugada->userbynohp($nohppengunjung);
        $nohp = $this->session->get('nohploginregister');

        $data = [
            'pengunjung'    => $pengunjung,
            'title'         => "Lupa Password",
            'nohp'          => $nohp,
        ];
        return view('auth/inputPasswordView', $data);
    }

    public function submit_password_baru()
    {
        $nohp       = $this->request->getVar('nohp');
        $password   = $this->request->getVar('password');
        $password1  = $this->request->getVar('confirmpassword');

        if ($password != $password1) {
            return redirect()->to('buat-password-baru');
        }

        $id = $this->modelalugada->userbynohp($nohp)['id'];

        $data = [
            'password'  => $password,
        ];

        $this->modelalugada->updateuser($id, $data);
        return redirect()->to('/');
    }
}
