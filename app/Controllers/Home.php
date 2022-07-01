<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $helpers = ['crud'];

    public function index()
    {
        return view('welcome_message');
    }

    public function list() //List All Data
    {
        $data = helpers_list_all($this->connect, 'blogs');

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

        $data = helpers_create($this->connect, 'blogs', $data_form);

        if ($data) {
            // redirect();
        } else {
            // melakukan ap ?
        }
    }

    public function edit($id = 0)
    {
        // $form = $this->request->getVar();
        // $title = $form['title'];

        $title = 'title 123 edit';
        $description = 'lorem ipsum 123 edit';

        $data_form = [
            'title' => $title,
            'description' => $description,
        ];

        $data = helpers_edit($this->connect, 'blogs', $id, 'id_blogs', $data_form);

        if ($data) {
            //Jika data ada kemana
        } else {
            //jika tidak ada
        }
    }
}
