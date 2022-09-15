<?php

namespace App\Controllers;

class PropertyController extends BaseController
{
    public function index()
    {
        return view('property/rumah/index');
    }

    public function tanah()
    {
        return view('property/tanah/index');
    }

    public function apartemen()
    {
        return view('property/apartemen/index');
    }

    public function ruko()
    {
        return view('property/ruko/index');
    }

    public function detail_rumah()
    {
        return view('property/rumah/detail_rumah');
    }

    public function detail_apartemen()
    {
        return view('property/apartemen/detail_apartemen');
    }

    public function detail_tanah()
    {
        return view('property/tanah/detail_tanah');
    }

    public function detail_ruko()
    {
        return view('property/ruko/detail_ruko');
    }

    public function bangunan_komersial()
    {
        return view('property/bangunan_komersial/index');
    }
    public function detail_bangunan()
    {
        return view('property/bangunan_komersial/detail_bangunan');
    }
}
