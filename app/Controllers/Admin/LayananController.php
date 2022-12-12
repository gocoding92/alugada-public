<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ModelAlugada;

class LayananController extends BaseController
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->alugada = new ModelAlugada();
        $this->session = \Config\Services::session();
    }


    public function index()
    {
        //var_dump("Benar");die;
        $layanan = $this->alugada->layanan();
        $data =[
            'layanan'   => $layanan,
        ];
        return view('admin/layanan/layananView',$data);
    }

    public function aktifasilayanan($nolayanan){
        // var_dump($nolayanan);die;
        $layanan = $this->alugada->layananbynolayanan($nolayanan);
        if ($layanan['is_active']){
            // var_dump("Satu");die;
            $data = [
                'is_active' => 0,
            ];
            $this->alugada->updatelayananbynolayanan($nolayanan,$data);

        }else{
            // var_dump("Nol");die;
            $data = [
                'is_active' => 1,
            ];
            $this->alugada->updatelayananbynolayanan($nolayanan,$data);

        }
        return redirect()->to('administrator-area/layanan');
    }

    public function tambahlayanan(){
        $layanan = $this->alugada->layanan();
        foreach($layanan as $l){
            $l['nolayanan'];
        };
        $nolayananbaru = $l['nolayanan'] + 100;
        // var_dump($nolayananbaru);die;
        $data=[
            'layanan'   => $layanan,
            'nolayananbaru' =>$nolayananbaru,
        ];
        return view('admin/layanan/tambahlayananView',$data);
    }

    public function simpantambahlayanan(){
        // var_dump("Benar");die;

        // if(!$this->validate([
        //     'layanan'   => [
        //         'rules'      => 'required|is_unique[tbl_layanan.layanan]',
        //         'errors'    => [
        //             'required'  => 'Layanan harus diisi',
        //             'errors'    => 'Layanan sudah terdaftar',
        //         ]
        //     ]
        // ])){
        //     $validation = \config\services::validation();
        //     var_dump($validation);die;
        //     return redirect()->to('tambahlayanan')->withInput();
        // }

// var_dump($this->request->getVar());die;

        $filegambar = $this->request->getFile('gambar');
        if($filegambar == "" or $filegambar == NULL){
            $namagambar = "default.png";
        }else{
            $filegambar->move('Image/Layanan');
            $namagambar = $filegambar->getName();
        }

        // var_dump($namagambar);die;
        $aktifasi = $this->request->getVar('aktifasi');
        // var_dump($aktifasi);die;
        $data = [
            'nolayanan'     => $this->request->getVar('nolayanan'),
            'layanan'       => $this->request->getVar('layanan'),
            'detaillayanan'       => "",
            'gambar'        => $namagambar,
            'url'           => $this->request->getVar('url'),
            'is_active'     => $aktifasi,
        ];
        // var_dump($data);die;
        $this->alugada->tambahlayanan($data);
        return redirect()->to('administrator-area/layanan');
    }

    public function editlayanan($nolayanan){
        // var_dump($nolayanan);die;

        $layanan = $this->alugada->layananbynolayanan($nolayanan);
        $data=[
            'layanan'   => $layanan,
        ];
        return view('admin/layanan/editlayananView',$data);
    }
    public function simpaneditlayanan($nolayanan){

        $filegambar = $this->request->getFile('gambar');
        $layanan = $this->alugada->layananbynolayanan($nolayanan);
        $gambarlama = $layanan['gambar']; 

        if($filegambar == NULL or $filegambar == ""){
            $namagambar = $layanan['gambar'];
        }else{
            $filegambar->move('Image/Layanan/');
            $namagambar = $filegambar->getName();
        }
        // var_dump($namagambar);die;
        
        $layananEdit = $this->request->getVar('layanan');
        $detaillayananEdit = $this->request->getVar('detaillayanan');
        $urlEdit = $this->request->getVar('url');
        $dataedit = [
            // 'nolayanan'         => $nolayanan,
            'layanan'           => $layananEdit,
            'detaillayanan'     => $detaillayananEdit,
            'url'               => $urlEdit,
            'gambar'            => $namagambar,
        ];
// var_dump($dataedit);die();
        $this->alugada->updatelayananbynolayanan($nolayanan,$dataedit);
        return redirect()->to('administrator-area/layanan');
    }




}
