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

    public function saveRekomendasiIklan($data)
    {
        return $this->db->table('tbl_rekomendasi_iklan')->insert($data);
    }
}
