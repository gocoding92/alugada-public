<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ModelAlugada;

class SubLayananController extends BaseController
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
        $data =[
            'layanan'    => $this->alugada->layanan(),
        ];
        return view('admin/sublayanan/sublayananView',$data);
    }

    public function sublayanan($nolayanan){
        $namalayanan = $this->alugada->layananbynolayanan($nolayanan)['layanan'];
        // var_dump("Benar Ahli : ".$nolayanan);die;

        $nosublayanan = $this->alugada->sublayanan();
        foreach($nosublayanan as $nsl){
            if($nolayanan == $nsl['nolayanan']){
                if($nsl['nosublayanan'] == NULL or $nsl['nosublayanan'] == "" ){
                    $nosub = $nsl['nolayanan']+1;
                }else{
                    $nosub = $nsl['nosublayanan'];
                }
            }
        }
// var_dump($nosub);die;
        $data =[
            'layanan'    => $this->alugada->layanan(),
            'sublayanan'    => $this->alugada->sublayanan(),
            'nolayanan'     => $nolayanan,
            'namalayanan'   => $namalayanan,
            'nosublayanan'  => $nosub,
        ];
        return view('admin/sublayanan/sublayananView',$data);
    }

    public function aktifasisublayanan($nosublayanan,$nolayanan)
    {
        // var_dump($nolayanan);die;
        $sublayanan = $this->alugada->sublayananbynosublayanan($nosublayanan);
        if ($sublayanan['is_active']) {
            // var_dump("Satu");die;
            $data = [
                'is_active' => 0,
            ];
            // $this->alugada->updatesublayananbynosublayanan($nosublayanan, $data);
        } else {
            // var_dump("Nol");die;
            $data = [
                'is_active' => 1,
            ];
            // $this->alugada->updatesublayananbynosublayanan($nosublayanan, $data);
        }
        $this->alugada->updatesublayananbynosub($nosublayanan, $data);

        return redirect()->to('admin-sub-layanan/'.$nolayanan);
    }

    public function tambahsublayanan(){
        // var_dump($this->request->getVar());die;
        $nolayanan = $this->request->getVar('tambahnolayanan');
        $nosublayanan = $this->request->getVar('tambahnosublayanan');
        $sublayanan = $this->request->getVar('tambahsublayanan');
        $url = $this->request->getVar('tambahurl');

        $filegambar = $this->request->getFile('gambartambah');
        if($filegambar == null or $filegambar == ""){
            
            // var_dump($this->alugada->sublayananbynosublayanan($nosublayanan)['gambar']);die;
            $namagambar = "default.png";
        }else{
            $filegambar->move('Image/Layanan/Sublayanan/');
            $namagambar = $filegambar->getName();
        }

        $data = [
            'nolayanan'     => $nolayanan,
            'nosublayanan'  => $nosublayanan,
            'sublayanan'    => $sublayanan,
            'gambar'        => $namagambar,
            'url'           => $url,
            'is_active'     => 1,
        ];
        // var_dump($data);die;
        $this->alugada->tambahsublayanan($data);
        return redirect()->to('admin-sub-layanan/'.$nolayanan);

    }

    public function editsublayanan(){
        $nolayanan = $this->request->getVar('editnolayanan');
        $nosublayanan = $this->request->getVar('editnosublayanan');
        $sublayanan = $this->request->getVar('editsublayanan');
        $url = $this->request->getVar('editurl');
        $filegambar = $this->request->getFile('gambar');
        $gambarlama = $this->alugada->sublayananbynosublayanan($nosublayanan)['gambar'];
        if($filegambar == null or $filegambar == ""){
            
            // var_dump($this->alugada->sublayananbynosublayanan($nosublayanan)['gambar']);die;
            $namagambar = $gambarlama;
        }else{
            $filegambar->move('Image/Layanan/Sublayanan/');
            $namagambar = $filegambar->getName();
            if($gambarlama != "default.png"){
                unlink('Image/Layanan/Sublayanan/'.$gambarlama);
            }
        }

        $data = [
            'nolayanan'     => $nolayanan,
            'nosublayanan'  => $nosublayanan,
            'sublayanan'    => $sublayanan,
            'gambar'    => $namagambar,
            'url'       => $url,
            'is_active' => 1,
        ];
        $this->alugada->updatesublayananbynosub($nosublayanan,$data);
        return redirect()->to('admin-sub-layanan/'.$nolayanan);
    }

    // public function aktifasisublayanan($nosublayanan)
    // {
    //     $layanan = $this->alugada->layananbynolayanan($nolayanan);
    //     if ($layanan['is_active']) {
    //         $data = [
    //             'is_active' => 0,
    //         ];
    //     } else {
    //         $data = [
    //             'is_active' => 1,
    //         ];
    //     }
    //     $this->alugada->updatelayananbynolayanan($nolayanan, $data);
    //     return redirect()->to('admin-layanan');
    // }




}
