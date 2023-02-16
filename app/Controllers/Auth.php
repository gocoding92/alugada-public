<?php

namespace App\Controllers;

use App\Models\ModelAuth;
use App\Models\ModelAlugada;
use CodeIgniter\I18n\Time;

class Auth extends BaseController
{

    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->ModelAuth = new ModelAuth();
        $this->alugada = new ModelAlugada();

        $this->session = \Config\Services::session();

        $this->nohplogin = session()->get('nohplogin');
        if ($this->nohplogin == Null or $this->nohplogin == "") {
            $this->nohplogin = 12341234;
            // return redirect()->to('administrator');

        }
    }

    public function index()
    {
        $result['active'] = 'auth';
    
        return view('auth/loginView', $result);
    }

    public function submit_login()
    {
        if ($this->request->isAJAX()) {
            $no_handphone = $this->request->getPost('no_handphone');
            $password = $this->request->getPost('password');
            $login = $this->ModelAuth->login($no_handphone, $password);

            $data = $login[0]['data'];
            $status = $login[1]['status'];
            $response = $login[2]['response'];

            // generate session
            if ($status == 200 && $data) {
                $this->session->set($data);
            }

            return $response;
        }
    }

    public function register()
    {
        
        $result['active'] = 'auth';
    
        return view('auth/registerView', $result);
        
    }

    public function submit_register()
    {
        if ($this->request->isAJAX()) {
            $no_handphone = $this->request->getPost('no_handphone');
            $register = $this->ModelAuth->register($no_handphone);

            return $register;
        }
    }

    public function otp()
    {
        $result['active'] = 'auth';
    
        return view('auth/otpView', $result);
        
    }

    public function submit_otp()
    {
        if ($this->request->isAJAX()) {
            $otp = $this->request->getPost('otp');
            $no_handphone = $this->request->getPost('no_handphone');
            $otp = $this->ModelAuth->otp($otp, $no_handphone);

            return $otp;
        }
    }

    public function data()
    {
        $result['active'] = 'auth';
    
        return view('auth/dataView', $result);
    }

    public function submit_data()
    {
        if ($this->request->isAJAX()) {
            $name = $this->request->getPost('name');
            $password = $this->request->getPost('password');
            $no_handphone = $this->request->getPost('no_handphone');

            $data_auth = $this->ModelAuth->data($name, $no_handphone, $password);

            $data = $data_auth[0]['data'];
            $status = $data_auth[1]['status'];
            $response = $data_auth[2]['response'];

            // generate session
            if ($status == 200) {
                $this->session->set($data);
            }

            return $response;
        }
    }

    public function forget_password()
    {
        
        $result['active'] = 'auth';
    
        return view('auth/forgetPasswordView', $result);
    }

    public function submit_forget_password()
    {
        if ($this->request->isAJAX()) {
            $no_handphone = $this->request->getPost('no_handphone');
            $forget_password = $this->ModelAuth->forget_password($no_handphone);

            return $forget_password;
        }
    }

    public function otp_forget_password()
    {
        $result['active'] = 'auth';
    
        return view('auth/otpForgetPasswordView', $result);
    }

    public function submit_otp_forget_password()
    {
        if ($this->request->isAJAX()) {
            $otp = $this->request->getPost('otp');
            $no_handphone = $this->request->getPost('no_handphone');
            $otp = $this->ModelAuth->otp_forget_password($otp, $no_handphone);

            return $otp;
        }
    }

    public function lockscreen()
    {
        $result['active'] = 'auth';
    
        return view('lockscreen/lockScreenView', $result);
    }

    public function submit_lockscreen()
    {
        if ($this->request->isAJAX()) {
            $password = $this->request->getPost('password');
            $lockscreen = $this->ModelAuth->lockscreen($password);

            $data = $lockscreen[0]['data'];
            $status = $lockscreen[1]['status'];
            $response = $lockscreen[2]['response'];

            // generate session
            if ($status == 200 && $data) {
            }

            return $response;
        }
    }


    public function logout()
    {
        session_destroy();
        return redirect()->to('/beranda');
    }
}
