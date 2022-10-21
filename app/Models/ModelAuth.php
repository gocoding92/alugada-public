<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAuth extends Model
{
    public function register($no_handphone)
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
                $message = "";
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
