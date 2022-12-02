<?php

namespace App\Controllers;
use App\Models\ModelMobil;
class MobilController extends BaseController
{
    protected $mobil;
    public function __construct()
    {
        $this->mobil = new ModelMobil();
    }
    public function index()
    {
        $mobil = $this->mobil->findAll();
        $data = ([
            'mobil' => $mobil
        ]);
        return view('mobil/index', $data);
    }

    public function detailMobil($layanan = '', $nolayanan = '', $sublayanan = '', $nosublayanan = '' )
    {

        $mobil = $this->mobil->getWhere($nosublayanan);
        $data = ([
            'mobil' => $mobil
        ]);
        
        return view('mobil/index', $data);
    }

    public function create()
    {
        return view('mobil/create');
    }

    public function update()
    {
        return view('mobil/update');
    }

    public function detail($id = '')
    {
        $mobil = $this->mobil->detailMobil($id);
        $data = ([
            'mobil' => $mobil
        ]);
        return view('mobil/detail', $data);
    }
}
