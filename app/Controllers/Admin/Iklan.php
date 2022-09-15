<?php

namespace App\Controllers;

class Iklan extends BaseController
{
    public function index()
    {
        return view('iklan/index');
    }

    public function create()
    {
        return view('iklan/create');
    }

    public function update()
    {
        return view('iklan/update');
    }
}
