<?php

namespace App\Controllers;

use App\Models\ModelMotor;

class MotorController extends BaseController
{
    protected $motor;
    public function __construct()
    {
        $this->motor = new ModelMotor();
    }
    public function index()
    {
        $motor = $this->motor->findAll();
        $data = ([
            'motor' => $motor
        ]);
        return view('motor/index', $data);
    }

    public function detailMotor($layanan = '', $nolayanan = '', $sublayanan = '', $nosublayanan = '' )
    {

        $motor = $this->motor->getWhere($nosublayanan);
        $data = ([
            'motor' => $motor
        ]);
        
        return view('motor/index', $data);
    }

    public function create()
    {
        return view('motor/create');
    }

    public function update()
    {
        return view('motor/update');
    }

    public function detail($id = '')
    {
        $motor = $this->motor->detailMotor($id);
        $data = ([
            'motor' => $motor
        ]);
        return view('motor/detail', $data);
    }
}
