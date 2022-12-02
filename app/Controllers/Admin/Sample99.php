<?php

namespace App\Controllers;

class Sample extends BaseController
{
    public function index()
    {
        return view('sample/index');
    }

    public function create()
    {
        return view ('sample/create');
    }

    public function update()
    {
        return view ('sample/update');
    }
}
