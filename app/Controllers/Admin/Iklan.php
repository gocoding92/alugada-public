<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ModelAlugada;

class Iklan extends BaseController
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->alugada = new ModelAlugada();
        $this->session = \Config\Services::session();
    }
    public function index()
    {
        $data = [
            'rumah' => $this->alugada->iklanrumah(),
        ];
        // var_dump("Test");die;
        return view('admin/iklan/index',$data);
    }

    public function detailiklanrumahbaru($id=0){


        // var_dump("Benar : ".$id);die;
        $data = [
            'detailrumah' => $this->alugada->iklanrumahbyid($id),
        ];
        // var_dump("Test");die;
        return view('admin/iklan/detailiklanrumahView',$data);

    }
    public function acceptiklan($id){
            // var_dump($id);die;
            $data = [
                'is_active' =>1,
                'checked'   =>1,
                'suspend'   =>0,
            ];
        
        $this->alugada->updaterumah($id,$data);
        // $this->session->set_flashdata('idsesi', $id);
        // return redirect()->to('detailiklanrumahbaru'.'/'.$id);
        return redirect()->to('administrator-area/iklan');
    }
    public function rejectiklan($id){
        // var_dump($id);die;
        $data = [
            'is_active' =>0,
            'checked'   =>1,
            'suspend'   =>1,
        ];
    
        $this->_rejectiklan($id);

        $this->alugada->updaterumah($id,$data);
        // $this->session->set_flashdata('idsesi', $id);
        // return redirect()->to('detailiklanrumahbaru'.'/'.$id);
        return redirect()->to('administrator-area/iklan');

    }

    private function _rejectiklan($id){
        // var_dump($id);die;
                // send otp whatshapp gateway
                $nohppengiklan = $this->alugada->userbyid($id)['nohp'];
                // var_dump($nohppengiklan);die;


                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://api.fonnte.com/send',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS => array(
                        'target' => $nohppengiklan,
                        'message' => "Selamat Datang di Alugada\r\n \r\n_Maaf iklan anda belum dapat kami tayangkan, karena melanggar ketentuan/persyaratan iklan. Silahkan diperbaiki._",
                        'url' => 'https://md.fonnte.com/images/wa-logo.png',
                        'filename' => 'filename',
                        'schedule' => '0',
                        'delay' => '2',
                        'countryCode' => '62',
                    ),
                    CURLOPT_HTTPHEADER => array(
                        'Authorization: 2D3-nhz3YnAucN2D_Z4E'
                    ),
                ));

                $response = curl_exec($curl);
                curl_close($curl);

                $message = "Register berhasil dilakukan";
                $status = 200;
                // Batas Fonnte 


    }

}
