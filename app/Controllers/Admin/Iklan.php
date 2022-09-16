<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Iklan extends BaseController
{
    public function index()
    {
        return view('admin/iklan/index');
    }

    public function create()
    {
        return view('admin/iklan/create');
    }

    public function update()
    {
        return view('admin/iklan/update');
    }
}
