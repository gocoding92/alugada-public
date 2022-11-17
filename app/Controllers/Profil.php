<?php

namespace App\Controllers;

use App\Models\ModelProfil;

class Profil extends BaseController
{

    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->modelProfil = new ModelProfil();
        $this->session = \Config\Services::session();
        $this->admin = 0;   //Bukan Admin

    }
    public function index($param = '')
    {
        $id_user = $this->session->get('id');
        $result['data_iklan'] = $this->modelProfil->getDataIklan($id_user);

        $result['nama'] = $this->session->get('nama');
        $result['no_handphone'] = $this->session->get('nohp');
        $result['deskripsi'] = $this->session->get('deskripsi');
        $result['deskripsi'] = $this->session->get('deskripsi');
        $result['alamat'] = $this->session->get('alamat');

        return view('profil/indexView', $result);
    }

    public function updateProfil($param = '')
    {
        return view('profil/updateProfilView');
    }

    public function updatePassword($param = '')
    {
        return view('profil/updatePasswordView');
    }

    public function update_profil()
    {
        if ($this->request->isAJAX()) {
            $nama = $this->request->getPost('nama');
            $email = $this->request->getPost('email');
            $alamat = $this->request->getPost('alamat');
            $deskripsi = $this->request->getPost('deskripsi');

            $update_profil = $this->modelalugada->update_profil($nama, $email, $alamat, $deskripsi);
            
            $data = $update_profil[0]['data'];
            $status = $update_profil[1]['status'];
            $response = $update_profil[2]['response'];

            // generate session
            if ($status == 200) {
                $this->session->set($data);
            }

            return $response;
        }
    }
}
