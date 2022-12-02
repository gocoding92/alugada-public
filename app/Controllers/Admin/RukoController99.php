<?php

namespace App\Controllers;
use App\Models\ModelRuko;
class RukoController extends BaseController
{
    protected $ruko;
    public function __construct()
    {
        $this->ruko = new ModelRuko();
    }
    public function index()
    {
        $ruko = $this->ruko->findAll();
        $data = ([
            'ruko' =>$ruko
        ]);
        return view('ruko/index', $data);
    }

    public function detailRuko($layanan = '', $nolayanan = '', $sublayanan = '', $nosublayanan = '' )
    {

        $ruko = $this->ruko->getWhere($nosublayanan);
        $data = ([
            'ruko' => $ruko
        ]);
        
        return view('ruko/index', $data);
    }

    public function detail($id = '')
    {
        $ruko = $this->ruko->detailRuko($id);
        $data = ([
            'ruko' => $ruko
        ]);

        return view('ruko/detail', $data);
    }

    
}
