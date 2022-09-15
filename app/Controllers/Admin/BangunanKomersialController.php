<?php

namespace App\Controllers;
use App\Models\ModelBangunanKomersial;
class BangunanKomersialController extends BaseController
{
    protected $bangunan_komersial;
    public function __construct()
    {
        $this->bangunan_komersial = new ModelBangunanKomersial();
    }
    public function index()
    {
        $bangunan_komersial = $this->bangunan_komersial->findAll();
        $data = ([
            'bangunan_komersial' =>$bangunan_komersial
        ]);
        return view('bangunan_komersial/index', $data);
    }

    public function detailBangunanKomersial($layanan = '', $nolayanan = '', $sublayanan = '', $nosublayanan = '' )
    {

        $bangunan_komersial = $this->bangunan_komersial->getWhere($nosublayanan);
        $data = ([
            'bangunan_komersial' => $bangunan_komersial
        ]);
        
        return view('bangunan_komersial/index', $data);
    }

    public function detail($id = '')
    {
        $bangunan_komersial = $this->bangunan_komersial->detailBangunanKomersial($id);
        $data = ([
            'bangunan_komersial' => $bangunan_komersial
        ]);

        return view('bangunan_komersial/detail', $data);
    }

    
}
