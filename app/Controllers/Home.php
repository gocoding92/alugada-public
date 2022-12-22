<?php

namespace App\Controllers;

use App\Models\ModelAlugada;
use App\Models\ModelHome;

class Home extends BaseController
{

    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->modelalugada = new ModelAlugada();
        $this->modelhome = new ModelHome();
        $this->session = \Config\Services::session();
        // $this->admin = 0;   //Bukan Admin
    }
    public function index()
    {
        $nohppengunjung = $this->session->get('nohppengunjung');
        if (!$nohppengunjung) {
            $nohppengunjung = 123;
        }

        $query = $this->modelhome->findAll();

        $newDataQuery = array();
        for ($i=0; $i < count($query); $i++) {
            // 1 = is_active active user
            // 0 = suspend active user
            if ($query[$i]['is_active'] == 1 && $query[$i]['suspend'] == 0) {
                array_push($newDataQuery, $query[$i]);
            }
        }

        $querySlider = $this->modelhome->slider();
        $data = [
            // 'admin'         => $this->admin,
            'pengunjung'    => $this->modelalugada->userbynohp($nohppengunjung),
            'title'         => "Layanan",
            'layanan'       => $this->modelalugada->layanan(),
            'rekomendasi_iklan' => $newDataQuery,
            'slider' => $querySlider
            // 'jenisiklan'    => $this->modelalugada->jenisiklan(),
        ];
        return view('home/indexView', $data);
    }

    public function detail($nolayanan = 0, $nosublayanan = 0)
    {

        $nohppengunjung = $this->session->get('nohppengunjung');
        if ($nohppengunjung == null) {
            $nohppengunjung = 123;
        }

        $sublayanan = $this->modelhome->sublayanan($nolayanan);

        $iklan = $this->modelhome->iklan($nosublayanan);
        if ($nosublayanan == 0) {
            $iklan = $this->modelhome->iklanAll($nolayanan);
        }

        $judul = $this->modelalugada->layananbynolayanan($nolayanan)['layanan'];
        $data = [
            'pengunjung'    => $this->modelalugada->userbynohp($nohppengunjung),
            'title'         => $judul,
            'nolayanan'     =>  $nolayanan,
            'sublayanan'    => $this->modelalugada->sublayanan(),
            'jenisiklan'    => $this->modelalugada->jenisiklan(),
            'sublayanan'    => $sublayanan,
            'iklan'         => $iklan,
            'nosublayanan'  => $nosublayanan
        ];
        return view('home/detailView', $data);
    }
}
