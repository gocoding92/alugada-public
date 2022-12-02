<?php

namespace App\Controllers\Admin;
use App\Models\ModelSlider;
use App\Controllers\BaseController;

class Pesan extends BaseController
{
    protected $ModelSlider;
    public function __construct()
    {
        $ModelSlider = new $ModelSlider();
    }
    public function index()
    {
        $ModelSlider = $ModelSlider->findAll();
        $data = ([
            'slider' => $ModelSlider
        ]);
        return view('admin/pesan/index', $data);
    }

    public function create()
    {
        return view('admin/pesan/create');
    }

    public function update()
    {
        return view('admin/pesan/update');
    }
}
