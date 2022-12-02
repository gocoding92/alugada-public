<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\ModelAlugada; 

class AuthController extends BaseController
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->modelalugada = new ModelAlugada();
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        return view('admin/auth/loginView');
    }

    public function logout()
    {
        $this->session->remove('nohppengunjung');


        return redirect()->to('/');
    }
    public function submit_login()
    {

        $nohp = $this->request->getVar('nohp');
        $password = $this->request->getVar('password');

        // ============== Cek sudah terdaftar apa belum =========================
        $user = $this->modelalugada->userbynohp($nohp);

        if (!$user) {     // ===================== Jika belum terdaftar
            return redirect()->to('/');
        } elseif ($user['role'] > 9) {       // Jika terdaftar tetapi bukan sebagai Admin (sebagai user)
            return redirect()->to('/');
        } elseif ($password != $user['password']) {     // ======== Cek Password ============
            return redirect()->to('/');
        }

        // ============ Benar sebagai admin ================
        $datasesi = [
            'nohppengunjung' => $nohp,
        ];
        $this->session->set($datasesi);
        return redirect()->to('dashboard');
    }
}
