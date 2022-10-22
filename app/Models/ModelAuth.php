<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{
    public function login($no_handphone = 0)
    {
        $data_user_where = $this->db->table('tbl_user')->getWhere(['nohp' => $no_handphone])->getRowArray();
        $is_active = $data_user_where['is_active'];
        $data_user = $this->db->table('tbl_user')->getWhere(['nohp' => $no_handphone])->getResultArray();

        $message = "No. Handphone tidak cocok, pastikan dengan benar!";
        $status = 404;

        // 2 = is_active verified
        if (count($data_user) == 1 && $is_active == 2) {
            $message = "No. Handphone cocok, Anda berhasil login";
            $status = 200;
        }

        // 1 = is_active belum verified
        if ($is_active == 1) {
            $message = "Akun anda belum diverifikasi!";
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

    public function register($no_handphone = 0)
    {
        $data_user = $this->db->table('tbl_user')->getWhere(['nohp' => $no_handphone])->getResultArray();

        $message = "No. Handphone telah terdaftar!";
        $status = 404;
        if (count($data_user) == 0) {
            $data_register = ([
                'nohp' => $no_handphone,
            ]);
            $register = $this->db->table('tbl_user')->insert($data_register);
            $message = "Register tidak berhasil, Coba submit kembali!";
            $status = 400;
            if ($register) {
                $message = "Register berhasil dilakukan";
                $status = 200;
            }
        }

        $response = array("data" => array(
            array('message' => $message),
            array('status' => $status),
        ));

        return json_encode($response);
    }
}
