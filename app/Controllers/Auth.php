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
        // $this->admin = 0;   //Bukan Admin
    }


    public function logout()
    {
        $this->session->remove('nohppengunjung');
        $this->session->remove('nohploginregister');
        $this->session->remove('otp');

        return redirect()->to('/');
    }

    public function index()         // User Login
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

    public function register()
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
    
        return view('auth/registerView', $data);
    }

    public function verify()
    {
        // ===================== Untuk Header =================
        $nohppengunjung = $this->session->get('nohppengunjung');
        if ($nohppengunjung == null) {
            $nohppengunjung = 123;
        }

        // ============ Ambil No Hp dari Login atau Register ===========
        $loginregister = $this->request->getVar('loginregister');
        $nohploginregister = $this->request->getVar('nohp'); // 0 = Register; 1 = Login

        $datanohploginregister = [
            'nohploginregister' => $nohploginregister,
        ];
        $this->session->set($datanohploginregister); // Simpan No Hp yang Login/ Register dalam session

        // $nohploginregister = $this->session->get('nohploginregister');

        //Cek No Hp terdaftar belum
        $terdaftar = $this->modelalugada->userbynohp($nohploginregister);

        if ($loginregister == 0) {        //Jika User baru Register ($loginregister = 0)
            
            if ($terdaftar) {            //Register ternyata sudah terdaftar
                $data = [
                    'title'         => "Login",
                    'pengunjung'    => $this->modelalugada->userbynohp($nohppengunjung),
                    'nohp'          => $nohploginregister,
                ];
                return view('auth/loginView', $data);

            } else {                // Register dan bener nomor Belum Terdaftar

                $this->_otp();      // Generate OTP
                $otp = $this->session->get('otp');  //Simpan OTP dalam session

                $data = [
                    'title'         => "Register",
                    'pengunjung'    => $this->modelalugada->userbynohp($nohppengunjung),
                    'otp'          => $otp,
                    'nohp'         => $this->session->get('nohploginregister'),
                ];

                return view('auth/otpView', $data);
            }


            // =============================== Jika Login
        } elseif ($loginregister == 1) {

            // =================== Login dan bener Sudah terdaftar ========================
            if ($terdaftar) {
                // var_dump("Login dan Sudah Terdaftar"); die;
                $passwordlogin = $this->request->getVar('password');
                $passwordtersimpan = $terdaftar['password'];

                //Jika password benar
                if ($passwordlogin == $passwordtersimpan) {
                    $datasesi = [
                        'nohppengunjung'       => $nohploginregister,
                    ];
                    $this->session->set($datasesi);

                    $nohppengunjung = $nohploginregister;
                    $data = [
                        'title'         => "Register",
                        'pengunjung'    => $this->modelalugada->userbynohp($nohppengunjung),
                        'layanan'       => $this->modelalugada->layanan(),
                    ];
                    return view('home/indexView', $data);

                    //jika password salah
                } else {
                    //jika password salah                   
                    $data = [
                        'title'         => "Register",
                        'pengunjung'    => $this->modelalugada->userbynohp($nohppengunjung),
                        'layanan'       => $this->modelalugada->layanan(),
                        'nohp'          => $nohploginregister,
                    ];
                    return view('auth/loginView', $data);
                }
                // ============ Batas Login dan sudah terdaftar ==========================



                // =================== Login ternyata Belum terdaftar ===================
            } else {
                $this->session->setFlashdata('pesan', 'Nomor anda belum terdaftar. Silahkan daftar');

                $data = [
                    'title'         => "Register",
                    'pengunjung'    => $this->modelalugada->userbynohp($nohppengunjung),
                    'nohp'          => $nohploginregister,
                ];
                return view('auth/registerView', $data);
            }
        }


        $nohppengunjung = $this->session->get('nohppengunjung');
        if ($nohppengunjung == null) {
            $nohppengunjung = 123;
        }

        $data = [
            'pengunjung'    => $this->modelalugada->userbynohp($nohppengunjung),
            'title'         => "Layanan",
        ];


        return view('auth/verifyView', $data);
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

    // ========================================= Cek OTP =====================
    public function cekotp()
    {
        $nohppengunjung = $this->session->get('nohppengunjung');
        if ($nohppengunjung == null) {
            $nohppengunjung = 123;
        }

        $otp = $this->request->getVar('otp');
        // $nohp = $this->request->getVar('nohp');
        $nohp = $this->session->get('nohploginregister');

        // ===================================== Jika OTP Benar
        if ($otp == $this->session->get('otp')) {
            // var_dump("Benar OTP Sama");die;

            $data = [
                'title'         => "Register",
                'pengunjung'    => $this->modelalugada->userbynohp($nohppengunjung),
                'nohp'          => $nohp,
            ];
            return view('auth/inputDataView', $data);

            // ===================================== Jika OTP Salah
        } else {
            // var_dump("OTP Salah");die;

            $data = [
                'pengunjung'    => $this->modelalugada->userbynohp($nohppengunjung),
                'title'         => "Layanan",
                'nohp'          => $nohp,
                'otp'          => $this->session->get('otp'),
            ];
            return view('auth/otpView', $data);
        }
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
        ];

        return view('auth/lupaPasswordView', $data);
    }
    public function verifikasi_lupa_password()
    {
        $nohp = $this->request->getVar('nohp');

        //cekterf=daftar tidak
        $pengunjung = $this->modelalugada->userbynohp($nohp);
        if (!$pengunjung) {
            return redirect()->to('lupa-password');
        }

        $this->_otp();
        $otp = $this->session->get('otp');

        $nohppengunjung = $this->session->get('nohppengunjung');
        if ($nohppengunjung == null) {
            $nohppengunjung = 123;
        }
        $data = [
            'pengunjung'    => $this->modelalugada->userbynohp($nohppengunjung),
            'title'         => "Lupa Password",
            'nohp'          => $nohp,
            'otp'           => $otp,
        ];

        // var_dump($otp);die;
        return view('auth/otpLupaPasswordView', $data);
    }

    public function cek_otp_lupa_password()
    {
        $nohppengunjung = $this->session->get('nohppengunjung');
        if ($nohppengunjung == null) {
            $nohppengunjung = 123;
        }

        // var_dump("Cek Otp Lupa Password");
        $otp = $this->request->getVar('otp');
        $nohp = $this->request->getVar('nohp');
        $otpsesi = $this->session->get('otp');
        // var_dump($otp . ' - ' . $nohp . ' - ' . $otpsesi);

        $data = [
            'pengunjung'    => $this->modelalugada->userbynohp($nohppengunjung),
            'title'         => "Lupa Password",
            'nohp'          => $nohp,
            'otp'           => $otp,
        ];

        if ($otp != $otpsesi) {
            return view('auth/otpLupaPasswordView', $data);
        }
        // var_dump("OTP Sama");die;
        return view('auth/inputPasswordView', $data);
    }

    public function simpan_new_password()
    {
        $nohppengunjung = $this->session->get('nohppengunjung');
        if ($nohppengunjung == null) {
            $nohppengunjung = 123;
        }

        $pengunjung = $this->modelalugada->userbynohp($nohppengunjung);

        $nohp = $this->request->getVar('nohp');
        $password = $this->request->getVar('password');
        $confirmpassword = $this->request->getVar('confirmpassword');

        $data = [
            'pengunjung'    => $pengunjung,
            'title'         => "Lupa Password",
            'nohp'          => $nohp,
        ];
        if ($password != $confirmpassword) {
            return view('auth/inputPasswordView', $data);
        }

        $data = [
            'password'  => $password,
        ];

        $pengunjunglupapassword = $this->modelalugada->userbynohp($nohp);
        $id = $pengunjunglupapassword['id'];
        // var_dump($id);die;
        $this->modelalugada->updateuser($id, $data);
        return redirect()->to('/');
    }

    //=============== Dari inputDataView ===================================
    public function simpan_new_user()
    {
        
        $this->request->getVar('nama');
        $nohp = $this->request->getVar('nohp');
        
        $nohppengunjung = $this->session->get('nohppengunjung');
        if ($nohppengunjung == null) {
            $nohppengunjung = 123;
        }

        // Ceck password dan confirm password sama atau tidak

        //Jika password dan confirm password tidak sama
        if ($this->request->getVar('password') != $this->request->getVar('confirmpassword')) {
            // var_dump("Password tidak sama");die;
            $this->session->setFlashdata('pesan', 'Password harus sama');

            $data = [
                'pengunjung'    => $this->modelalugada->userbynohp($nohppengunjung),
                'title'         => "Data user",
                'nohp'          => $nohp,
            ];
            return view('auth/inputDataView', $data);
        }

        //Jika password dan confirm password sama
        //Simpan data
        $datauser = [
            'nama'          => $this->request->getVar('nama'),
            'nohp'          => $nohp,
            'password'      => $this->request->getVar('password'),
            'role'          => 10,
            'suspend'       => 0,
            'is_active'     => 1,
            'created_at'    => Time::now(),
            'updated_at'    => Time::now(),
            'gambar'       => "pengunjung.png"
        ];
        $this->modelalugada->simpannewuser($datauser);
        
        $datasesi = [
            'nohppengunjung' => $nohp,
        ];
        $this->session->set($datasesi);

        // var_dump($this->session->get('$nohppengunjung'));die;

        $data = [
            'pengunjung'    => $this->modelalugada->userbynohp($nohp),
            'title'         => "Data user",
            'layanan'       => $this->modelalugada->layanan(),

        ];


        return view('home/indexView', $data);
        // var_dump($this->request->getVar());
    }


    public function data999()
    {
        $nohppengunjung = $this->session->get('nohppengunjung');
        if ($nohppengunjung == null) {
            $nohppengunjung = 123;
        }

        $data = [
            'admin'         => $this->admin,
            'pengunjung'    => $this->modelalugada->userbynohp($nohppengunjung),
            'title'         => "Layanan",
            'layanan'       => $this->modelalugada->layanan(),
            'jenisiklan'    => $this->modelalugada->jenisiklan(),
        ];


        return view('auth/data', $data);
    }
}
