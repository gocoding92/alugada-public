<?php

namespace App\Controllers;
use App\Models\ModelTanah;
class TanahController extends BaseController
{
    protected $tanah;
    public function __construct()
    {
        $this->tanah = new ModelTanah();
    }
    public function index()
    {
        $tanah = $this->tanah->findAll();
        $data = ([
            'tanah' =>$tanah
        ]);
        return view('tanah/index', $data);
    }

    public function detailTanah($layanan = '', $nolayanan = '', $sublayanan = '', $nosublayanan = '' )
    {

        $tanah = $this->tanah->getWhere($nosublayanan);
        $data = ([
            'tanah' => $tanah
        ]);
        
        return view('tanah/index', $data);
    }

    public function detail($id = '')
    {
        $tanah = $this->tanah->detailTanah($id);
        $data = ([
            'tanah' => $tanah
        ]);
        return view('tanah/detail', $data);
    }

    
}
