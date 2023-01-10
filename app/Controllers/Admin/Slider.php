<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ModelAlugada;

class Slider extends BaseController
{

    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->alugada = new ModelAlugada();
        $this->session = \Config\Services::session();

        $this->nohplogin = session()->get('nohplogin');
        if($this->nohplogin==Null or $this->nohplogin==""){
            $this->nohplogin = 12341234;

        }
    }
    public function index()
    {

        // var_dump($this->nohplogin);die;
        $slider = $this->alugada->slider();

        $data = [
            // 'namauser'  => $this->alugada->userbynohp($this->nohplogin)['nama'],
            // 'photouser'  => $this->alugada->userbynohp($this->nohplogin)['gambar'],
            'slider'    => $this->alugada->slider(),
        ];
        return view('admin/slider/index', $data);
    }
    public function editSlider()
    {

        $role=$this->alugada->userbynohp($this->nohplogin)['role'];
        if($role != 1){
            session()->setFlashdata('belumterdaftar','Silahkan login dengan Nomor Admin');
            return redirect()->to('administrator');
        }

        $data = [
            'namauser'=> $this->alugada->userbynohp($this->nohplogin)['nama'],
            'photouser'     => $this->alugada->userbynohp($this->nohplogin)['gambar'],
            'nohplogin'     => $this->nohplogin,
            'slider1'    => $this->alugada->sliderbyid(1),
            'slider2'    => $this->alugada->sliderbyid(2),
            'slider3'    => $this->alugada->sliderbyid(3),
        ];
        // var_dump("Benar");die;
        return view('admin/slider/editSliderView', $data);
    }
    public function updateSlider()
    {
        $filegambar1 = $this->request->getFile('gambar1');
        $filegambar2 = $this->request->getFile('gambar2');
        $filegambar3 = $this->request->getFile('gambar3');

        $gambar1_old = $this->alugada->sliderbyid(1)['gambar'];
        $gambar2_old = $this->alugada->sliderbyid(2)['gambar'];
        $gambar3_old = $this->alugada->sliderbyid(3)['gambar'];

        if ($filegambar1 == NULL or $filegambar1 == "") {
            $namagambar1 = $gambar1_old;
        } else {
            $filegambar1->move('Image/carousel/carouselIklan/');
            $namagambar1 = $filegambar1->getName();
            unlink('Image/carousel/carouselIklan/'.$gambar1_old);
        }
        
        if ($filegambar2 == NULL or $filegambar2 == "") {
            $namagambar2 = $gambar2_old;
        } else{
            $filegambar2->move('Image/carousel/carouselIklan/');
            $namagambar2 = $filegambar2->getName();
            unlink('Image/carousel/carouselIklan/'.$gambar2_old);
        }
        
        if ($filegambar3 == NULL or $filegambar3 == "") {
            $namagambar3 = $gambar3_old;
        }else{
            $filegambar3->move('Image/carousel/carouselIklan/');
            $namagambar3 = $filegambar3->getName();
            unlink('Image/carousel/carouselIklan/'.$gambar3_old);
        }

        for($id=1;$id<=3;$id++){
            if($id==1){
                $namagambar = $namagambar1;
            }elseif($id==2){
                $namagambar = $namagambar2;
            }elseif($id==3){
                $namagambar = $namagambar3;
            }
            $data = [
                'gambar'      => $namagambar,
            ];
            $this->alugada->updateslider($id,$data);
        }

        return redirect()->to('admin-slider');
        // $namagambar = $filegambar1->getName();
        // var_dump($gambar1_old . ' / ' . $gambar2_old . ' / ' . $gambar3_old);
        // die;
    }
}
