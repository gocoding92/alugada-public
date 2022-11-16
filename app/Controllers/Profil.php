<?php

namespace App\Controllers;

use App\Models\ModelAlugada;

class Profil extends BaseController
{

    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->modelalugada = new ModelAlugada();
        $this->session = \Config\Services::session();
        $this->admin = 0;   //Bukan Admin

    }
    public function index($param = '')
    {
        return view('profil/indexView');
    }

    public function updateProfil($param = '')
    {
        return view('profil/updateProfilView');
    }

    public function updatePassword($param = '')
    {
        return view('profil/updatePasswordView');
    }
}
