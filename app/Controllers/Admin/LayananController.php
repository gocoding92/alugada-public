<?php

namespace App\Controllers;

class LayananController extends BaseController
{
    public function index()
    {
        return view('layanan/index');
    }

    public function create()
    {
        return view ('layanan/create');
    }

    public function update()
    {
        return view ('layanan/update');
    }
}
