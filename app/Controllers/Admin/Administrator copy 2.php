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

        // Iklan ahli
        $ahli = $this->alugada->ahli();
        $ahlibaru = $this->alugada->ahlibaru();
        $ahliaktif = $this->alugada->ahliaktif();
        $ahlisuspend = $this->alugada->ahlisuspend();

        $jmliklanahli = count($ahli);
        $jmliklanahlibaru = count($ahlibaru);
        $jmliklanahliaktif = count($ahliaktif);
        $jmliklanahlisuspend = count($ahlisuspend);
        $jmliklanahlitidakaktif = $jmliklanahli - $jmliklanahliaktif - $jmliklanahlisuspend;
        // Batas Iklan ahli

        // Iklan terampil
        $terampil = $this->alugada->terampil();
        $terampilbaru = $this->alugada->terampilbaru();
        $terampilaktif = $this->alugada->terampilaktif();
        $terampilsuspend = $this->alugada->terampilsuspend();

        $jmliklanterampil = count($terampil);
        $jmliklanterampilbaru = count($terampilbaru);
        $jmliklanterampilaktif = count($terampilaktif);
        $jmliklanterampilsuspend = count($terampilsuspend);
        $jmliklanterampiltidakaktif = $jmliklanterampil - $jmliklanterampilaktif - $jmliklanterampilsuspend;
        // Batas Iklan terampil

        // Iklan Rumah
        $rumah = $this->alugada->rumah();
        $rumahbaru = $this->alugada->rumahbaru();
        $rumahaktif = $this->alugada->rumahaktif();
        $rumahsuspend = $this->alugada->rumahsuspend();

        $jmliklanrumah = count($rumah);
        $jmliklanrumahbaru = count($rumahbaru);
        $jmliklanrumahaktif = count($rumahaktif);
        $jmliklanrumahsuspend = count($rumahsuspend);
        $jmliklanrumahtidakaktif = $jmliklanrumah - $jmliklanrumahaktif - $jmliklanrumahsuspend;
        // Batas Iklan Rumah

        // Iklan tanah
        $tanah = $this->alugada->tanah();
        $tanahbaru = $this->alugada->tanahbaru();
        $tanahaktif = $this->alugada->tanahaktif();
        $tanahsuspend = $this->alugada->tanahsuspend();

        $jmliklantanah = count($tanah);
        $jmliklantanahbaru = count($tanahbaru);
        $jmliklantanahaktif = count($tanahaktif);
        $jmliklantanahsuspend = count($tanahsuspend);
        $jmliklantanahtidakaktif = $jmliklantanah - $jmliklantanahaktif - $jmliklantanahsuspend;
        // Batas Iklan tanah

        // Iklan apartemen
        $apartemen = $this->alugada->apartemen();
        $apartemenbaru = $this->alugada->apartemenbaru();
        $apartemenaktif = $this->alugada->apartemenaktif();
        $apartemensuspend = $this->alugada->apartemensuspend();

        $jmliklanapartemen = count($apartemen);
        $jmliklanapartemenbaru = count($apartemenbaru);
        $jmliklanapartemenaktif = count($apartemenaktif);
        $jmliklanapartemensuspend = count($apartemensuspend);
        $jmliklanapartementidakaktif = $jmliklanapartemen - $jmliklanapartemenaktif - $jmliklanapartemensuspend;
        // Batas Iklan apartemen

        // Iklan ruko
        $ruko = $this->alugada->ruko();
        $rukobaru = $this->alugada->rukobaru();
        $rukoaktif = $this->alugada->rukoaktif();
        $rukosuspend = $this->alugada->rukosuspend();

        $jmliklanruko = count($ruko);
        $jmliklanrukobaru = count($rukobaru);
        $jmliklanrukoaktif = count($rukoaktif);
        $jmliklanrukosuspend = count($rukosuspend);
        $jmliklanrukotidakaktif = $jmliklanruko - $jmliklanrukoaktif - $jmliklanrukosuspend;
        // Batas Iklan ruko


        // Iklan komersial
        $komersial = $this->alugada->komersial();
        $komersialbaru = $this->alugada->komersialbaru();
        $komersialaktif = $this->alugada->komersialaktif();
        $komersialsuspend = $this->alugada->komersialsuspend();

        $jmliklankomersial = count($komersial);
        $jmliklankomersialbaru = count($komersialbaru);
        $jmliklankomersialaktif = count($komersialaktif);
        $jmliklankomersialsuspend = count($komersialsuspend);
        $jmliklankomersialtidakaktif = $jmliklankomersial - $jmliklankomersialaktif - $jmliklankomersialsuspend;
        // Batas Iklan komersial


        // Iklan mobil
        $mobil = $this->alugada->mobil();
        $mobilbaru = $this->alugada->mobilbaru();
        $mobilaktif = $this->alugada->mobilaktif();
        $mobilsuspend = $this->alugada->mobilsuspend();

        $jmliklanmobil = count($mobil);
        $jmliklanmobilbaru = count($mobilbaru);
        $jmliklanmobilaktif = count($mobilaktif);
        $jmliklanmobilsuspend = count($mobilsuspend);
        $jmliklanmobiltidakaktif = $jmliklanmobil - $jmliklanmobilaktif - $jmliklanmobilsuspend;
        // Batas Iklan mobil


        // Iklan motor
        $motor = $this->alugada->motor();
        $motorbaru = $this->alugada->motorbaru();
        $motoraktif = $this->alugada->motoraktif();
        $motorsuspend = $this->alugada->motorsuspend();

        $jmliklanmotor = count($motor);
        $jmliklanmotorbaru = count($motorbaru);
        $jmliklanmotoraktif = count($motoraktif);
        $jmliklanmotorsuspend = count($motorsuspend);
        $jmliklanmotortidakaktif = $jmliklanmotor - $jmliklanmotoraktif - $jmliklanmotorsuspend;
        // Batas Iklan motor

        $user = $this->alugada->user();
        $pengiklan = $this->alugada->pengiklan();

        $jmluser = count($user);
        $jmlpengiklan = count($pengiklan);


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
