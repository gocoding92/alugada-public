<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelHome extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_rekomendasi_iklan';
    protected $primaryKey       = 'id_rekomendasi_iklan';
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

    public function sublayanan($nolayanan)
    {
        return $this->db->table('tbl_sublayanan')->getWhere(['nolayanan' => $nolayanan])->getResultArray();
    }

    public function iklan($nosublayanan)
    {
        return $this->db->table('tbl_rekomendasi_iklan')->getWhere(['nosublayanan' => $nosublayanan])->getResultArray();
    }

    public function iklanAll($nolayanan)
    {
        return $this->db->table('tbl_rekomendasi_iklan')->getWhere(['nolayanan' => $nolayanan])->getResultArray();
    }

    public function slider()
    {
        return $this->db->table('tbl_slider')->get()->getResultArray();
    }
}
