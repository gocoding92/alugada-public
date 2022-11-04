<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKontakKami extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tbl_kontak_kami';
    protected $primaryKey       = 'id_kontak_kami';
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

    Public function submitForm($data)
    {
       return  $this->db->table('tbl_kontak_kami')->insert($data);    
    }

    public function form_kontakkami($data)
    {
        $insert = $this->db->table('tbl_kontak_kami')->insert($data);

        //  $data = ([
        //     'nama' => $nama,
        //     'telepon' => $telepon,
        //     'email' => $email,
        //     'alamat' => $alamat,
        //     'pesan' => $pesan,
        // ]);
    //     $data_user = $this->db->table('tbl_user')->getWhere(['nama' => $nama, 'telepon' => $telepon, 'email' => $email, 'alamat' => $alamat, 'pesan' => $pesan])->getResultArray();

        // $message = "Data Berhasil";
        // $status = 404;
    //     $is_active = null;

    //     if ($data_user_where) {
    //         $is_active = $data_user_where['is_active'];
    //         // 2 = is_active verified
    //         if (count($data_user) == 1 && $is_active == 2) {
    //             $message = "No. Handphone & Password cocok, Anda berhasil login";
    //             $status = 200;
    //         }

    //         // 1 = is_active belum verified
    //         if ($is_active == 1) {
    //             $message = "Akun anda belum diverifikasi!";
    //         }
    //     }

        // $response = array("data" => array(
        //     array('message' => $message),
        //     array('status' => $status),
        // ));

        // return array(
        //     array('data' => $data_user_where),
        //     array('status' => $status),
        //     array('response' => json_encode($response)),
        // );
    }
}