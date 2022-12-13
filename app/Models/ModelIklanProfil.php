<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelIklanProfil extends Model
{
    public function saveTenagaAhli($data = [], $id_iklan_rekomendasi = 0)
    {
        $data = $this->db->table('tbl_tenagaahli')->update(
            $data,
            [
                'id' => $id_iklan_rekomendasi
            ]
        );

        return $data;
    }
    // public function S($data = [], $id_rekomendasi_iklan = 0)
    // {

    //     $data = $this->db->table('tbl_tenagaterampil')->update(
    //         $data,
    //         [
    //             'id' => $id_iklan_rekomendasi
    //         ]
    //     );

    //     return $data;
    // }
    public function saveTenagaTerampil($data = [], $id_iklan_rekomendasi = 0)
    {
        $data = $this->db->table('tbl_tenagaterampil')->update(
            $data,
            [
                'id' => $id_iklan_rekomendasi
            ]
        );

        return $data;
    }
    public function saveTanah($data = [], $id_rekomendasi_iklan = 0)
    {
        var_dump(123);
        exit;
        $data = $this->db->table('tbl_tanah')->update(
            $data,
            [
                'id' => $id_iklan_rekomendasi
            ]
        );

        return $data;
    }
    public function saveRuko($data = [])
    {
        $db = $this->db;
        $db->table('tbl_ruko')->insert($data);

        return $db->insertID();
    }
    public function saveRumah($data = [])
    {
        var_dump(123);
        exit;
        $data = $this->db->table('tbl_rumah')->update(
            $data,
            [
                'id' => $id_iklan_rekomendasi
            ]
        );

        return $data;
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

    public function saveRekomendasiIklan($data = [], $id_rekomendasi_iklan = 0)
    {
        $rekomendasi_iklan = $this->db->table('tbl_rekomendasi_iklan')->update(
            $data,
            [
                'id_rekomendasi_iklan' => $id_rekomendasi_iklan
            ]
        );

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

    public function getDataIklanLayanan($id_layanan = 0, $id_sub_layanan = 0)
    {
        $where_sub_layanan = ['nolayanan' => $id_layanan, 'is_active' => 1];

        if ($id_sub_layanan) {
            $where_sub_layanan = ['nolayanan' => $id_layanan, 'nosublayanan' => $id_sub_layanan, 'is_active' => 1];
        }

        return $this->db->table('tbl_rekomendasi_iklan')->getWhere($where_sub_layanan)->getResultArray();;
    }
}
