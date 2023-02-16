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
        if ($this->nohplogin == Null or $this->nohplogin == "") {
            $this->nohplogin = 12341234;
            // return redirect()->to('administrator');
            // var_dump(123456);
        }
    }
    public function index($x)
    {
        // $y='$r'.$sortir;
        // var_dump($x);die;
        switch ($x) {
            case 'admin-iklan-baru':
                // var_dump("case 'admin-iklan-baru':");die;
                $checked = 0;
                $iklan = $this->alugada->iklanbaru($checked);
                break;
            case 'admin-iklan-suspend':
                // var_dump("case 'admin-iklan-suspend':");die;
                $suspend = 1;
                $iklan = $this->alugada->iklansuspend($suspend);
                break;
            case 'admin-iklan-block':
                // var_dump("case 'admin-iklan-block':");die;
                $suspend = 3;
                $iklan = $this->alugada->iklanblock($suspend);
                break;
            case 'admin-iklan-aktif':
                // var_dump("case 'admin-iklan-aktif':");die;
                $is_active = 1;
                $iklan = $this->alugada->iklanaktif($is_active);
                break;
            case 'admin-iklan-tidak-aktif':
                // var_dump("case 'admin-iklan-tidak-aktif':");die;
                $is_active = 0;
                $iklan = $this->alugada->iklanaktif($is_active);
                break;
        }

        $role = $this->alugada->userbynohp($this->nohplogin)['role'];
        if ($role != 1) {
            session()->setFlashdata('belumterdaftar', 'Masukkan nomor yang terdaftar sebagai Admin');
            return redirect()->to('administrator');
        }

        // $nohplogin = $this->session->get('nohplogin');
        // if($nohplogin==Null or $nohplogin=""){
        //     $nohplogin = 12341234;
        // }else{
        //     $nohplogin=$nohplogin;
        // }
        // $data = [
        //     'namauser' => $this->alugada->userbynohp($this->nohplogin)['nama'],
        //     'photouser' => $this->alugada->userbynohp($this->nohplogin)['gambar'],
        //     'nohplogin' => $this->nohplogin,
        //     'iklanbaru' => $this->alugada->rekomendasiiklan(),
        // ];
        // var_dump("Test");die;

        $data['namauser'] = $this->alugada->userbynohp($this->nohplogin)['nama'];
        $data['photouser'] = $this->alugada->userbynohp($this->nohplogin)['gambar'];
        $data['nohplogin'] = $this->nohplogin;
        $data['iklan']  = $iklan;
        // $data['x']      = $x;
        // $namaView = $x . "View";
        // var_dump($namaView);die;
        // return view('admin/iklan/' . $namaView, $data);
        return view('admin/iklan/admin-iklanView', $data);
    }

    public function detailiklan($id_iklan, $user_id, $id_rekom, $nolayanan, $nosublayanan)
    {
        // var_dump($nolayanan);die;
        // var_dump("Id Iklan : ".$id_iklan.' / '."User Id : ".$user_id.' / '."Id Rekom : ".$id_rekom.' / '."No Layanan : ".$nolayanan.' / '."No Sub Layanan : ".$nosublayanan. ' ');die;
        // $nohplogin = $this->session->get('nohplogin');
        // if ($nohplogin == Null or $nohplogin = "") {
        //     $nohplogin = 12341234;
        // } else {
        //     $nohplogin = $nohplogin;
        // }
        
        $data['nohplogin'] = $this->nohplogin;
        $data['user_id']   = $user_id;
        $data['id_rekom']  = $id_rekom;
        $data['namauser']    = $this->alugada->userbynohp($this->nohplogin)['nama'];
        $data['photouser']    = $this->alugada->userbynohp($this->nohplogin)['gambar'];
        
        switch ($nolayanan) {
            case 100: //Tenaga Ahli
                $profesi = $this->alugada->sublayananbynosublayanan($nosublayanan)['sublayanan'];
                $data['bidang']    = $profesi;
                $iklantenagaahli = $this->alugada->ahlibyid($id_iklan);
                $data['detailahli'] = $iklantenagaahli;
                return view('admin/iklan/tenagakerja/detailahliView', $data);
                break;
                
            case 200: //Tenaga Terampil
                $profesi = $this->alugada->sublayananbynosublayanan($nosublayanan)['sublayanan'];
                $iklantenagaterampil = $this->alugada->terampilbyid($id_iklan);
                $data['bidang']    = $profesi;
                $data['detailterampil'] = $iklantenagaterampil;
                return view('admin/iklan/tenagakerja/detailterampilView', $data);
                break;

            case 300: //Kost & Kontrakan
                $iklankost = $this->alugada->kostbyid($id_iklan);
                $data['detailkost'] = $iklankost;
                return view('admin/iklan/property/detailkostView', $data);
                break;
            case 400: //Property
                if ($nosublayanan == 401) {   //Rumah
                    // var_dump("Benar Rumah");die;
                    $iklanrumah = $this->alugada->rumahbyid($id_iklan);
                    $data['detailrumah'] = $iklanrumah;
                    return view('admin/iklan/property/detailrumahView', $data);
                } elseif ($nosublayanan == 402) {  // Tanah
                    // var_dump("Benar Tanah");die;
                    $iklantanah = $this->alugada->tanahbyid($id_iklan);
                    $data['detailtanah'] = $iklantanah;
                    return view('admin/iklan/property/detailtanahView', $data);
                } elseif ($nosublayanan == 403) {  // Apartemen
                    $iklanapartemen = $this->alugada->apartemenbyid($id_iklan);
                    $data['detailapartemen'] = $iklanapartemen;
                    return view('admin/iklan/property/detailapartemenView', $data);
                } elseif ($nosublayanan == 404) {  // Ruko
                    $iklanruko = $this->alugada->rukobyid($id_iklan);
                    $data['detailruko'] = $iklanruko;
                    return view('admin/iklan/property/detailrukoView', $data);
                } elseif ($nosublayanan == 405) {  // Bangunan Komersial
                    $iklankomersial = $this->alugada->komersialbyid($id_iklan);
                    $data['detailkomersial'] = $iklankomersial;
                    return view('admin/iklan/property/detailkomersialView', $data);
                } elseif ($nosublayanan == 406) {
                } elseif ($nosublayanan == 407) {
                }
                break;
            case 500: //Mobil
                $iklanmobil = $this->alugada->mobilbyid($id_iklan);
                $data['detailmobil'] = $iklanmobil;
                return view('admin/iklan/kendaraan/detailmobilView', $data);
                break;
            case 600: //Motor
                $iklanmotor = $this->alugada->motorbyid($id_iklan);
                $data['detailmotor'] = $iklanmotor;
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
            $data['is_active']  =1;
            $data['checked']    =1;

        } elseif ($okno == "1") {
            // var_dump("Reject");die;

            $data['is_active']  =0;
            if($this->alugada->rekomendasibyid($id_rekom)['checked']==0){
                $data['checked'] =1;
            }elseif($this->alugada->rekomendasibyid($id_rekom)['checked']==1){
                $data['checked'] =2;
            }elseif($this->alugada->rekomendasibyid($id_rekom)['checked']==2){
                $data['checked'] =3;
            }

        }

        $this->alugada->updaterekom($id_rekom, $data);
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
