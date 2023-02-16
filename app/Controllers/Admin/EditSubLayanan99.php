<?php

namespace App\Controllers;
use App\Models\ModelAlugada;
use App\Controllers\BaseController;

class EditSubLayanan extends BaseController
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->modelalugada = new ModelAlugada();
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        // echo "Benar Edit Sub Layanan"; die;
        // $sublayanan = $this->modelalugada->sublayanan();
        $data = [
            'layanan'    => $this->modelalugada->layanan(),
        ];
        return view('edit_sub_layanan/indexView',$data);
    }

    public function submit_edit_sub_layanan($nolayanan){
        // echo $nolayanan;die;
        $data = [
            'sublayanan'    => $this->modelalugada->sublayanan(),
            'nolayanan'     => $nolayanan,
        ];
        return view('edit_sub_layanan/editView',$data);
    }

    public function form_edit_sub_layanan($nosublayanan){
        $data = [
            // 'nosublayanan'      => $nosublayanan,
            'sublayanan'    => $this->modelalugada->sublayananbynosublayanan($nosublayanan),
        ];
        return view('edit_sub_layanan/formEditView',$data);
    }

    public function submit_form_edit_sub_layanan(){
        // echo "Benar";die;
        $id = $this->request->getVar('id');
        $nolayanan = $this->request->getVar('nolayanan');
        $nosublayanan = $this->request->getVar('nosublayanan');
        $sublayanan = $this->request->getVar('sublayanan');
        $url = $this->request->getVar('url');

        $filegambar = $this->request->getfile('gambar');

        $datasublayanan = $this->modelalugada->sublayananbynosublayanan($nosublayanan);
        $old_gambar = $datasublayanan['gambar'];
        // var_dump($old_gambar);die;
        if($filegambar == NULL or $filegambar == ""){
            // echo "Tidak ada gambar";die;
            $gambar = $old_gambar;
        }else{
            // echo "Ada gambar diupload";die;
            $gambar = $filegambar->getName();
            $filegambar->move('Image/Layanan/Sublayanan');
            unlink('Image/Layanan/Sublayanan/'.$old_gambar);
        }
        
        $data = [
            'sublayanan'        => $sublayanan,
            'gambar'            => $gambar,
            'url'               => $url,
        ];
        $this->modelalugada->updatesublayanan($id,$data);
        return redirect()->to('submit-edit-sub-layanan'.'/'.$nolayanan); 
    }

    public function activate_sub_layanan($nosublayanan,$nolayanan,$id){
        $datasublayanan = $this->modelalugada->sublayananbynosublayanan($nosublayanan);
        // var_dump($datasublayanan['is_active']);die;

        if($datasublayanan['is_active'] == 1){
            $data = [
                'is_active'     => 0,
            ];
        }else{
            $data = [
                'is_active'     => 1,
            ];
        }
        $this->modelalugada->updatesublayanan($id,$data);
        return redirect()->to('submit-edit-sub-layanan'.'/'.$nolayanan);
    }

    public function tambah_sub_layanan($nolayanan){
        //  echo $nolayanan;die;

        $sublayanan = $this->modelalugada->sublayanan();
        foreach($sublayanan as $sl){
            if($sl['nolayanan'] == $nolayanan){
                $nosublayanan = $sl['nosublayanan'];
            }
        }
        // var_dump($nosublayanan + 1);die;

        $data = [
            'nolayanan'         => $nolayanan,
            'nosublayanan'      => $nosublayanan + 1,
        //     'sublayanan'    => $this->modelalugada->sublayananbynosublayanan($nosublayanan),
        ];

        return view('edit_sub_layanan/formInsertView',$data);
    }

    public function submit_form_insert_sub_layanan(){

        $filegambar = $this->request->getFile('gambar');
        if($filegambar == NULL or $filegambar == ""){
            $namagambar = "sublayanandefault.png";
        }else{
            $filegambar->move('Image/Layanan/Sublayanan/');
            $namagambar = $filegambar->getname();
        }

        $nolayanan = $this->request->getVar('nolayanan');
        $data = [
            'nolayanan'     => $nolayanan,
            'nosublayanan'  => $this->request->getVar('nosublayanan'),
            'sublayanan'    => $this->request->getVar('sublayanan'),
            'gambar'        => $namagambar,
            'url'           => $this->request->getVar('url'),
            'is_active'     => 1,
        ];
        $this->modelalugada->insertsublayanan($data);

        // dd($namagambar);die;
        // dd($this->request->getVar());die;

        return redirect()->to('submit-edit-sub-layanan'.'/'.$nolayanan);
    }
}
