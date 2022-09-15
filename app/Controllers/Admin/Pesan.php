<?php

namespace App\Controllers;

class Pesan extends BaseController
{
    public function index()
    {
        return view('pesan/index');
    }

    public function create()
    {
        return view('pesan/create');
    }

    public function update()
    {
        return view('pesan/update');
    }
}
