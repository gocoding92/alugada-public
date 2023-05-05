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

    public function getDataIklanSubLayanan($id_layanan = 0)
    {
        return $this->db->table('tbl_sublayanan')->getWhere(['nolayanan' => $id_layanan])->getResultArray();;
    }

    public function detailIklan($id_iklan, $table)
    {
        return $this->db->table($table)->getWhere(['id' => $id_iklan])->getRowArray();
    }

    public function detailPengiklanIklan($id_pengiklan)
    {
        return $this->db->table('tbl_user')->getWhere(['id' => $id_pengiklan])->getRowArray();
    }

    public function getDataIklanLayanan($id_layanan = 0, $id_sub_layanan = 0)
    {
        $where_sub_layanan = ['nolayanan' => $id_layanan, 'is_active' => 1];

        if ($id_sub_layanan) {
            $where_sub_layanan = ['nolayanan' => $id_layanan, 'nosublayanan' => $id_sub_layanan, 'is_active' => 1];
        }

        return $this->db->table('tbl_rekomendasi_iklan')->getWhere($where_sub_layanan)->getResultArray();;
    }
    public function saveChatUser($data = [])
    {
        $db = $this->db;
        $insert = $db->table('tbl_chat_user')->insert($data);

        $message = "Chat anda tidak berhasil dikirim!";
        $status = 404;

        if ($insert) {
            $message = "Chat anda berhasil dikirim, tunggu 1x24 jam!";
            $status = 200;
        }

        $response = array("data" => array(
            array('message' => $message),
            array('status' => $status),
        ));

        return json_encode($response);
    }
}
