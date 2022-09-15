<?php

namespace App\Controllers;
use App\Models\ModelRumah;
class RumahController extends BaseController
{
    protected $rumah;
    public function __construct()
    {
        $this->rumah = new ModelRumah();
    }
    public function index()
    {
        $rumah = $this->rumah->findAll();
        $data = ([
            'rumah' =>$rumah
        ]);
        return view('rumah/index', $data);
    }

    public function detailRumah($layanan = '', $nolayanan = '', $sublayanan = '', $nosublayanan = '' )
    {

        $rumah = $this->rumah->getWhere($nosublayanan);
        $data = ([
            'rumah' => $rumah
        ]);
        
        return view('rumah/index', $data);
    }

    public function detail($id = '')
    {
        $rumahh = $this->rumah->detailRumah($id);
        $data = ([
            'rumah' => $rumahh
        ]);
        return view('rumah/detail', $data);
    }

    
}
