<?php

namespace App\Controllers;

use App\Models\ModelTenagaAhli;

class Tenaga_ahliController extends BaseController
{
    protected $tenaga_ahli_model;
    public function __construct()
    {
        $this->tenaga_ahli_model =  new ModelTenagaAhli();
    }

    public function index()
    {
        $ahli = $this->tenaga_ahli_model->findAll();
        $data = ([
            'tenaga' => $ahli
        ]);
        
        return view('tenaga_ahli/index', $data);
    }

    public function detailTenagaAhli($layanan = '', $nolayanan = '', $sublayanan = '', $nosublayanan = '' )
    {

        $ahli = $this->tenaga_ahli_model->getWhere($nosublayanan);
        $data = ([
            'tenaga' => $ahli
        ]);
        
        return view('tenaga_ahli/index', $data);
    }

    public function create()
    {
        return view('tenaga_ahli/create');
    }

    public function update()
    {
        return view('tenaga_ahli/update');
    }

    public function detail($id = '')
    {
        $ahli = $this->tenaga_ahli_model->detailTenagaAhli($id);
        $data = ([
            'tenaga' => $ahli
        ]);
        return view('tenaga_ahli/detail', $data);
    }
}
