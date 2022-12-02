<?php

namespace App\Controllers;

use App\Models\ModelTenagaTerampil;

class Tenaga_terampilController extends BaseController
{
    protected $tenaga_terampil_model;
    public function __construct()
    {
        $this->tenaga_terampil_model =  new ModelTenagaTerampil();
    }

    public function index()
    {
        $tenagaterampil = $this->tenaga_terampil_model->findAll();
        $data = ([
            'tenaga' => $tenagaterampil
        ]);
        return view('tenaga_terampil/index', $data);
    }

    public function detailTenagaTerampil($layanan = '', $nolayanan = '', $sublayanan = '', $nosublayanan = '')
    {

        $tenagaterampil = $this->tenaga_terampil_model->getWhere($nosublayanan);
        $data = ([
            'tenaga' => $tenagaterampil
        ]);
        
        return view('tenaga_terampil/index', $data);
    }

    public function create()
    {
        return view('tenaga_terampil/create');
    }

    public function update()
    {
        return view('tenaga_terampil/update');
    }
    public function detail($id= '')
    {
        $tenagaterampil = $this->tenaga_terampil_model->detailTenagaTerampil($id);
        $data = ([
            'tenaga' => $tenagaterampil
        ]);
        return view('tenaga_terampil/detail', $data);
    }
}
