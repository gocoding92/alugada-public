<?php

namespace App\Controllers;
use App\Models\ModelSlider;
class Slider extends BaseController
{
    protected $slider;
    public function __construct()
    {
        $this->slider = new ModelSlider();
    }
    public function index()
    {
        var_dump('aman');
        exit;
        $slider = $this->slider->findAll();
        $data = ([
            'slider' =>$slider
        ]);
        return view('Admin/slider', $data);
    }
    
}
