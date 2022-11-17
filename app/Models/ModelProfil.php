<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelProfil extends Model
{
    public function getDataIklan($id_user = 0)
    {
        return $this->db->table('tbl_rekomendasi_iklan')->getWhere(['user_id' => $id_user])->getResultArray();
    }
}
