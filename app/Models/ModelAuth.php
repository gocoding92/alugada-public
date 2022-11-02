<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{
    public function login($no_handphone = 0, $password = '')
    {
        $data_user_where = $this->db->table('tbl_user')->getWhere(['nohp' => $no_handphone, 'password' => $password])->getRowArray();
        $data_user = $this->db->table('tbl_user')->getWhere(['nohp' => $no_handphone, 'password' => $password])->getResultArray();

        $message = "No. Handphone & Password tidak cocok, pastikan dengan benar!";
        $status = 404;
        $is_active = null;

        if ($data_user_where) {
            $is_active = $data_user_where['is_active'];
            // 2 = is_active verified
            if (count($data_user) == 1 && $is_active == 2) {
                $message = "No. Handphone & Password cocok, Anda berhasil login";
                $status = 200;
            }

            // 1 = is_active belum verified
            if ($is_active == 1) {
                $message = "Akun anda belum diverifikasi!";
            }
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

    public function register($no_handphone = 0, $otp = 0)
    {
        $this->db->table('tbl_user')->delete(
            [
                'nohp' => $no_handphone,
                'is_active' => 1
            ]
        );

        $data_user = $this->db->table('tbl_user')->getWhere(
            [
                'nohp' => $no_handphone,
                'is_active' => 2
            ]
        )->getResultArray();

        $message = "No. Handphone telah terdaftar!";
        $status = 404;
        if (count($data_user) == 0) {
            $date = date('d');
            $hour = date('H');
            // $otp = rand($date . $hour, 9999);
            // sementara karena belum ada WA gateway
            $otp = 1234;

            $data_register = ([
                'nohp' => $no_handphone,
                'generate_code_verifikasi' => $otp,
                'is_active' => 1,
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

    public function otp($otp = 0, $no_handphone = 0)
    {
        $data_user = $this->db->table('tbl_user')->getWhere(
            [
                'generate_code_verifikasi' => $otp,
                'nohp' => $no_handphone
            ]
        )->getResultArray();

        $message = "Kode OTP tidak ditemukan!";
        $status = 400;
        if (count($data_user) == 1) {
            $message = "Kode OTP cocok, OTP berhasil dilakukan";
            $status = 200;
        }

        $response = array("data" => array(
            array('message' => $message),
            array('status' => $status),
        ));

        return json_encode($response);
    }

    public function data($name = 0, $email = '', $no_handphone = 0, $password = '')
    {
        $data = $this->db->table('tbl_user')->update(
            [
                'nama' => $name,
                'email' => $email,
                'password' => $password,
                'is_active' => 2
            ],
            [
                'nohp' => $no_handphone
            ]
        );

        $message = "Profil data gagal diinput, Silahkan ulangi!";
        $status = 400;

        $data_user = array();
        if ($data) {
            $message = "Data Profil berhasil dilakukan";
            $status = 200;

            $data_user = $this->db->table('tbl_user')->getWhere(['nohp' => $no_handphone])->getRowArray();
        }

        $response = array("data" => array(
            array('message' => $message),
            array('status' => $status),
        ));

        return array(
            array('data' => $data_user),
            array('status' => $status),
            array('response' => json_encode($response)),
        );
    }
}
