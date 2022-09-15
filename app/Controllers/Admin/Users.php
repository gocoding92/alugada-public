<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        return view('users/index');
    }

    public function create()
    {
        return view('users/create');
    }

    public function update()
    {
        return view('users/update');
    }
}
