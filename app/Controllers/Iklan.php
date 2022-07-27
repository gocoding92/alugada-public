<?php

namespace App\Controllers;

use App\Models\ModelAlugada;

class Iklan extends BaseController
{

    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->modelalugada = new ModelAlugada();
        $this->session = \Config\Services::session();
        $this->admin = 0;   //Bukan Admin

        // $this->form = 'iklan/form/tenaga_ahli';
        $this->form = '';
    }
    public function index($param = '')
    {
        // var_dump($param);
        // die;
        // <!-- iklan/form/property -->
        // <!-- iklan/form/tenaga_ahli -->
        // <!-- iklan/form/tenaga_terampil -->
        // <!-- iklan/form/kost_kontrakan -->
        // <!-- iklan/form/property_disewakan -->
        // <!-- iklan/form/mobil -->
        // <!-- iklan/form/motor -->

        if ($param) {
            if ($param == 'Tenaga Ahli') {
                $this->form = 'iklan/form/tenaga_ahli';
            }
            if ($param == 'Tenaga Terampil') {
                $this->form = 'iklan/form/tenaga_terampil';
            }
            if ($param == 'Kost & Kontrakan') {
                $this->form = 'iklan/form/kost_kontrakan';
            }
            if ($param == 'Mobil') {
                $this->form = 'iklan/form/mobil';
            }
            if ($param == 'Motor') {
                $this->form = 'iklan/form/motor';
            }
            // belum ada view
            if ($param == 'Rumah') {
                $this->form = 'iklan/form/rumah';
            }
            if ($param == 'Tanah') {
                $this->form = 'iklan/form/tanah';
            }
            if ($param == 'Apartemen') {
                $this->form = 'iklan/form/apartemen';
            }
            if ($param == 'Ruko') {
                $this->form = 'iklan/form/ruko';
            }
            if ($param == 'Bangunan Komersial') {
                $this->form = 'iklan/form/bangunan_komersial';
            }
        }

        $nohppengunjung = $this->session->get('nohppengunjung');
        if ($nohppengunjung == null) {
            $nohppengunjung = 123;
            // $idpengunjung = $this->modelalugada->layananbynohp($nohppengunjung);
            // $idpengunjung = $idpengunjung['id']; 
        }
        // var_dump($idpengunjung);
        // die;
        $data = [
            'admin'         => $this->admin,
            'pengunjung'    => $this->modelalugada->userbynohp($nohppengunjung),
            'title'         => "Layanan",
            'layanan'       => $this->modelalugada->layanan(),
            'jenisiklan'    => $this->modelalugada->jenisiklan(),
            'form'          => $this->form,
        ];


        return view('iklan/index', $data);
    }
}
