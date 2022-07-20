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

        $this->form = 'iklan/form/tenaga_ahli';
    }
    public function index($param = '')
    {

        // <!-- iklan/form/property -->
        // <!-- iklan/form/tenaga_ahli -->
        // <!-- iklan/form/tenaga_terampil -->
        // <!-- iklan/form/kost_kontrakan -->
        // <!-- iklan/form/property_disewakan -->
        // <!-- iklan/form/mobil -->
        // <!-- iklan/form/motor -->

        if ($param) {            
            var_dump($param);
            if ($param == 'Mobil & Motor disewakan') {
                $this->form = 'iklan/form/motor';
            }
            if ($param == 'Tenaga Terampil') {
                $this->form = 'iklan/form/tenaga_terampil';
            }
            if ($param == 'Kost & Kontrakan') {
                $this->form = 'iklan/form/kost_kontrakan';
            }
            if ($param == 'Property dijual' || $param == 'Property disewakan' ) {
                $this->form = 'iklan/form/property';
            }
            // if ($param == '')
        }



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
            'form'          => $this->form,
        ];


        return view('iklan/index', $data);
    }
}
