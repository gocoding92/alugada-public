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



    public function slider()
    {
        return $this->db->table('tbl_slider')->get()->getResultArray();
    }

    public function rekomendasiiklan(){
        return $this->db->table('tbl_rekomendasi_iklan')->get()->getResultArray();
    }
    public function updaterekom($id, $data)
    {
        // var_dump($id);die;
        return $this->db->table('tbl_rekomendasi_iklan')->update($data, ['id_rekomendasi_iklan' => $id]);
    }


    // Table User
    public function user()
    {
        return $this->db->table('tbl_user')->get()->getResultArray();
    }
    public function userbynohp($nohp)
    {
        return $this->db->table('tbl_user')->getWhere(['nohp' => $nohp])->getRowArray();
    }
    public function userbyid($id)
    {
        return $this->db->table('tbl_user')->getWhere(['id' => $id])->getRowArray();
    }
    public function simpannewuser($data)
    {
        return $this->db->table('tbl_user')->insert($data);
    }
    public function updateuser($id, $data)
    {
        return $this->db->table('tbl_user')->update($data, ['id' => $id]);
    }
    // Batas Tabel User 



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
    public function updatelayananbyid($id, $data)
    {
        return $this->db->table('tbl_layanan')->update($data, ['id' => $id]);
    }
    public function updatelayananbynolayanan($nolayanan, $data)
    {
        return $this->db->table('tbl_layanan')->update($data, ['nolayanan' => $nolayanan]);
    }


    // Sub Layanan
    public function sublayanan()
    {
        return $this->db->table('tbl_sublayanan')->get()->getResultArray();
    }
    public function tambahsublayanan($data)
    {
        return $this->db->table('tbl_sublayanan')->insert($data);
    }
    public function sublayananbyid($id)
    {
        return $this->db->table('tbl_sublayanan')->getWhere(['id' => $id])->getRowArray();
    }
    public function sublayananbynosublayanan($no)
    {
        return $this->db->table('tbl_sublayanan')->getWhere(['nosublayanan' => $no])->getRowArray();
    }
    public function updatesublayananbyid($id, $data)
    {
        return $this->db->table('tbl_sublayanan')->update($data, ['id' => $id]);
    }
    public function updatesublayananbynosub($nosub, $data)
    {
        return $this->db->table('tbl_sublayanan')->update($data, ['nosublayanan' => $nosub]);
    }


    //IKLAN
    public function ahli(){
        return $this->db->table('tbl_tenagaahli')->get()->getResultArray();
    }
    public function ahlibyid($id)
    {
        return $this->db->table('tbl_tenagaahli')->getWhere(['id' => $id])->getRowArray();
    }
    public function updateahli($id, $data)
    {
        return $this->db->table('tbl_tenagaahli')->update($data, ['id' => $id]);
    }

    public function terampil(){
        return $this->db->table('tbl_tenagaterampil')->get()->getResultArray();
    }
    public function updateterampil($id, $data)
    {
        return $this->db->table('tbl_tenagaterampil')->update($data, ['id' => $id]);
    }
    public function terampilbyid($id)
    {
        return $this->db->table('tbl_tenagaterampil')->getWhere(['id' => $id])->getRowArray();
    }

    public function kost(){
        return $this->db->table('tbl_kostkontrakan')->get()->getResultArray();
    }
    public function updatekost($id,$data){
        return $this->db->table('tbl_kostkontrakan')->update($data, ['id' => $id]);
    }
    public function kostbyid($id)
    {
        return $this->db->table('tbl_kostkontrakan')->getWhere(['id' => $id])->getRowArray();
    }

    // Iklan Rumah
    public function rumah(){
        return $this->db->table('tbl_rumah')->get()->getResultArray();
    }
    public function rumahbyid($id){
        return $this->db->table('tbl_rumah')->getWhere(['id' => $id])->getRowArray();
    }

    public function simpanrumah($data)
    {
        return $this->table('tbl_rumah')->insert($data);
        
    }
    public function updaterumah($id, $data)
    {
        return $this->db->table('tbl_rumah')->update($data, ['id' => $id]);
    }

    // Iklan Tanah
    public function tanah(){
        return $this->db->table('tbl_tanah')->get()->getResultArray();
    }
    public function tanahbyid($id){
        return $this->db->table('tbl_tanah')->getWhere(['id' => $id])->getRowArray();
    }
    public function simpantanah($data)
    {
        return $this->table('tbl_tanah')->insert($data);
        
    }
    public function updatetanah($id, $data)
    {
        return $this->db->table('tbl_tanah')->update($data, ['id' => $id]);
    }

    // Iklan apartemen
    public function apartemen(){
        return $this->db->table('tbl_apartemen')->get()->getResultArray();
    }
    public function apartemenbyid($id){
        return $this->db->table('tbl_apartemen')->getWhere(['id' => $id])->getRowArray();
    }
    public function simpanapartemen($data)
    {
        return $this->table('tbl_apartemen')->insert($data);
        
    }
    public function updateapartemen($id, $data)
    {
        return $this->db->table('tbl_apartemen')->update($data, ['id' => $id]);
    }

    // Iklan ruko
    public function ruko(){
        return $this->db->table('tbl_ruko')->get()->getResultArray();
    }
    public function rukobyid($id){
        return $this->db->table('tbl_ruko')->getWhere(['id' => $id])->getRowArray();
    }
    public function simpanruko($data)
    {
        return $this->table('tbl_ruko')->insert($data);
        
    }
    public function updateruko($id, $data)
    {
        return $this->db->table('tbl_ruko')->update($data, ['id' => $id]);
    }

    // Iklan komersial
    public function komersial(){
        return $this->db->table('tbl_bangunankomersial')->get()->getResultArray();
    }
    public function komersialbyid($id){
        return $this->db->table('tbl_bangunankomersial')->getWhere(['id' => $id])->getRowArray();
    }
    public function simpankomersial($data)
    {
        return $this->table('tbl_bangunankomersial')->insert($data);
    }
    public function updatekomersial($id, $data)
    {
        return $this->db->table('tbl_bangunankomersial')->update($data, ['id' => $id]);
    }

    // Iklan mobil
    public function mobil(){
        return $this->db->table('tbl_mobil')->get()->getResultArray();
    }
    public function mobilbyid($id){
        return $this->db->table('tbl_mobil')->getWhere(['id' => $id])->getRowArray();
    }
    public function simpanmobil($data)
    {
        return $this->table('tbl_mobil')->insert($data);
    }
    public function updatemobil($id, $data)
    {
        return $this->db->table('tbl_mobil')->update($data, ['id' => $id]);
    }

    // Iklan motor
    public function motor(){
        return $this->db->table('tbl_motor')->get()->getResultArray();
    }
    public function motorbyid($id){
        return $this->db->table('tbl_motor')->getWhere(['id' => $id])->getRowArray();
    }
    public function simpanmotor($data)
    {
        return $this->table('tbl_motor')->insert($data);
    }
    public function updatemotor($id, $data)
    {
        return $this->db->table('tbl_motor')->update($data, ['id' => $id]);
    }














    public function jenisiklan()
    {
        return $this->db->table('tbl_jenisiklan')->get()->getResultArray();
    }
    public function tambahjenisiklan($data)
    {
        return $this->db->table('tbl_jenisiklan')->insert($data);
    }
    public function jenisiklanbyid($id)
    {
        return $this->db->table('tbl_jenisiklan')->getWhere(['id' => $id])->getRowArray();
    }
    public function updatejenisiklan($id, $data)
    {
        return $this->db->table('tbl_jenisiklan')->update($data, ['id' => $id]);
    }









    // Batas Iklan Rumah

    public function saveRekomendasiIklan($data)
    {
        return $this->db->table('tbl_rekomendasi_iklan')->insert($data);
    }
    public function detailIklan($id_iklan, $table, $primarykey)
    {
        return $this->db->table($table)->getWhere([$primarykey => $id_iklan])->getRowArray();
    }

    

    
}
