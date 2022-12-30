<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ModelAlugada;

class LayananController extends BaseController
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->alugada = new ModelAlugada();
        $this->session = \Config\Services::session();
    }


    public function index()
    {

        $nohplogin = $this->session->get('nohplogin');
        if ($nohplogin == NULL or $nohplogin == "") {
            $nohplogin = 12341234;
        } else {
            $nohplogin = $nohplogin;
        }

        $layanan = $this->alugada->layanan();
        $data = [
            'layanan'   => $layanan,
            'nohplogin'      => $nohplogin,
        ];
        return view('admin/layanan/layananView', $data);
    }

    public function aktifasilayanan($nolayanan)
    {
        $layanan = $this->alugada->layananbynolayanan($nolayanan);
        if ($layanan['is_active']) {
            $data = [
                'is_active' => 0,
            ];
        } else {
            $data = [
                'is_active' => 1,
            ];
        }
        $this->alugada->updatelayananbynolayanan($nolayanan, $data);
        return redirect()->to('admin-layanan');
    }

    public function tambahlayanan()
    {

        $filegambar = $this->request->getFile('gambartambah');
        if ($filegambar == "" or $filegambar == NULL) {
            $namagambar = "default.png";
        } else {
            $filegambar->move('Image/Layanan');
            $namagambar = $filegambar->getName();
        }

        $data = [
            'nolayanan'     => $this->request->getVar('tambahnolayanan'),
            'layanan'       => $this->request->getVar('tambahlayanan'),
            'detaillayanan' => $this->request->getVar('tambahdetaillayanan'),
            'gambar'        => $namagambar,
            'url'           => $this->request->getVar('tambahurl'),
            'is_active'     => 1,
        ];
        $this->alugada->tambahlayanan($data); //Tambah data layanan

        $datasub = [
            'nolayanan'     => $this->request->getVar('tambahnolayanan'),
            'nosublayanan'  => $this->request->getVar('tambahnolayanan') + 1,
            'sublayanan'    => "",
            'gambar'        => "default.png",
            'url'           => "",
            'is_active'     => 1,

        ];
        $this->alugada->tambahsublayanan($datasub); //Tambah sub data layanan

        return redirect()->to('admin-layanan');
    }

    public function editlayanan()
    {
        $noLayanan = $this->request->getVar('editnolayanan');
        $layananEdit = $this->request->getVar('editlayanan');
        $detailLayananEdit = $this->request->getVar('editdetaillayanan');
        $urlEdit = $this->request->getVar('editurl');

        $filegambar = $this->request->getFile('gambar');
        $layanan = $this->alugada->layananbynolayanan($noLayanan);
        $gambarlama = $layanan['gambar'];

        if ($filegambar == NULL or $filegambar == "") {
            $namagambar = $gambarlama;
        } else {
            $filegambar->move('Image/Layanan/');
            $namagambar = $filegambar->getName();
        }

        $dataedit = [
            'nolayanan'         => $noLayanan,
            'layanan'           => $layananEdit,
            'detaillayanan'     => $detailLayananEdit,
            'url'               => $urlEdit,
            'gambar'            => $namagambar,
        ];

        $this->alugada->updatelayananbynolayanan($noLayanan, $dataedit);
        return redirect()->to('admin-layanan');
    }
}
