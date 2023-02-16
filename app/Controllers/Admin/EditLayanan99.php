<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAlugada;

class EditLayanan extends BaseController
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->modelalugada = new ModelAlugada();
        $this->session = \Config\Services::session();
    }
    public function index()
    {

        $data = [
            'layanan'   => $this->modelalugada->layanan(),
        ];

        return view('edit_layanan/editView',$data);
    }

    public function tambah_layanan(){
        $layanan = $this->modelalugada->layanan();
        foreach($layanan as $l){
            $nolayanan = $l['nolayanan'];
        }
        // var_dump($nosublayanan + 1);die;

        $data = [
            'nolayanan'         => $nolayanan + 100,
            // 'nosublayanan'      => $nosublayanan + 1,
        //     'sublayanan'    => $this->modelalugada->sublayananbynosublayanan($nosublayanan),
        ];

        // var_dump($data['nolayanan']);die;
        return view('edit_layanan/formInsertView',$data);

    }

    public function simpan_tambah_layanan(){
        $filegambar = $this->request->getFile('gambar');
        if($filegambar == NULL or $filegambar == ""){
            $namagambar = "layanandefault.png";
        }else{
            $filegambar->move('Image/Layanan/');
            $namagambar = $filegambar->getName();
        }
        $data = [
            'nolayanan'     => $this->request->getVar('nolayanan'),
            'layanan'       => $this->request->getVar('layanan'),
            'detaillayanan' => $this->request->getVar('detaillayanan'),
            'gambar'        => $namagambar,
            'url'           => $this->request->getVar('url'),
            'is_active'     => 1,
        ];

        $this->modelalugada->insertlayanan($data);
        return redirect()->to('edit-layanan');
    }
    public function submit_edit_layanan($nolayanan){
        // dd($nolayanan);die;

        $data = [
            'nolayanan' => $nolayanan,
            'layanan'   =>$this->modelalugada->layananbynolayanan($nolayanan),
        ];

        return view('edit_layanan/formEditView',$data);
    }
    public function submit_form_edit_layanan(){
        $nolayanan = $this->request->getVar('nolayanan');
        $datalayanan = $this->modelalugada->layananbynolayanan($nolayanan);
        $oldgambar  = $datalayanan['gambar'];
        $id = $datalayanan['id'];

        $filegambar = $this->request->getFile('gambar');
        if($filegambar == NULL or $filegambar == ""){
            $data = [
                'nolayanan'     => $nolayanan,
                'layanan'       => $this->request->getVar('layanan'),
                'detaillayanan' => $this->request->getVar('detaillayanan'),
                'url'           => $this->request->getVar('url'),
            ];
        }else{
            $filegambar->move('Image/Layanan/');
            $namagambar = $filegambar->getName();
            unlink('Image/Layanan/'.$oldgambar);
            $data = [
                'nolayanan'     => $nolayanan,
                'layanan'       => $this->request->getVar('layanan'),
                'detaillayanan' => $this->request->getVar('detaillayanan'),
                'gambar'        => $namagambar,
                'url'           => $this->request->getVar('url'),
            ];
        }
        $this->modelalugada->updatelayanan($id,$data);
        return redirect()->to('edit-layanan');
    }

    public function activate_layanan($nolayanan){
        // dd($nolayanan);die;
        $datalayanan = $this->modelalugada->layananbynolayanan($nolayanan);
        $id = $datalayanan['id'];
        if($datalayanan['is_active'] == 1){
            $data = [
                'is_active'         => 0,
            ];
        }else{
            $data = [
                'is_active'         => 1,
            ];
        }
        $this->modelalugada->updatelayanan($id,$data);

        return redirect()->to('edit-layanan');
    }


}
