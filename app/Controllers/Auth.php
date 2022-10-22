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
        return view('auth/loginView');
    }

    public function submit_login()
    {
        if ($this->request->isAJAX()) {
            $no_handphone = $this->request->getPost('no_handphone');
            $login = $this->ModelAuth->login($no_handphone);

            $data = $login[0]['data'];
            $status = $login[1]['status'];
            $response = $login[2]['response'];

            // generate session
            if ($status == 200) {
                $this->session->set($data);
            }

            return $response;
        }
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
