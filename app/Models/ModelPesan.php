<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPesan extends Model
{
    public function getData($id_user = 0)
    {
        $data = $this->db->table('tbl_chat_user AS a')->
                join('tbl_user AS b', 'a.id_users_pengiklan = b.id')->
                getWhere(['a.id_users' => $id_user])->
                getResultArray();
        
        return $data;
    }
}
