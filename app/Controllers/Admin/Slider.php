<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ModelAlugada;

class Slider extends BaseController
{

    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->alugada = new ModelAlugada();
        $this->session = \Config\Services::session();
    }
    public function index()
    {
        //
        // var_dump("Benar");die;
        $slider = $this->alugada->slider();

        $data=[
            'slider'    => $this->alugada->slider(),
        ];
        return view('admin/slider/index',$data);
    }



}
