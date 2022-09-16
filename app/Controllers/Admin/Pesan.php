<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Pesan extends BaseController
{
    public function index()
    {
        return view('admin/pesan/index');
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
