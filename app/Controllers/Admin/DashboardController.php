<?php

namespace App\Controllers;

use App\Models\ModelAlugada;

class DashboardController extends BaseController
{


    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->modelalugada = new ModelAlugada();
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        // var_dump($nohppengunjung);die; risky
        $data = [
            'user'              => $this->modelalugada->user(),
            'layanan'           => $this->modelalugada->layanan(),
            'sublayanan'        => $this->modelalugada->sublayanan(),
            // 'iklancarikerja'    => array(),
            'iklancarikerja'    => $this->modelalugada->iklancarikerja(),
            'iklanproperty'    => $this->modelalugada->iklanproperty(),
            // 'iklanproperty'    => array(),
            // 'iklanmobilmotor'    => array(),
            'iklanmobilmotor'    => $this->modelalugada->iklanmobilmotor(),
        ];

        return view('dashboard/indexView', $data);
    }
}
