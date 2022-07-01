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
        // $form = $this->request->getVar();

        $title = 'title 123';
        $description = 'lorem ipsum 123';

        $data_form = [
            'title' => $title,
            'description'  => $description,
        ];

        $data = create($this->connect, 'blogs', $data_form);

        if ($data) {
            // redirect();
        }else {
            // melakukan ap ?
        }

    }

    public function edit()
    {
        var_dump(123);
    }
}
