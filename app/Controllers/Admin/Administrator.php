<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Administrator extends BaseController
{
    public function index()
    {
        //var_dump("Benar Administrator");die;
        return view('admin/administratorView');
    }
}
