<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelRumah extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_rumah';
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

    public function getWhere($nosublayanan)
    {
        return $this->db->table('tbl_rumah')->getWhere(['nosublayanan' => $nosublayanan])->getResultArray();
    }
    public function detailRumah($id)
    {
        return $this->db->table('tbl_rumah')->getWhere(['id' => $id])->getRowArray();
    }

}