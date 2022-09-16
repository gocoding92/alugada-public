<?php

namespace App\Models\Admin;

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


    public function user()
    {
        return $this->db->table('tbl_user')->get()->getResultArray();
    }
    public function userbynohp($nohp)
    {
        return $this->db->table('tbl_user')->getWhere(['nohp' => $nohp])->getRowArray();
    }
    public function layanan()
    {
        return $this->db->table('tbl_layanan')->get()->getResultArray();
    }
    public function layananbynolayanan($nolayanan)
    {
        return $this->db->table('tbl_layanan')->getWhere(['nolayanan' => $nolayanan])->getRowArray();
    }
    public function insertlayanan($data)
    {
        return $this->db->table('tbl_layanan')->insert($data);
    }
    public function updatelayanan($id, $data)
    {
        return $this->db->table('tbl_layanan')->update($data, ['id' => $id]);
    }



    public function sublayanan()
    {
        return $this->db->table('tbl_sublayanan')->get()->getResultArray();
    }

    public function sublayananbynosublayanan($nosublayanan)
    {
        return $this->db->table('tbl_sublayanan')->getWhere(['nosublayanan' => $nosublayanan])->getRowArray();
    }
    // public function sublayananbynolayanan($nolayanan){
    //     return $this->db->table('tbl_sublayanan')->getWhere(['nolayanan' => $nolayanan])->getRowArray();
    // }

    public function insertsublayanan($data)
    {
        return $this->db->table('tbl_sublayanan')->insert($data);
    }
    public function updatesublayanan($id, $data)
    {
        return $this->db->table('tbl_sublayanan')->update($data, ['id' => $id]);
    }

    // public function iklancarikerja()
    // {
    //     return $this->db->table('tbl_iklancarikerja')->get()->getResultArray();
    // }
    // public function iklanproperty()
    // {
    //     return $this->db->table('tbl_iklanproperty')->get()->getResultArray();
    // }
    // public function iklanmobilmotor()
    // {
    //     return $this->db->table('tbl_iklanmobilmotor')->get()->getResultArray();
    // }
}
