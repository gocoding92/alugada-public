<?php

namespace App\Controllers;

use App\Models\ModelKostKontrakan;

class Kost_kontrakanController extends BaseController
{
    protected $kostkontrakan;
    public function __construct()
    {
        $this->kostkontrakan = new ModelKostKontrakan();
    }
    public function index()
    {
        $kost = $this->kostkontrakan->findAll();
        $data = ([
            'kost' => $kost 
        ]);
        return view('kost_kontrakan/index', $data);
    }

    public function detailKostKontrakan($layanan = '', $nolayanan = '', $sublayanan = '', $nosublayanan = '' )
    {

        $nosublayanan = $this->kostkontrakan->getWhere($nosublayanan);
        $data = ([
            'kost' => $nosublayanan
        ]);
        
        return view('kost_kontrakan/index', $data);
    }

    

    public function create()
    {
        return view('kost_kontrakan/create');
    }

    public function update()
    {
        return view('kost_kontrakan/update');
    }

    public function detail($id= '')
    {
        $kost = $this->kostkontrakan->detailKostKontrakan($id);
        $data = ([
            'kostkontrakan' => $kost
        ]);
        return view('kost_kontrakan/detail', $data);
    }
}
