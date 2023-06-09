<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ModelAlugada;
use PhpParser\Node\Stmt\Break_;

class Iklan extends BaseController
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->alugada = new ModelAlugada();
        $this->session = \Config\Services::session();

        $this->nohplogin = session()->get('nohplogin');
        if($this->nohplogin==Null or $this->nohplogin==""){
            $this->nohplogin = 12341234;
            // return redirect()->to('administrator');
            // var_dump(123456);
        }     

    }
    public function index($x)
    {
        // $y='$r'.$sortir;
        var_dump($x);die;
        
        $role=$this->alugada->userbynohp($this->nohplogin)['role'];
        if($role != 1){
            session()->setFlashdata('belumterdaftar','Masukkan nomor yang terdaftar sebagai Admin');
            return redirect()->to('administrator');
        }

        // $nohplogin = $this->session->get('nohplogin');
        // if($nohplogin==Null or $nohplogin=""){
        //     $nohplogin = 12341234;
        // }else{
        //     $nohplogin=$nohplogin;
        // }
        $data = [
            'namauser' => $this->alugada->userbynohp($this->nohplogin)['nama'],
            'photouser' => $this->alugada->userbynohp($this->nohplogin)['gambar'],
            'nohplogin' => $this->nohplogin,
            'iklanbaru' => $this->alugada->rekomendasiiklan(),
        ];
        // var_dump("Test");die;
        $namaView = $x."View";
        // var_dump($namaView);die;
        return view('admin/iklan/'.$namaView, $data);
    }



    public function detailiklanbaru($id_iklan, $user_id, $id_rekom, $nolayanan, $nosublayanan)
    {
        // var_dump("Id Iklan : ".$id_iklan.' / '."User Id : ".$user_id.' / '."Id Rekom : ".$id_rekom.' / '."No Layanan : ".$nolayanan.' / '."No Sub Layanan : ".$nosublayanan. ' ');die;
        $nohplogin=$this->session->get('nohplogin');
        if($nohplogin==Null or $nohplogin=""){
            $nohplogin=12341234;
        }else{
            $nohplogin=$nohplogin;
        }

        switch ($nolayanan) {
            case 100: //Tenaga Ahli
                $profesi = $this->alugada->sublayananbynosublayanan($nosublayanan)['sublayanan'];

                $iklantenagaahli = $this->alugada->ahlibyid($id_iklan);
                $data = [
                    'nohplogin' =>$nohplogin,
                    'detailahli' => $iklantenagaahli,
                    'user_id'      => $user_id,
                    'id_rekom'      => $id_rekom,
                    'bidang'        => $profesi,
                ];
                return view('admin/iklan/tenagakerja/detailahliView', $data);

                break;

            case 200: //Tenaga Terampil

                $profesi = $this->alugada->sublayananbynosublayanan($nosublayanan)['sublayanan'];
                // var_dump($profesi);die;
                $iklantenagaterampil = $this->alugada->terampilbyid($id_iklan);
                $data = [

                    'nohplogin' =>$nohplogin,
                    'detailterampil' => $iklantenagaterampil,
                    'user_id'      => $user_id,
                    'id_rekom'      => $id_rekom,
                    'bidang'        => $profesi,
                ];
                return view('admin/iklan/tenagakerja/detailterampilView', $data);
                break;
            case 300: //Kost & Kontrakan
                $iklankost = $this->alugada->kostbyid($id_iklan);
                $data = [
                    'nohplogin' =>$nohplogin,
                    'detailkost' => $iklankost,
                    'user_id'      => $user_id,
                    'id_rekom'      => $id_rekom,
                ];
                return view('admin/iklan/property/detailkostView', $data);

                break;
            case 400: //Property
                if ($nosublayanan == 401) {   //Rumah
                    // var_dump("Benar Rumah");die;
                    $iklanrumah = $this->alugada->rumahbyid($id_iklan);
                    $data = [

                        'nohplogin' =>$nohplogin,
                        'detailrumah' => $iklanrumah,
                        'user_id'      => $user_id,
                        'id_rekom'      => $id_rekom,
                    ];
                    return view('admin/iklan/property/detailrumahView', $data);
                } elseif ($nosublayanan == 402) {  // Tanah
                    // var_dump("Benar Tanah");die;
                    $iklantanah = $this->alugada->tanahbyid($id_iklan);
                    $data = [

                        'nohplogin' =>$nohplogin,
                        'detailtanah' => $iklantanah,
                        'user_id'      => $user_id,
                        'id_rekom'      => $id_rekom,
                    ];
                    return view('admin/iklan/property/detailtanahView', $data);
                } elseif ($nosublayanan == 403) {  // Apartemen
                    $iklanapartemen = $this->alugada->apartemenbyid($id_iklan);
                    $data = [

                        'nohplogin' =>$nohplogin,
                        'detailapartemen' => $iklanapartemen,
                        'user_id'      => $user_id,
                        'id_rekom'      => $id_rekom,
                    ];
                    return view('admin/iklan/property/detailapartemenView', $data);
                } elseif ($nosublayanan == 404) {  // Ruko
                    $iklanruko = $this->alugada->rukobyid($id_iklan);
                    $data = [

                        'nohplogin' =>$nohplogin,
                        'detailruko' => $iklanruko,
                        'user_id'      => $user_id,
                        'id_rekom'      => $id_rekom,
                    ];
                    return view('admin/iklan/property/detailrukoView', $data);
                } elseif ($nosublayanan == 405) {  // Bangunan Komersial
                    $iklankomersial = $this->alugada->komersialbyid($id_iklan);
                    $data = [

                        'nohplogin' =>$nohplogin,
                        'detailkomersial' => $iklankomersial,
                        'user_id'      => $user_id,
                        'id_rekom'      => $id_rekom,
                    ];
                    return view('admin/iklan/property/detailkomersialView', $data);
                } elseif ($nosublayanan == 406) {
                } elseif ($nosublayanan == 407) {
                }

                break;
            case 500: //Mobil
                $iklanmobil = $this->alugada->mobilbyid($id_iklan);
                $data = [

                    'nohplogin' =>$nohplogin,
                    'detailmobil' => $iklanmobil,
                    'user_id'      => $user_id,
                    'id_rekom'      => $id_rekom,
                ];
                return view('admin/iklan/kendaraan/detailmobilView', $data);

                break;
            case 600: //Motor
                $iklanmotor = $this->alugada->motorbyid($id_iklan);
                $data = [

                    'nohplogin' =>$nohplogin,
                    'detailmotor' => $iklanmotor,
                    'user_id'      => $user_id,
                    'id_rekom'      => $id_rekom,
                ];
                return view('admin/iklan/kendaraan/detailmotorView', $data);

                break;
            case 700:

                break;
            case 800:

                break;
            case 900:

                break;
        }
    }


    public function acceptiklan($id_iklan, $user_id, $id_rekom, $nolayanan, $nosublayanan, $okno)
    {

        // var_dump($id_iklan.'/'.$user_id.'/'.$id_rekom.'/'.$nolayanan);die;
        //Update Tabel data
        if ($okno == "0") {
            // var_dump("Accept");die;
            $data = [
                'is_active' => 1,
                'checked'   => 1,
                'suspend'   => 0,
            ];
            $datarekom = [
                'is_active' => 1,
                'checked'   => 1,
                'suspend'   => 0,
            ];
        } elseif ($okno == "1") {
            // var_dump("Reject");die;
            $data = [
                'is_active' => 0,
                'checked'   => 1,
                'suspend'   => 1,
            ];
            $datarekom = [
                'is_active' => 0,
                'checked'   => 1,
                'suspend'   => 1,
            ];
        }

        $this->alugada->updaterekom($id_rekom, $datarekom);
        switch ($nolayanan) {
            case 100:
                $this->alugada->updateahli($id_iklan, $data);
                break;
            case 200:
                $this->alugada->updateterampil($id_iklan, $data);
                break;
            case 300:
                $this->alugada->updatekost($id_iklan, $data);
                break;
            case 400:
                if ($nosublayanan == 401) {
                    $this->alugada->updaterumah($id_iklan, $data);
                } elseif ($nosublayanan == 402) {
                    $this->alugada->updatetanah($id_iklan, $data);
                } elseif ($nosublayanan == 403) {
                    $this->alugada->updateapartemen($id_iklan, $data);
                } elseif ($nosublayanan == 404) {
                    $this->alugada->updateruko($id_iklan, $data);
                } elseif ($nosublayanan == 405) {
                    $this->alugada->updatekomersial($id_iklan, $data);
                } elseif ($nosublayanan == 406) {
                } elseif ($nosublayanan == 407) {
                } elseif ($nosublayanan == 408) {
                } elseif ($nosublayanan == 409) {
                }
                break;

            case 500:
                $this->alugada->updatemobil($id_iklan, $data);
                break;
            case 600:
                $this->alugada->updatemotor($id_iklan, $data);
                break;
            case 700:

                break;
            case 800:

                break;

            case 900:

                break;
        }

        return redirect()->to('administrator-area/iklan');
    }
    public function rejectiklan($id_iklan, $user_id, $id_rekom, $nolayanan)
    {
        var_dump($id_iklan . '/' . $user_id . '/' . $id_rekom . '/' . $nolayanan);
        die;
        $data = [
            'is_active' => 0,
            'checked'   => 1,
            'suspend'   => 1,
        ];
        $this->alugada->updateahli($id_iklan, $data);

        $datarekom = [
            'is_active' => 0,
            'suspend'   => 1,
            'checked'   => 1,
        ];
        // var_dump($datarekom);die;
        $this->alugada->updaterekom($id_rekom, $datarekom);

        // var_dump($data);die;
        $this->_rejectiklanahli($id_iklan, $user_id);

        // $this->session->set_flashdata('idsesi', $id);
        // return redirect()->to('detailiklanrumahbaru'.'/'.$id);
        return redirect()->to('administrator-area/iklan');
    }

    private function _rejectiklanahli($id, $user_id)
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

        // $message = "Register berhasil dilakukan";
        // $status = 200;
        // Batas Fonnte 


    }
}
