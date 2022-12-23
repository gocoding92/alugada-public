<?php

namespace App\Controllers\Admin;

use App\Models\ModelAlugada;
use App\Controllers\BaseController;

class Pesan extends BaseController
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->alugada = new ModelAlugada();
        $this->session = \Config\Services::session();
    }
    public function index()
    {
        // var_dump("Benar Pesan");die;
        $data = [
            'pesan' => $this->alugada->pesan(),
        ];
        return view('admin/pesan/pesansaranView', $data);
    }

    public function balaspesan($idpesan,$idpengirim){
        var_dump("Benar balas pesan".' / '.$idpesan).' / '.$idpengirim;die;
    }
    public function warningpesan(){
        var_dump("Benar warning pesan");die;
    }
    public function blockpesan(){
        var_dump("Benar block pesan");die;
    }

}
