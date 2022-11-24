<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelIklan extends Model
{
    public function saveTenagaAhli($data = [])
    {
        $db = $this->db;
        $db->table('tbl_tenagaahli')->insert($data);

        return $db->insertID();
    }

    public function saveRekomendasiIklan($data = [])
    {
        $rekomendasi_iklan = $this->db->table('tbl_rekomendasi_iklan')->insert($data);

        $message = "Gagal menginput iklan!";
        $status = 404;
        if ($rekomendasi_iklan) {
            $message = "Berhasil menginput iklan!";
            $status = 200;
        }

        $response = array("data" => array(
            array('message' => $message),
            array('status' => $status),
        ));

        return json_encode($response);
    }
}
