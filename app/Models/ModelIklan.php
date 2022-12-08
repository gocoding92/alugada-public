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
    public function saveTenagaTerampil($data = [])
    {
        $db = $this->db;
        $db->table('tbl_tenagaterampil')->insert($data);

        return $db->insertID();
    }
    public function saveTanah($data = [])
    {
        $db = $this->db;
        $db->table('tbl_tanah')->insert($data);

        return $db->insertID();
    }
    public function saveRuko($data = [])
    {
        $db = $this->db;
        $db->table('tbl_ruko')->insert($data);

        return $db->insertID();
    }
    public function saveRumah($data = [])
    {
        $db = $this->db;
        $db->table('tbl_rumah')->insert($data);

        return $db->insertID();
    }
    public function saveApartemen($data = [])
    {
        $db = $this->db;
        $db->table('tbl_apartemen')->insert($data);

        return $db->insertID();
    }
    public function saveBangunanKomersial($data = [])
    {
        $db = $this->db;
        $db->table('tbl_bangunankomersial')->insert($data);

        return $db->insertID();
    }

    public function saveMobil($data = [])
    {
        $db = $this->db;
        $db->table('tbl_mobil')->insert($data);

        return $db->insertID();
    }
    public function saveKostKontrakan($data = [])
    {
        $db = $this->db;
        $db->table('tbl_kostkontrakan')->insert($data);

        return $db->insertID();
    }
    public function saveMotor($data = [])
    {
        $db = $this->db;
        $db->table('tbl_motor')->insert($data);

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
