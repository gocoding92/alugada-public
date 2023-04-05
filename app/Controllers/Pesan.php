<?php

namespace App\Controllers;

use App\Models\ModelAlugada;
use App\Models\ModelPesan;

class Pesan extends BaseController
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->modelalugada = new ModelAlugada();
        $this->modelPesan = new ModelPesan();
        $this->session = \Config\Services::session();
        $this->admin = 0;   //Bukan Admin
    }

    public function index()
    {
        $id_user = $this->session->get('id');
        $data_pesan = $this->modelPesan->getData($id_user);

        $data = [
            'title'         => "Layanan",
            'active'        => 'pesan',
            'data_pesan'    => $data_pesan,
        ];

        return view('pesan/index', $data);
    }

    public function detail()
    {

        $nohppengunjung = $this->session->get('nohppengunjung');
        if ($nohppengunjung == null) {
            $nohppengunjung = 123;
        }

        $data = [
            'admin'         => $this->admin,
            'pengunjung'    => $this->modelalugada->userbynohp($nohppengunjung),
            'title'         => "Layanan",
            'layanan'       => $this->modelalugada->layanan(),
            'jenisiklan'    => $this->modelalugada->jenisiklan(),
            'active'        => 'pesan',

        ];

        return view('pesan/detailView', $data);
    }
}
