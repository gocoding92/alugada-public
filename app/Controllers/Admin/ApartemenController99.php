<?php

namespace App\Controllers;
use App\Models\ModelApartemen;
class ApartemenController extends BaseController
{
    protected $apartemen;
    public function __construct()
    {
        $this->apartemen = new ModelApartemen();
    }
    public function index()
    {
        $apartemen = $this->apartemen->findAll();
        $data = ([
            'apartemen' =>$apartemen
        ]);
        return view('apartemen/index', $data);
    }

    public function detailApartemen($layanan = '', $nolayanan = '', $sublayanan = '', $nosublayanan = '' )
    {

        $apartemen = $this->apartemen->getWhere($nosublayanan);
        $data = ([
            'apartemen' => $apartemen
        ]);
        
        return view('apartemen/index', $data);
    }

    public function detail($id = '')
    {
        $apartemen = $this->apartemen->detailApartemen($id);
        $data = ([
            'apartemen' => $apartemen
        ]);

        return view('apartemen/detail', $data);
    }

    
}
