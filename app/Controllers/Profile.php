<?php

namespace App\Controllers;

use App\Models\ModelAlugada;

class Profile extends BaseController
{

    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->modelalugada = new ModelAlugada();
        $this->session = \Config\Services::session();
        $this->admin = 0;   //Bukan Admin

    }
    public function index($param = '')
    {
        $nohppengunjung = $this->session->get('nohppengunjung');
        if ($nohppengunjung == null) {
            $nohppengunjung = 123;
        }

        $data = [
            'admin'         => $this->admin,
            'pengunjung'    => $this->modelalugada->userbynohp($nohppengunjung),
            'title'         => "Layanan",
            'layanan'       => $this->modelalugada->layanan(),
            'jenisiklan'    => $this->modelalugada->jenisiklan(),
        ];


        return view('profile/indexView', $data);
    }

    public function data_iklan()
    {
        $nohppengunjung = $this->session->get('nohppengunjung');
        if ($nohppengunjung == null) {
            $nohppengunjung = 123;
        }

        $data = [
            'admin'         => $this->admin,
            'pengunjung'    => $this->modelalugada->userbynohp($nohppengunjung),
            'title'         => "Layanan",
            'layanan'       => $this->modelalugada->layanan(),
            'jenisiklan'    => $this->modelalugada->jenisiklan(),
        ];


        return view('profile/data_iklanView', $data);
    }

    public function edit_profile()
    {
        $nohppengunjung = $this->session->get('nohppengunjung');
        if ($nohppengunjung == null) {
            $nohppengunjung = 123;
        }

        $data = [
            'admin'         => $this->admin,
            'pengunjung'    => $this->modelalugada->userbynohp($nohppengunjung),
            'title'         => "Layanan",
            'layanan'       => $this->modelalugada->layanan(),
            'jenisiklan'    => $this->modelalugada->jenisiklan(),
        ];


        return view('profile/edit_profileView', $data);
    }

    public function edit_password()
    {
        $nohppengunjung = $this->session->get('nohppengunjung');
        if ($nohppengunjung == null) {
            $nohppengunjung = 123;
        }

        $data = [
            // 'admin'         => $this->admin,
            'pengunjung'    => $this->modelalugada->userbynohp($nohppengunjung),
            'title'         => "Layanan",
            'layanan'       => $this->modelalugada->layanan(),
            'jenisiklan'    => $this->modelalugada->jenisiklan(),
        ];


        return view('profile/edit_passwordView', $data);
    }

    public function simpan_password_baru(){

        //Ambil inputan
        $nohp         = $this->request->getVar('nohp');
        $passwordlama = $this->request->getVar('passwordlama');
        $passwordbaru = $this->request->getVar('passwordbaru');
        $passwordbaru1 = $this->request->getVar('confirmpasswordbaru');

        $pengunjung = $this->modelalugada->userbynohp($nohp);
        $password = $pengunjung['password'];
        $id = $pengunjung['id'];

        $data = [
            // 'admin'         => $this->admin,
            'pengunjung'    => $this->modelalugada->userbynohp($nohp),
            'title'         => "Layanan",
            'layanan'       => $this->modelalugada->layanan(),
            'jenisiklan'    => $this->modelalugada->jenisiklan(),
        ];
        
        //cek Password baru bener gak
        if($passwordbaru != $passwordbaru1){
            $this->session->setFlashdata('pesanpasswordbaru','Konfirmasi password anda berbeda');
            return view('profile/edit_passwordView',$data);
        }
        
        //cek pasword lama bener apa gak
        if($passwordlama != $password){ //Jika password Salah
            $this->session->setFlashdata('pesanpasswordlama','Password yang anda masukkan salah');
            return view('profile/edit_passwordView',$data);
        }      

        //Jika password benar
        $dataupdate = [
            'password'  => $passwordbaru,
        ];
        $this->modelalugada->updateuser($id,$dataupdate);
        $this->session->remove('nohppengunjung');
        return redirect()->to('/');
        // return view('home/indexView',$data);

    }

    public function update_user(){
        // var_dump("Benar update user");
        $filegambar = $this->request->getFile('gambar');
        $nohppengunjung = $this->request->getVar('nohp');
        $nama = $this->request->getVar('nama');
        $tgllahir = $this->request->getVar('tgllahir');
        $perusahaan = $this->request->getVar('perusahaan');
        
        $pengunjung = $this->modelalugada->userbynohp($nohppengunjung);
        // var_dump($pengunjung['id']);die;

        //Ambil Gambar
        if($filegambar == "" or $filegambar == NULL){
            // echo "Tidak ada gambar diupload";
            $gambar = $pengunjung['gambar'];
        }else{
            // echo "Ada gambar diupload";
            // $filegambar->move('Image/User');
            $oldgambar = $pengunjung['gambar'];
            if($oldgambar != "pengunjung.png"){
                // unlink($oldgambar);
            }
            $gambar = $filegambar->getName();
        }

        var_dump($gambar);die;


    }

}
