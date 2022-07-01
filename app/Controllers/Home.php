<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $helpers = ['crud'];

    public function index()
    {
        return view('welcome_message');
    }

    public function list()
    {
        $data = list_all($this->connect, 'blogs');

        echo "<pre>";
        print_r($data);
    }

    public function create()
    {
        var_dump(123);
    }

    public function edit()
    {
        var_dump(123);
    }
}
