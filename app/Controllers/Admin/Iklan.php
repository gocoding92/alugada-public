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
            'iklanbaru' => $this->alugada->rekomendasiiklan(),
        ];
        // var_dump("Test");die;
        return view('admin/iklan/iklanbaruView', $data);
    }


    public function detailiklanbaru1(){
        var_dump(11);
    }


    public function detailiklanbaru()
    {
        $id_rekom_iklan = $this->request->getVar('id_rekomendasi_iklan');
        // var_dump($id_rekom_iklan);die;

        $type_rekomendasi_iklan = $this->request->getVar('type_rekomendasi_iklan');
        $id_iklan = $this->request->getVar('id_iklan');
        $user_id = $this->request->getVar('user_id');

        if($type_rekomendasi_iklan == "tenaga_ahli"){
            // var_dump($iklantenagaahli);die;
            return redirect()->to('detailiklanahli'.'/'.$id_iklan.'/'.$user_id.'/'.$id_rekom_iklan);
        }else{

        } 
    

    }

    public function detailiklanahli($id_iklan,$user_id,$id_rekom){
        // var_dump($id_iklan);die;

        $iklantenagaahli = $this->alugada->iklanahlibyid($id_iklan);

        $data=[
            'detailahli' => $iklantenagaahli,
            'user_id'      => $user_id,
            'id_rekom'      => $id_rekom,
        ];
        return view('admin/iklan/detailahliView',$data);
    }


    public function acceptiklanahli($id,$user_id,$id_rekom)
    {
        $data = [
            'is_active' => 1,
            'checked'   => 1,
            'suspend'   => 0,
        ];
        $this->alugada->updateahli($id, $data);
        
        $datarekom = [
            'is_active' => 1,
            'suspend'   => 0,
            'checked'   => 1,
        ];
        $this->alugada->updaterekom($id_rekom, $datarekom);
        // var_dump("Accept : ".$id.'/'.$user_id.'/'.$id_rekom);die;



        // $this->session->set_flashdata('idsesi', $id);
        // return redirect()->to('detailiklanrumahbaru'.'/'.$id);
        return redirect()->to('administrator-area/iklan');
    }
    public function rejectiklanahli($id,$user_id,$id_rekom)
    {
        // var_dump("reject ".$id.'/'.$user_id.'/'.$id_rekom);die;
        $data = [
            'is_active' => 0,
            'checked'   => 1,
            'suspend'   => 1,
        ];
        $this->alugada->updateahli($id, $data);

        $datarekom = [
            'is_active' => 0,
            'suspend'   => 1,
            'checked'   => 1,
        ];
        // var_dump($datarekom);die;
        $this->alugada->updaterekom($id_rekom, $datarekom);

        // var_dump($data);die;
        $this->_rejectiklanahli($id,$user_id);

        // $this->session->set_flashdata('idsesi', $id);
        // return redirect()->to('detailiklanrumahbaru'.'/'.$id);
        return redirect()->to('administrator-area/iklan');
    }

    private function _rejectiklanahli($id,$user_id)
    {
        // var_dump($id);die;
        // send otp whatshapp gateway
        $nohppengiklan = $this->alugada->userbyid($user_id)['nohp'];
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
