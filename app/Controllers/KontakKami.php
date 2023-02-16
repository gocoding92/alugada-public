<?php

namespace App\Controllers;

use App\Models\ModelAlugada;
use App\Models\ModelKontakKami;


class KontakKami extends BaseController
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->modelalugada = new ModelAlugada();
        $this->modelkontakkami = new ModelKontakKami();
        $this->session = \Config\Services::session();
        $this->admin = 0;   //Bukan Admin
    }

    public function index()
    {

        $nohppengunjung = $this->session->get('nohppengunjung');
        if ($nohppengunjung == null) {
            $nohppengunjung = 123;
        }

        $data = [
            'admin'         => $this->admin,
            'pengunjung'    => $this->modelalugada->userbynohp($nohppengunjung),
            'title'         => "Layanan",
            'layanan'       => $this->modelalugada->layanan(),
            'jenisiklan'    => $this->modelalugada->jenisiklan(),
            'active'        => 'kontak_kami',

        ];

        return view('kontak_kami/index', $data);
    }

    public function save()
    {
        $nama = $this->request->getVar('nama');
        $telepon = $this->request->getVar('telepon');
        $email = $this->request->getVar('email');
        $alamat = $this->request->getVar('alamat');
        $pesan = $this->request->getVar('pesan');

        $data = ([
            'nama' => $nama,
            'telepon' => $telepon,
            'email' => $email,
            'alamat' => $alamat,
            'pesan' => $pesan,
        ]);

        $this->modelkontakkami->submitForm($data);
        return redirect()->to('/');
    }

    public function submit_kontakkami()
    {
        if ($this->request->isAJAX()) {
            $nama = $this->request->getPost('nama');
            $telepon = $this->request->getPost('telepon');
            $email = $this->request->getPost('email');
            $alamat = $this->request->getPost('alamat');
            $pesan = $this->request->getPost('pesan');

            $kontak_kami = $this->modelkontakkami->form_kontakkami($nama, $telepon, $email, $alamat, $pesan);

            return $kontak_kami;
        }
    }
}
