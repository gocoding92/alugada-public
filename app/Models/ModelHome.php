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

    public function rekomendasiIklan()
    {
        $query = $this->db->query("SELECT 
            b.is_active, 
            b.suspend, 
            a.is_active AS is_active_iklan,
            a.suspend AS suspend_iklan,
            a.user_id,
            a.id_rekomendasi_iklan,
            a.nolayanan,
            a.nosublayanan,
            a.type_rekomendasi_iklan,
            a.id_iklan,
            a.nama_iklan,
            a.description,
            a.alamat,
            a.image,
            a.path_folder,
            a.table_iklan,
            a.create_at AS create_at_iklan,
            a.keterangan_suspend,
            a.harga,
            a.count_suspend,
            a.color,
            b.count_suspend AS count_suspend_user

        FROM tbl_rekomendasi_iklan AS a INNER JOIN tbl_user AS b ON a.user_id = b.id ORDER BY a.created_at DESC ");
        $results = $query->getResultArray();

        $data = array();
        for ($i = 0; $i < count($results); $i++) {
            // validasi user
            if (
                $results[$i]['suspend'] == 0 &&
                $results[$i]['is_active'] == 1 &&
                $results[$i]['count_suspend_user'] < 3
            ) {
                // validasi rekomendasi iklan
                if (
                    $results[$i]['suspend_iklan'] == 0 &&
                    $results[$i]['is_active_iklan'] == 1 &&
                    $results[$i]['count_suspend'] < 3
                ) {
                    array_push($data, $results[$i]);
                }
            }
        }

        return $data;
    }
}
