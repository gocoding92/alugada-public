<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPesan extends Model
{
    public function getData($id_user = 0)
    {
        $data = $this->db->table('tbl_chat_user AS a')->
                join('tbl_user AS b', 'a.id_users_pengiklan = b.id')->
                join('tbl_rekomendasi_iklan AS c', 'c.id_rekomendasi_iklan = a.id_rekomendasi_iklan')->
                select('a.id, a.chat, a.created_time, b.gambar, b.nama, b.nohp, c.type_rekomendasi_iklan, c.nama_iklan, c.id_iklan, c.table_iklan, c.id_rekomendasi_iklan ')->
                orderBy('a.id', 'DESC')->
                getWhere(['a.id_users' => $id_user])->
                getResultArray();

        return $data;
    }
}
