<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ModelAlugada;

class About extends BaseController
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->alugada = new ModelAlugada();
        $this->session = \Config\Services::session();
    }
    public function index()
    {
        //
        $nohplogin = $this->session->get('nohplogin');
        if($nohplogin==NULL or $nohplogin==""){
            $nohplogin = 12341234;
        }else{
            $nohplogin = $nohplogin;
        }

        $tentangkami = $this->alugada->tentangkami();
        // foreach($version as $v){

        // }
        $data = [
            'tentangkami'   => $tentangkami,
            'nohplogin'      => $nohplogin,
        ];
        return view('admin/about/tentangkamiView', $data);

    }

    public function aktifasi($id,$is_active){
        if($is_active==0){
            $data=[
                'is_active' => 1,
            ];
            $this->alugada->updatetentangkami($id,$data);
        }elseif($is_active==1){
            $data=[
                'is_active' => 0,
            ];
            $this->alugada->updatetentangkami($id,$data);
        }
        return redirect()->to('administrator-tentangkami');

    }

    public function edittentangkami($id){
        // var_dump($id);die;
        $nohplogin = $this->session->get('nohplogin');
        if($nohplogin==Null or $nohplogin==""){
            $nohplogin = 12341234;
        }else{
            $nohplogin=$nohplogin;
        }

        $isi = $this->alugada->tentangkamibyid($id)['isi'];
        // var_dump($isi);die;
        $data=[
            'nohplogin' => $nohplogin,
            'id'    => $id,
            'isi'   => $isi,
        ];
        return view('admin/about/edittentangkamiView',$data);
    }
    public function updatetentangkami(){
        $id = $this->request->getVar('id');
        $isi = $this->request->getVar('isi');
// var_dump($isi);die;
        $data=[
            'isi'   => $isi,
        ];
        $this->alugada->updatetentangkami($id,$data);
        return redirect()->to('administrator-tentangkami');
    }

    // public function tambahtentangkami(){
    //     $data =[
    //         'isi'   =
    //     ];
    // }


}
