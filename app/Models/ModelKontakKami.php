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

    public function submitForm($data)
    {
        return  $this->db->table('tbl_kontak_kami')->insert($data);
    }

    public function form_kontakkami($nama = '', $telepon = '', $email = '', $alamat = '', $pesan = '')
    {
        $data = ([
            'nama' => $nama,
            'telepon' => $telepon,
            'email' => $email,
            'alamat' => $alamat,
            'pesan' => $pesan,
        ]);

        $insert = $this->db->table('tbl_kontak_kami')->insert($data);

        $message = "Gagal input kontak kami, Silahkan ulangi!";
        $status = 400;
        if ($insert) {
            $message = "Input Kontak Kami berhasil dilakukan";
            $status = 200;
        }

        $response = array("data" => array(
            array('message' => $message),
            array('status' => $status),
        ));

        return json_encode($response);
    }
}
