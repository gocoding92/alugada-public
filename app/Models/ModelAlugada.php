<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAlugada extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'modelalugadas';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];


    public function userbynohp($nohp)
    {
        return $this->db->table('tbl_user')->getWhere(['nohp' => $nohp])->getRowArray();
    }
    public function userbyid($id)
    {
        return $this->db->table('tbl_user')->getWhere(['id' => $id])->getRowArray();
    }

    // Layanan
    public function layanan()
    {
        return $this->db->table('tbl_layanan')->get()->getResultArray();
    }
    public function layananbyid($id)
    {
        return $this->db->table('tbl_layanan')->getWhere(['id' => $id])->getRowArray();
    }
    public function layananbynolayanan($nolayanan)
    {
        return $this->db->table('tbl_layanan')->getWhere(['nolayanan' => $nolayanan])->getRowArray();
    }
    public function tambahlayanan($data)
    {
        return $this->db->table('tbl_layanan')->insert($data);
    }
    public function updatelayanan($id, $data)
    {
        return $this->db->table('tbl_layanan')->update($data, ['id' => $id]);
    }


    // Sub Layanan
    public function sublayanan()
    {
        return $this->db->table('tbl_sublayanan')->get()->getResultArray();
    }
    public function tambahsublayanan($data)
    {
        return $this->db->table('tbl_sublayanan')->insert($data);
    }
    public function sublayananbyid($id)
    {
        return $this->db->table('tbl_sublayanan')->getWhere(['id' => $id])->getRowArray();
    }
    public function updatesublayanan($id, $data)
    {
        return $this->db->table('tbl_sublayanan')->update($data, ['id' => $id]);
    }

    // New User
    public function simpannewuser($data)
    {
        return $this->db->table('tbl_user')->insert($data);
    }
    public function updateuser($id, $data)
    {
        return $this->db->table('tbl_user')->update($data, ['id' => $id]);
    }


    public function jenisiklan()
    {
        return $this->db->table('tbl_jenisiklan')->get()->getResultArray();
    }
    public function tambahjenisiklan($data)
    {
        return $this->db->table('tbl_jenisiklan')->insert($data);
    }
    public function jenisiklanbyid($id)
    {
        return $this->db->table('tbl_jenisiklan')->getWhere(['id' => $id])->getRowArray();
    }
    public function updatejenisiklan($id, $data)
    {
        return $this->db->table('tbl_jenisiklan')->update($data, ['id' => $id]);
    }

    // iklan mobilmotor
    public function saveMobil($data)
    {
        $db = $this->db;
        $db->table('tbl_mobil')->insert($data);

        return $db->insertID();
    }

    // Iklan Motor
    public function saveMotor($data)
    {
        $db = $this->db;
        $db->table('tbl_motor')->insert($data);

        return $db->insertID();
    }

    public function saveKost($data)
    {
        $db = $this->db;
        $db->table('tbl_kostkontrakan')->insert($data);

        return $db->insertID();
    }

    public function saveTenaga_Ahli($data)
    {
        $db = $this->db;
        $db->table('tbl_tenagaahli')->insert($data);

        return $db->insertID();
    }

    public function saveTenaga_Terampil($data)
    {
        $db = $this->db;
        $db->table('tbl_tenagaterampil')->insert($data);

        return $db->insertID();
    }

    public function save_Rumah($data)
    {
        $db = $this->db;
        $db->table('tbl_rumah')->insert($data);

        return $db->insertID();
        
    }

    public function save_Tanah($data)
    {
        $db = $this->db;
        $db->table('tbl_tanah')->insert($data);

        return $db->insertID();
    }

    public function save_Apartemen($data)
    {
        $db = $this->db;
        $db->table('tbl_apartemen')->insert($data);

        return $db->insertID();
    }
    public function save_Ruko($data)
    {
        $db = $this->db;
        $db->table('tbl_ruko')->insert($data);

        return $db->insertID();
    }
    public function save_BangunanKomersial($data)
    {
        $db = $this->db;
        $db->table('tbl_bangunankomersial')->insert($data);

        return $db->insertID();
    }
    public function saveRekomendasiIklan($data)
    {
        return $this->db->table('tbl_rekomendasi_iklan')->insert($data);
    }
    public function detailIklan($id_iklan, $table, $primarykey)
    {
        return $this->db->table($table)->getWhere([$primarykey => $id_iklan])->getRowArray();
    }
}
