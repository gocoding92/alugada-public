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
    public function simpantambahsublayanan($data)
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
    public function simpannewuser($data){
        return $this->db->table('tbl_user')->insert($data);
    }
    public function updateuser($id,$data){
        return $this->db->table('tbl_user')->update($data,['id'=>$id]);
    }


    public function jenisiklan(){
        return $this->db->table('tbl_jenisiklan')->get()->getResultArray();
    }
    public function tambahjenisiklan($data){
        return $this->db->table('tbl_jenisiklan')->insert($data);
    }
    public function jenisiklanbyid($id){
        return $this->db->table('tbl_jenisiklan')->getWhere(['id'=>$id])->getRowArray();
    }
    public function updatejenisiklan($id,$data){
        return $this->db->table('tbl_jenisiklan')->update($data, ['id' => $id]);
    }

}
