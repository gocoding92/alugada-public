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

        $this->nohplogin = session()->get('nohplogin');
        if($this->nohplogin==Null or $this->nohplogin==""){
            $this->nohplogin = 12341234;
        }
        // $role=$this->alugada->userbynohp($this->nohplogin)['role'];
        // if($role !=1){
        //     return redirect()->to('administrator');
        //     // var_dump($testrole);die;
        // }

    }
    public function index()
    {
        $role=$this->alugada->userbynohp($this->nohplogin)['role'];
        if($role != 1){
            session()->setFlashdata('belumterdaftar','Masukkan nomor yang terdaftar sebagai Admin');
            return redirect()->to('administrator');
        }
        // var_dump("Benar Pesan");die;
        $data = [
            'namauser'  => $this->alugada->userbynohp($this->nohplogin)['nama'],
            'photouser' => $this->alugada->userbynohp($this->nohplogin)['gambar'],
            'pesan' => $this->alugada->pesan(),
            'nohplogin' => $this->nohplogin,
        ];
        return view('admin/pesan/pesansaranView', $data);
    }

    public function balaspesan($idpesan,$idpengirim){
        // var_dump($idpengirim);die;
        var_dump("Benar balas pesan".' / '.$idpesan.' / '.$idpengirim);die;
    }
    public function warningpesan(){
        var_dump("Benar warning pesan");die;
    }
    public function blockpesan(){
        var_dump("Benar block pesan");die;
    }

}
