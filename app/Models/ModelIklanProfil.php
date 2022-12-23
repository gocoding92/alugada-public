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
    public function saveTanah($data = [], $id_iklan_rekomendasi = 0)
    {
        $data = $this->db->table('tbl_tanah')->update(
            $data,
            [
                'id' => $id_iklan_rekomendasi
            ]
        );

        return $data;
    }
    public function saveRuko($data = [], $id_iklan_rekomendasi = 0)
    {
        $data = $this->db->table('tbl_ruko')->update(
            $data,
            [
                'id' => $id_iklan_rekomendasi
            ]
        );

        return $data;
    }
    public function saveRumah($data = [], $id_iklan_rekomendasi = 0)
    {
        $data = $this->db->table('tbl_rumah')->update(
            $data,
            [
                'id' => $id_iklan_rekomendasi
            ]
        );

        return $data;
    }
    public function saveApartemen($data = [], $id_iklan_rekomendasi = 0)
    {
        $data = $this->db->table('tbl_apartemen')->update(
            $data,
            [
                'id' => $id_iklan_rekomendasi
            ]
        );

        return $data;
    }
    public function saveBangunanKomersial($data = [], $id_iklan_rekomendasi = 0)
    {
        $data = $this->db->table('tbl_bangunankomersial')->update(
            $data,
            [
                'id' => $id_iklan_rekomendasi
            ]
        );

        return $data;
    }

    public function saveMobil($data = [], $id_iklan_rekomendasi = 0)
    {
        $data = $this->db->table('tbl_mobil')->update(
            $data,
            [
                'id' => $id_iklan_rekomendasi
            ]
        );

        return $data;
    }
    public function saveKostKontrakan($data = [], $id_iklan_rekomendasi = 0)
    {
        $data = $this->db->table('tbl_kostkontrakan')->update(
            $data,
            [
                'id' => $id_iklan_rekomendasi
            ]
        );

        return $data;
    }
    public function saveMotor($data = [], $id_rekomendasi_iklan = 0)
    {
        $data = $this->db->table('tbl_motor')->update(
            $data,
            [
                'id' => $id_rekomendasi_iklan
            ]
        );

        return $data;
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

    public function deleteRekomendasiIklan($id_rekomendasi_iklan, $id_iklan, $table_iklan)
    {
        // 3 = iklan di delete user
        $this->db->table('tbl_rekomendasi_iklan')->update(
            [
                'is_active' => 3,
            ],
            [
                'id_rekomendasi_iklan' => $id_rekomendasi_iklan
            ]
        );

        // 3 = iklan di delete user
        $rekomendasi_iklan = $this->db->table($table_iklan)->update(
            [
                'is_active' => 3,
            ],
            [
                'id' => $id_iklan
            ]
        );

        $message = "Gagal delete iklan!";
        $status = 404;
        if ($rekomendasi_iklan) {
            $message = "Berhasil delete iklan";
            $status = 200;
        }

        $response = array("data" => array(
            array('message' => $message),
            array('status' => $status),
        ));

        return json_encode($response);
    }

    public function editIklanProfil($id_rekomendasi_iklan, $id_iklan, $table_iklan, $is_active)
    {
        $this->db->table('tbl_rekomendasi_iklan')->update(
            [
                'is_active' => $is_active,
            ],
            [
                'id_rekomendasi_iklan' => $id_rekomendasi_iklan
            ]
        );

        $rekomendasi_iklan = $this->db->table($table_iklan)->update(
            [
                'is_active' => $is_active,
            ],
            [
                'id' => $id_iklan
            ]
        );

        $message = "Gagal edit status iklan!";
        $status = 404;
        if ($rekomendasi_iklan) {
            $message = "Berhasil edit status iklan";
            $status = 200;
        }

        $response = array("data" => array(
            array('message' => $message),
            array('status' => $status),
        ));

        return json_encode($response);
    }
}
