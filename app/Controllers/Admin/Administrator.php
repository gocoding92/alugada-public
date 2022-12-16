<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ModelAlugada;


class Administrator extends BaseController
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->alugada = new ModelAlugada();
        $this->session = \Config\Services::session();
    }

    public function index()
    {

        // Data Iklan
        $ahli = $this->alugada->ahli();
        $iklanahli = 0;
        $iklanahlibaru = 0;
        $iklanahliaktif = 0;
        $iklanahlisuspend = 0;
        foreach ($ahli as $ahli) {
            $iklanahli = $iklanahli + 1;
            if ($ahli['checked'] == 0) {
                $iklanahlibaru = $iklanahlibaru + 1;
            }
            if ($ahli['is_active'] == 1) {
                $iklanahliaktif = $iklanahliaktif + 1;
            }
            if ($ahli['suspend'] == 1) {
                $iklanahlisuspend = $iklanahlisuspend + 1;
            }
        }
        $jmliklanahli = $iklanahli;
        $jmliklanahlibaru = $iklanahlibaru;
        $jmliklanahliaktif = $iklanahliaktif;
        $jmliklanahlisuspend = $iklanahlisuspend;

        $terampil = $this->alugada->terampil();
        $iklanterampil = 0;
        $iklanterampilaktif = 0;
        $iklanterampilbaru = 0;
        $iklanterampilsuspend = 0;
        foreach ($terampil as $terampil) {
            $iklanterampil = $iklanterampil + 1;
            if ($terampil['checked'] == 0) {
                $iklanterampilbaru = $iklanterampilbaru + 1;
            }
            if ($terampil['is_active'] == 1) {
                $iklanterampilaktif = $iklanterampilaktif + 1;
            }
            if ($terampil['suspend'] == 1) {
                $iklanterampilsuspend = $iklanterampilsuspend + 1;
            }
        }
        $jmliklanterampil = $iklanterampil;
        $jmliklanterampilbaru = $iklanterampilbaru;
        $jmliklanterampilaktif = $iklanterampilaktif;
        $jmliklanterampilsuspend = $iklanterampilsuspend;

        $rumah = $this->alugada->rumah();
        $iklanrumah = 0;
        $iklanrumahbaru = 0;
        $iklanrumahaktif = 0;
        $iklanrumahsuspend = 0;
        foreach ($rumah as $rumah) {
            $iklanrumah = $iklanrumah + 1;
            if ($rumah['checked'] == 0) {
                $iklanrumahbaru = $iklanrumahbaru + 1;
            }
            if ($rumah['is_active'] == 1) {
                $iklanrumahaktif = $iklanrumahaktif + 1;
            }
            if ($rumah['suspend'] == 1) {
                $iklanrumahsuspend = $iklanrumahsuspend + 1;
            }
        }
        $jmliklanrumah = $iklanrumah;
        $jmliklanrumahbaru = $iklanrumahbaru;
        $jmliklanrumahaktif = $iklanrumahaktif;
        $jmliklanrumahsuspend = $iklanrumahsuspend;

        $tanah = $this->alugada->tanah();
        $iklantanah = 0;
        $iklantanahbaru = 0;
        $iklantanahaktif = 0;
        $iklantanahsuspend = 0;
        foreach ($tanah as $tanah) {
            $iklantanah = $iklantanah + 1;
            if ($tanah['checked'] == 0) {
                $iklantanahbaru = $iklantanahbaru + 1;
            }
            if ($tanah['is_active'] == 1) {
                $iklantanahaktif = $iklantanahaktif + 1;
            }
            if ($tanah['suspend'] == 1) {
                $iklantanahsuspend = $iklantanahsuspend + 1;
            }
        }
        $jmliklantanah = $iklantanah;
        $jmliklantanahbaru = $iklantanahbaru;
        $jmliklantanahaktif = $iklantanahaktif;
        $jmliklantanahsuspend = $iklantanahsuspend;

        $apartemen = $this->alugada->apartemen();
        $iklanapartemen = 0;
        $iklanapartemenbaru = 0;
        $iklanapartemenaktif = 0;
        $iklanapartemensuspend = 0;
        foreach ($apartemen as $apartemen) {
            $iklanapartemen = $iklanapartemen + 1;
            if ($apartemen['checked'] == 0) {
                $iklanapartemenbaru = $iklanapartemenbaru + 1;
            }
            if ($apartemen['is_active'] == 1) {
                $iklanapartemenaktif = $iklanapartemenaktif + 1;
            }
            if ($apartemen['suspend'] == 1) {
                $iklanapartemensuspend = $iklanapartemensuspend + 1;
            }
        }
        $jmliklanapartemen = $iklanapartemen;
        $jmliklanapartemenbaru = $iklanapartemenbaru;
        $jmliklanapartemenaktif = $iklanapartemenaktif;
        $jmliklanapartemensuspend = $iklanapartemensuspend;

        $ruko = $this->alugada->ruko();
        $iklanruko = 0;
        $iklanrukobaru = 0;
        $iklanrukoaktif = 0;
        $iklanrukosuspend = 0;
        foreach ($ruko as $ruko) {
            $iklanruko = $iklanruko + 1;
            if ($ruko['checked'] == 0) {
                $iklanrukobaru = $iklanrukobaru + 1;
            }
            if ($ruko['is_active'] == 1) {
                $iklanrukoaktif = $iklanrukoaktif + 1;
            }
            if ($ruko['suspend'] == 1) {
                $iklanrukosuspend = $iklanrukosuspend + 1;
            }
        }
        $jmliklanruko = $iklanruko;
        $jmliklanrukobaru = $iklanrukobaru;
        $jmliklanrukoaktif = $iklanrukoaktif;
        $jmliklanrukosuspend = $iklanrukosuspend;


        $komersial = $this->alugada->komersial();
        $iklankomersial = 0;
        $iklankomersialbaru = 0;
        $iklankomersialaktif = 0;
        $iklankomersialsuspend = 0;
        foreach ($komersial as $komersial) {
            $iklankomersial = $iklankomersial + 1;
            if ($komersial['checked'] == 0) {
                $iklankomersialbaru = $iklankomersialbaru + 1;
            }
            if ($komersial['is_active'] == 1) {
                $iklankomersialaktif = $iklankomersialaktif + 1;
            }
            if ($komersial['suspend'] == 1) {
                $iklankomersialsuspend = $iklankomersialsuspend + 1;
            }
        }
        $jmliklankomersial = $iklankomersial;
        $jmliklankomersialbaru = $iklankomersialbaru;
        $jmliklankomersialaktif = $iklankomersialaktif;
        $jmliklankomersialsuspend = $iklankomersialsuspend;


        $mobil = $this->alugada->mobil();
        $iklanmobil = 0;
        $iklanmobilbaru = 0;
        $iklanmobilaktif = 0;
        $iklanmobilsuspend = 0;
        foreach ($mobil as $mobil) {
            $iklanmobil = $iklanmobil + 1;
            if ($mobil['checked'] == 0) {
                $iklanmobilbaru = $iklanmobilbaru + 1;
            }
            if ($mobil['is_active'] == 1) {
                $iklanmobilaktif = $iklanmobilaktif + 1;
            }
            if ($mobil['suspend'] == 1) {
                $iklanmobilsuspend = $iklanmobilsuspend + 1;
            }
        }
        $jmliklanmobil = $iklanmobil;
        $jmliklanmobilbaru = $iklanmobilbaru;
        $jmliklanmobilaktif = $iklanmobilaktif;
        $jmliklanmobilsuspend = $iklanmobilsuspend;


        $motor = $this->alugada->motor();
        $iklanmotor = 0;
        $iklanmotorbaru = 0;
        $iklanmotoraktif = 0;
        $iklanmotorsuspend = 0;
        foreach ($motor as $motor) {
            $iklanmotor = $iklanmotor + 1;
            if ($motor['checked'] == 0) {
                $iklanmotorbaru = $iklanmotorbaru + 1;
            }
            if ($motor['is_active'] == 1) {
                $iklanmotoraktif = $iklanmotoraktif + 1;
            }
            if ($motor['suspend'] == 1) {
                $iklanmotorsuspend = $iklanmotorsuspend + 1;
            }
        }
        $jmliklanmotor = $iklanmotor;
        $jmliklanmotorbaru = $iklanmotorbaru;
        $jmliklanmotoraktif = $iklanmotoraktif;
        $jmliklanmotorsuspend = $iklanmotorsuspend;
        // Batas Data Iklan

        $user = $this->alugada->user();
        $pengguna = 0;
        $pengiklan = 0;
        foreach ($user as $user) {
            $pengguna = $pengguna + 1;
            if ($user['role'] == 20) {
                $pengiklan = $pengiklan + 1;
            }
        }
        $jmluser = $pengguna;
        $jmlpengiklan = $pengiklan;
        // var_dump($jmlpengiklan);die;

        $jmliklan  = $jmliklanahli + $jmliklanterampil + $jmliklanrumah + $jmliklantanah + $jmliklanapartemen + $jmliklanruko + $jmliklankomersial + $jmliklanmobil + $jmliklanmotor;
        $jmliklanbaru = $jmliklanahlibaru + $jmliklanterampilbaru + $jmliklanrumahbaru + $jmliklantanahbaru + $jmliklanapartemenbaru + $jmliklanrukobaru + $jmliklankomersialbaru + $jmliklanmobilbaru + $jmliklanmotorbaru;
        $jmliklanaktif = $jmliklanahliaktif + $jmliklanterampilaktif + $jmliklanrumahaktif + $jmliklantanahaktif + $jmliklanapartemenaktif + $jmliklanrukoaktif + $jmliklankomersialaktif + $jmliklanmobilaktif + $jmliklanmotoraktif;
        $jmliklansuspend = $jmliklanahlisuspend + $jmliklanterampilsuspend + $jmliklanrumahsuspend + $jmliklantanahsuspend + $jmliklanapartemensuspend + $jmliklanrukosuspend + $jmliklankomersialsuspend + $jmliklanmobilsuspend + $jmliklanmotorsuspend;
        $jmliklantdkaktif = $jmliklan - $jmliklanaktif - $jmliklansuspend;
        
        
        $data = [
            'jmluser' => $jmluser,
            'jmlpengiklan'  => $jmlpengiklan,
            'jmliklan'  => $jmliklan,
            'jmliklanaktif' => $jmliklanaktif,
            'jmliklanbaru'  => $jmliklanbaru,
            'jmliklansuspend' => $jmliklansuspend,
            'jmliklantdkaktif'  => $jmliklantdkaktif,
            // 'nama'      =>$nama,
            // 'foto'      =>$foto,
        ];


        //var_dump("Benar Administrator");die;
        return view('admin/administratorView', $data);
    }

    // private function _iklan(){
    //     var_dump($jmliklanmotor.'/'.$jmliklanmotoraktif.'/'.$jmliklanmotorsuspend);die;

    // }


}
