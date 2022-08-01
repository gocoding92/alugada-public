<?php

namespace App\Controllers;
use App\Models\ModelAlugada;

use App\Controllers\BaseController;

class Admin extends BaseController
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->modelalugada = new ModelAlugada();
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        //
        // echo "Benar";die;
        $nohppengunjung = $this->session->get('nohppengunjung');
        if (!$nohppengunjung) {
            $nohppengunjung = 123;
        }
        $data = [
            // 'admin'         => $this->admin,
            'title'         => "Layanan",
            'pengunjung'    => $this->modelalugada->userbynohp($nohppengunjung),
            'layanan'       => $this->modelalugada->layanan(),
            // 'jenisiklan'    => $this->modelalugada->jenisiklan(),
        ];
        return view('admin/indexView', $data);
    }

    public function tambah_sub_layanan($nolayanan){
        // echo $nolayanan;die;
        $nohppengunjung = $this->session->get('nohppengunjung');
        if (!$nohppengunjung) {
            $nohppengunjung = 123;
        }

        $data = [
            'title'         => "Layanan",
            'pengunjung'    => $this->modelalugada->userbynohp($nohppengunjung),
            'nolayanan'     => $nolayanan,
            'sublayanan'    => $this->modelalugada->sublayanan(),
        ];
        // var_dump($sublayanan);die;
        return view('admin/sublayananView',$data);
    }

    public function input_sub_layanan($nolayanan){
        // echo $nolayanan.' - '.$nosublayanan;die;
        $sublayanan = $this->modelalugada->sublayanan();
        foreach($sublayanan as $sl){
            if($sl['nolayanan'] == $nolayanan){
                $nosublayanan = $sl['nosublayanan'];
            }
        }
        // echo $nosublayanan;die;

        $nohppengunjung = $this->session->get('nohppengunjung');
        if (!$nohppengunjung) {
            $nohppengunjung = 123;
        }
        
        $data = [
            'title'         => "Input Sub Layanan",
            'pengunjung'    => $this->modelalugada->userbynohp($nohppengunjung),
            'nolayanan'     => $nolayanan,
            'nosublayanan'   => $nosublayanan+1,
        ];
        // var_dump($sublayanan);die;
        return view('admin/form/inputSublayananView',$data);
        
    }

    public function submit_input_sublayanan(){
        // echo "Benar";die;
        $filegambar = $this->request->getFile('gambar');
        // var_dump($filegambar);die;

        if($filegambar == NULL or $filegambar == ""){
            $namagambar = "sublayanandefault.png";
        }else{
            $filegambar->move('Image/Layanan/Sublayanan');
            $namagambar = $filegambar->getName(); 
        }
        // var_dump($namagambar);die;
        $data = [
            'nolayanan'     => $this->request->getVar('nolayanan'),
            'nosublayanan'  => $this->request->getVar('nosublayanan'),
            'sublayanan'    => $this->request->getVar('sublayanan'),
            'gambar'        => $namagambar,
            'url'           => $this->request->getVar('url'),
            'is_active'     => 1,
        ];
        $this->modelalugada->tambahsublayanan($data);
        return redirect()->to('tambah-sub-layanan'.'/'.$this->request->getVar('nolayanan'));

    }


}
