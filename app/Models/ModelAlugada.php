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


    public function pesan()
    {
        return $this->db->table('tbl_pesan')->get()->getResultArray();
    }
    // public function pesanvsuser(){
    //     $pesanjoinuser = "SELECT tbl_user.id,tbl_user.name,tbl_user.nohp JOIN tbl_pesan.*
    //     FROM tbl_user JOIN tbl_pesan
    //     ON  tbl_user.id = tbl_pesan.id_pesan
    //     ";
    //     return $this->db->query($pesanjoinuser)->getResultArray();
    // }

    public function sliderbyid($id)
    {
        return $this->db->table('tbl_slider')->getwhere(['id' => $id])->getRowArray();
    }
    public function updateslider($id, $data)
    {
        return $this->db->table('tbl_slider')->update($data, ['id' => $id]);
    }

    public function slider()
    {
        return $this->db->table('tbl_slider')->get()->getResultArray();
    }
    public function readSlider()
    {
        return $this->db->table('tbl_slider')->get()->getResultArray();
    }


    public function rekomendasiiklan()
    {
        return $this->db->table('tbl_rekomendasi_iklan')->orderBy('create_at', 'DESC')->get()->getResultArray();
    }
    public function rekomendasiiklanbyid($id)
    {
        return $this->db->table('tbl_rekomendasi_iklan')->getwhere(['id_rekomendasi_iklam'=>$id])->getRowArray();
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
    public function pengiklan()
    {
        return $this->db->table('tbl_user')->getwhere(['role' => 20])->getResultArray();
    }

    public function userbynohp($nohp)
    {
        // var_dump($nohp);die;
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
    public function userbaru($checked)
    {
        return $this->db->table('tbl_user')->getwhere(['checked'=>$checked])->getResultArray();
    }
    public function useraktif($is_active)
    {
        return $this->db->table('tbl_user')->getwhere(['is_active'=>$is_active])->getResultArray();
    }
    public function usersuspend($suspend)
    {
        return $this->db->table('tbl_user')->getwhere(['suspend'=>$suspend])->getResultArray();
    }





    // Batas Tabel User 

    // Tentang kami
    public function tentangkami()
    {
        return $this->db->table('tbl_tentangkami')->get()->getResultArray();
    }
    public function simpantentangkami($data)
    {
        return $this->db->table('tbl_tentangkami')->insert($data);
    }
    public function updatetentangkami($id, $data)
    {
        return $this->db->table('tbl_tentangkami')->update($data, ['id' => $id]);
    }
    public function tentangkamibyid($id)
    {
        return $this->db->table('tbl_tentangkami')->getwhere(['id' => $id])->getRowArray();
    }

    // Hubungi kami
    public function hubungikami()
    {
        return $this->db->table('tbl_hubungikami')->get()->getResultArray();
    }
    public function simpanhubungikami($data)
    {
        return $this->db->table('tbl_hubungikami')->insert($data);
    }
    public function hubungikamibyid($id)
    {
        return $this->db->table('tbl_hubungikami')->getwhere(['id' => $id])->getRowArray();
    }
    public function updatehubungikami($id,$data)
    {
        return $this->db->table('tbl_hubungikami')->update($data,['id'=>$id]);
    }




    // Layanan
    public function layanan()
    {

        $layanan = $this->db->table('tbl_layanan')->get()->getResultArray();
        $sublayanan = $this->db->table('tbl_sublayanan')->get()->getResultArray();
        $rekomendasi_iklan = $this->db->table('tbl_rekomendasi_iklan')->get()->getResultArray();

        $data_counting_layanan = array();

        for ($i = 0; $i < count($layanan); $i++) {
            $layanan[$i]['sublayanan'] = array();

            $dataSubLayanan = array();
            $countRekomendasiIklan = array();

            for ($x = 0; $x < count($sublayanan); $x++) {

                $countRekomendasiIklan = array();

                for ($y = 0; $y < count($rekomendasi_iklan); $y++) {
                    if ($sublayanan[$x]['nosublayanan'] == $rekomendasi_iklan[$y]['nosublayanan']) {
                        array_push($countRekomendasiIklan, $rekomendasi_iklan[$y]);
                    }
                }

                $sublayanan[$x]['count'] = count($countRekomendasiIklan);

                if ($layanan[$i]['nolayanan'] == $sublayanan[$x]['nolayanan']) {
                    array_push($dataSubLayanan, $sublayanan[$x]);
                }

                $layanan[$i]['sublayanan'] = $dataSubLayanan;
            }

            array_push($data_counting_layanan, $layanan[$i]);
        }

        return $data_counting_layanan;
    }

    // public function layanan(){
    //     // $layanan = $this->db->table('tbl_layanan')->get()->getResultArray();
    //     $sublayanan = $this->db->table('tbl_sublayanan')->get()->getResultArray();
    //     $rekomendasi_iklan = $this->db->table('tbl_rekomendasi_iklan')->get()->getResultArray();


    //     for($i=0;$i<count($sublayanan);$i++){
    //         for($j=0;$j<count($rekomendasi_iklan);$j++){
    //             if($sublayanan[$i]['nosublayanan']==$rekomendasi_iklan[$j]['nosublayanan']){


    //                 echo $rekomendasi_iklan[$j]['nosublayanan'];
    //             }

    //         }
    //     }
    //     die;
    // }



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
    public function ahli()
    {
        return $this->db->table('tbl_tenagaahli')->get()->getResultArray();
    }
    public function ahlibaru()
    {
        return $this->db->table('tbl_tenagaahli')->getwhere(['checked' => 0])->getResultArray();
    }
    public function ahliaktif()
    {
        return $this->db->table('tbl_tenagaahli')->getwhere(['is_active' => 1])->getResultArray();
    }
    public function ahlisuspend()
    {
        return $this->db->table('tbl_tenagaahli')->getwhere(['suspend' => 1])->getResultArray();
    }
    public function ahlisublayanan($nosublayanan)
    {
        return $this->db->table('tbl_tenagaahli')->getwhere(['nosublayanan' => $nosublayanan])->getResultArray();
    }

    public function ahlibyid($id)
    {
        return $this->db->table('tbl_tenagaahli')->getWhere(['id' => $id])->getRowArray();
    }
    public function updateahli($id, $data)
    {
        return $this->db->table('tbl_tenagaahli')->update($data, ['id' => $id]);
    }

    public function terampil()
    {
        return $this->db->table('tbl_tenagaterampil')->get()->getResultArray();
    }
    public function terampilbaru()
    {
        return $this->db->table('tbl_tenagaterampil')->getwhere(['checked' => 0])->getResultArray();
    }
    public function terampilaktif()
    {
        return $this->db->table('tbl_tenagaterampil')->getwhere(['is_active' => 1])->getResultArray();
    }
    public function terampilsuspend()
    {
        return $this->db->table('tbl_tenagaterampil')->getwhere(['suspend' => 1])->getResultArray();
    }

    public function updateterampil($id, $data)
    {
        return $this->db->table('tbl_tenagaterampil')->update($data, ['id' => $id]);
    }
    public function terampilbyid($id)
    {
        return $this->db->table('tbl_tenagaterampil')->getWhere(['id' => $id])->getRowArray();
    }

    public function kost()
    {
        return $this->db->table('tbl_kostkontrakan')->get()->getResultArray();
    }
    public function updatekost($id, $data)
    {
        return $this->db->table('tbl_kostkontrakan')->update($data, ['id' => $id]);
    }
    public function kostbyid($id)
    {
        return $this->db->table('tbl_kostkontrakan')->getWhere(['id' => $id])->getRowArray();
    }

    // Iklan Rumah
    public function rumah()
    {
        return $this->db->table('tbl_rumah')->get()->getResultArray();
    }
    public function rumahbaru()
    {
        return $this->db->table('tbl_rumah')->getwhere(['checked' => 0])->getResultArray();
    }
    public function rumahaktif()
    {
        return $this->db->table('tbl_rumah')->getwhere(['is_active' => 1])->getResultArray();
    }
    public function rumahsuspend()
    {
        return $this->db->table('tbl_rumah')->getwhere(['suspend' => 1])->getResultArray();
    }



    public function rumahbyid($id)
    {
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
    public function tanah()
    {
        return $this->db->table('tbl_tanah')->get()->getResultArray();
    }
    public function tanahbaru()
    {
        return $this->db->table('tbl_tanah')->getWhere(['checked' => 0])->getResultArray();
    }
    public function tanahaktif()
    {
        return $this->db->table('tbl_tanah')->getWhere(['is_active' => 1])->getResultArray();
    }
    public function tanahsuspend()
    {
        return $this->db->table('tbl_tanah')->getWhere(['suspend' => 1])->getResultArray();
    }
    public function tanahbyid($id)
    {
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
    public function apartemen()
    {
        return $this->db->table('tbl_apartemen')->get()->getResultArray();
    }
    public function apartemenbaru()
    {
        return $this->db->table('tbl_apartemen')->getwhere(['checked' => 0])->getResultArray();
    }
    public function apartemenaktif()
    {
        return $this->db->table('tbl_apartemen')->getwhere(['is_active' => 1])->getResultArray();
    }
    public function apartemensuspend()
    {
        return $this->db->table('tbl_apartemen')->getwhere(['suspend' => 1])->getResultArray();
    }
    public function apartemenbyid($id)
    {
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
    public function ruko()
    {
        return $this->db->table('tbl_ruko')->get()->getResultArray();
    }
    public function rukobaru()
    {
        return $this->db->table('tbl_ruko')->getwhere(['checked' => 0])->getResultArray();
    }
    public function rukoaktif()
    {
        return $this->db->table('tbl_ruko')->getwhere(['is_active' => 1])->getResultArray();
    }
    public function rukosuspend()
    {
        return $this->db->table('tbl_ruko')->getwhere(['suspend' => 1])->getResultArray();
    }
    public function rukobyid($id)
    {
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
    public function komersial()
    {
        return $this->db->table('tbl_bangunankomersial')->get()->getResultArray();
    }
    public function komersialbaru()
    {
        return $this->db->table('tbl_bangunankomersial')->getwhere(['checked' => 0])->getResultArray();
    }
    public function komersialaktif()
    {
        return $this->db->table('tbl_bangunankomersial')->getwhere(['is_active' => 1])->getResultArray();
    }
    public function komersialsuspend()
    {
        return $this->db->table('tbl_bangunankomersial')->getwhere(['suspend' => 0])->getResultArray();
    }
    public function komersialbyid($id)
    {
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
    public function mobil()
    {
        return $this->db->table('tbl_mobil')->get()->getResultArray();
    }
    public function mobilbaru()
    {
        return $this->db->table('tbl_mobil')->getwhere(['checked' => 0])->getResultArray();
    }
    public function mobilaktif()
    {
        return $this->db->table('tbl_mobil')->getwhere(['is_active' => 1])->getResultArray();
    }
    public function mobilsuspend()
    {
        return $this->db->table('tbl_mobil')->getwhere(['suspend' => 1])->getResultArray();
    }
    public function mobilbyid($id)
    {
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
    public function motor()
    {
        return $this->db->table('tbl_motor')->get()->getResultArray();
    }
    public function motorbaru()
    {
        return $this->db->table('tbl_motor')->getwhere(['checked' => 0])->getResultArray();
    }
    public function motoraktif()
    {
        return $this->db->table('tbl_motor')->getwhere(['is_active' => 1])->getResultArray();
    }
    public function motorsuspend()
    {
        return $this->db->table('tbl_motor')->getwhere(['suspend' => 1])->getResultArray();
    }
    public function motorbyid($id)
    {
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


    public function iklanbaru($checked){
        // var_dump($checked);die;
        return $this->db->table('tbl_rekomendasi_iklan')->getwhere(['checked'=>$checked])->getResultArray();
    }
    public function iklansuspend($suspend){
        // var_dump($checked);die;
        return $this->db->table('tbl_rekomendasi_iklan')->getwhere(['suspend'=>$suspend])->getResultArray();
    }
    public function iklanblock($suspend){
        // var_dump($block);die;
        return $this->db->table('tbl_rekomendasi_iklan')->getwhere(['suspend'=>$suspend])->getResultArray();
    }
    public function iklanaktif($is_active){
        // var_dump($is_active);die;
        return $this->db->table('tbl_rekomendasi_iklan')->getwhere(['is_active'=>$is_active])->getResultArray();
    }



}
