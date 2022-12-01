<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelProfil extends Model
{
    public function getDataIklan($id_user = 0)
    {
        return $this->db->table('tbl_rekomendasi_iklan')->getWhere(['user_id' => $id_user])->getResultArray();
    }

    public function update_profil($nama = '', $email = '', $alamat = '', $deskripsi = '', $id_user = '', $imageFile1 = '')
    {

        $data_user_default = $this->db->table('tbl_user')->getWhere(['id' => $id_user])->getRowArray();

        $data = $this->db->table('tbl_user')->update(
            [
                'nama' => $nama,
                'email' => $email,
                'alamat' => $alamat,
                'deskripsi' => $deskripsi,
                'gambar' => $imageFile1,

            ],
            [
                'id' => $id_user
            ]
        );

        $message = "Profil data gagal diubah, Silahkan ulangi!";
        $status = 400;

        $data_user_where = $data_user_default;

        $data_user = array();
        if ($data) {
            $message = "Data Profil berhasil diubah";
            $status = 200;

            $data_user_where = $this->db->table('tbl_user')->getWhere(['id' => $id_user])->getRowArray();
        }

        $response = array("data" => array(
            array('message' => $message),
            array('status' => $status),
        ));

        return array(
            array('data' => $data_user_where),
            array('status' => $status),
            array('response' => json_encode($response)),
        );
    }

    public function getIdUser($id_user = 0)
    {
        return $this->db->table('tbl_user')->getWhere(['id' => $id_user])->getRowArray();
    }

    public function update_password($password_lama = '', $password_baru = '', $konfirmasi_password = '', $no_handphone = '')
    {
        $data = $this->db->table('tbl_user')->update(
            [
                'password' => $password_baru,
            ],
            [
                'nohp' => $no_handphone
            ]
        );

        $message = "Ubah password gagal dilakukan";
        $status = 400;

        if ($data) {
            $message = "Ubah password berhasil dilakukan";
            $status = 200;
        }

        if ($password_baru !== $konfirmasi_password) {
            $message = "Password baru dan Konfirmasi Password tidak sama";
            $status = 400;
        }

        $response = array("data" => array(
            array('message' => $message),
            array('status' => $status),
        ));

        return json_encode($response);

        var_dump($data);
        exit;
    }
}
