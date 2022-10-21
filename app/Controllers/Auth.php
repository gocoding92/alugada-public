<?php

namespace App\Controllers;

use App\Models\ModelAuth;
use CodeIgniter\I18n\Time;

class Auth extends BaseController
{

    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->ModelAuth = new ModelAuth();
        $this->session = \Config\Services::session();
    }

    public function index()
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
        return view('auth/registerView');
    }

    public function submit_register()
    {
        if ($this->request->isAJAX()) {
            $no_handphone = $this->request->getPost('no_handphone');
            $register = $this->ModelAuth->register($no_handphone);

            return $register;
        }
    }
}
