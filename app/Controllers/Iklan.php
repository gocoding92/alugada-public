<?php

namespace App\Controllers;

use App\Models\ModelAlugada;
use App\Models\ModelIklan;
use LengthException;

class Iklan extends BaseController
{

    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->modelalugada = new ModelAlugada();
        $this->iklan = new ModelIklan();
        $this->session = \Config\Services::session();
        $this->admin = 0;   //Bukan Admin
        $this->noWAAdmin = '085894222865';
    }
    public function index($param = '')
    {
        $nohppengunjung = $this->session->get('nohppengunjung');
        if ($nohppengunjung == null) {
            $nohppengunjung = 123;
            $idpengunjung = 123;
            $idpengunjung = 123;
        }

        $data = [
            'admin'         => $this->admin,
            'pengunjung'    => $this->modelalugada->userbynohp($nohppengunjung),
            'title'         => "Layanan",
            'layanan'       => $this->modelalugada->layanan(),
            'sublayanan'    => $this->modelalugada->sublayanan(),
        ];

        return view('iklan/index', $data);
    }

    public function detail($layanan = '', $no_layanan = '', $sublayanan = '', $no_sublayanan = '')
    {
        $this->form = '';

        if ($layanan) {
            if ($layanan == 'Tenaga Ahli') {
                $this->form = 'iklan/form/tenaga_ahli';
            }
            if ($layanan == 'Tenaga Terampil') {
                $this->form = 'iklan/form/tenaga_terampil';
            }
            if ($layanan == 'Kost & Kontrakan') {
                $this->form = 'iklan/form/kost_kontrakan';
            }
            if ($layanan == 'Mobil') {
                $this->form = 'iklan/form/mobil';
            }
            if ($layanan == 'Motor') {
                $this->form = 'iklan/form/motor';
            }
            if ($sublayanan == 'Rumah') {
                $this->form = 'iklan/form/rumah';
            }
            if ($sublayanan == 'Tanah') {
                $this->form = 'iklan/form/tanah';
            }
            if ($sublayanan == 'Apartemen') {
                $this->form = 'iklan/form/apartemen';
            }
            if ($sublayanan == 'Ruko') {
                $this->form = 'iklan/form/ruko';
            }
            if ($sublayanan == 'Bangunan Komersial') {
                $this->form = 'iklan/form/bangunan_komersial';
            }
        }


        $nohppengunjung = $this->session->get('nohppengunjung');
        if ($nohppengunjung == null) {
            $nohppengunjung = 123;
            // $idpengunjung = $this->modelalugada->layananbynohp($nohppengunjung);
            $idpengunjung = 123;
            // $idpengunjung = $idpengunjung['id']; 
            $idpengunjung = 10;
        }

        $data = [
            'admin'         => $this->admin,
            'pengunjung'    => $this->modelalugada->userbynohp($nohppengunjung),
            'title'         => "Layanan",
            'layanan'       => $this->modelalugada->layanan(),
            'sublayanan'    => $this->modelalugada->sublayanan(),
            'form'          => $this->form,
            'no_layanan'    => $no_layanan,
            'no_sublayanan'   => $no_sublayanan,
        ];

        return view('iklan/detail', $data);
    }

    public function save()
    {
        $judul_iklan = $this->request->getVar('judul_iklan');
        $merk        = $this->request->getVar('merk');
        $type        = $this->request->getVar('type');
        $tahun       = $this->request->getVar('tahun');
        $warna       = $this->request->getVar('warna');
        $plat        = $this->request->getVar('plat');
        $odometer    = $this->request->getVar('odometer');
        $bahan_bakar = $this->request->getVar('bahan_bakar');
        $lokasi      = $this->request->getVar('lokasi');
        $kecamatan   = $this->request->getVar('kecamatan');
        $kabupaten   = $this->request->getVar('kabupaten');
        $provinsi    = $this->request->getVar('provinsi');
        $deskripsi   = $this->request->getVar('deskripsi');
        $harga       = $this->request->getVar('harga');
        $nolayanan       = $this->request->getVar('nolayanan');
        $nosublayanan       = $this->request->getVar('nosublayanan');

        $imageFile  = $this->request->getFiles();

        $imageFile1 = $imageFile['file1'];
        $imageName1 = '';
        if ($imageFile1->isValid()) {
            $imageName1 = $imageFile1->getName();
            $imageFile1->move(ROOTPATH . 'public/Image/iklan/mobil', $imageName1);
        }

        $imageFile2 = $imageFile['file2'];
        $imageName2 = '';
        if ($imageFile2->isValid()) {
            $imageName2 = $imageFile2->getName();
            $imageFile2->move(ROOTPATH . 'public/Image/iklan/mobil', $imageName2);
        }

        $imageFile3 = $imageFile['file3'];
        $imageName3 = '';
        if ($imageFile3->isValid()) {
            $imageName3 = $imageFile3->getName();
            $imageFile3->move(ROOTPATH . 'public/Image/iklan/mobil', $imageName3);
        }

        $imageFile4 = $imageFile['file4'];
        $imageName4 = '';
        if ($imageFile4->isValid()) {
            $imageName4 = $imageFile4->getName();
            $imageFile4->move(ROOTPATH . 'public/Image/iklan/mobil', $imageName4);
        }

        $imageFile5 = $imageFile['file5'];
        $imageName5 = '';
        if ($imageFile5->isValid()) {
            $imageName5 = $imageFile5->getName();
            $imageFile5->move(ROOTPATH . 'public/Image/iklan/mobil', $imageName5);
        }

        $imageFile6 = $imageFile['file6'];
        $imageName6 = '';
        if ($imageFile6->isValid()) {
            $imageName6 = $imageFile6->getName();
            $imageFile6->move(ROOTPATH . 'public/Image/iklan/mobil', $imageName6);
        }

        $data = ([
            'judul_iklan'  => $judul_iklan,
            'merk'         => $merk,
            'type'         => $type,
            'tahun'        => $tahun,
            'warna'        => $warna,
            'plat'         => $plat,
            'odometer'     => $odometer,
            'bahan_bakar'  => $bahan_bakar,
            'lokasi'       => $lokasi,
            'kecamatan'    => $kecamatan,
            'kabupaten'    => $kabupaten,
            'provinsi'     => $provinsi,
            'deskripsi'    => $deskripsi,
            'harga'        => $harga,
            'nolayanan'    => $nolayanan,
            'nosublayanan' => $nosublayanan,
            'image_1'      => $imageName1,
            'image_2'      => $imageName2,
            'image_3'      => $imageName3,
            'image_4'      => $imageName4,
            'image_5'      => $imageName5,
            'image_6'      => $imageName6,
            'idpengiklan'  => $this->session->get('id'),
            'path_folder'  => 'mobil',
        ]);

        $id_iklan = $this->iklan->saveMobil($data);

        $description = "Merek : " . $merk . " " . 'Type :' . " " . $type . " " . 'Tahun :' . " " . $tahun . " " . 'Warna :' . " " . $warna . " " . 'Deskripsi :' . " " . $deskripsi . "";

        $this->sendNotifWA();

        return $this->saveRekomendasiIklan('mobil', $id_iklan, $judul_iklan, $description, $lokasi, $imageName1, 'tbl_mobil');
    }

    public function savemtr()
    {
        $judul_iklan = $this->request->getVar('judul_iklan');
        $merk        = $this->request->getVar('merk');
        $type        = $this->request->getVar('type');
        $tahun       = $this->request->getVar('tahun');
        $warna       = $this->request->getVar('warna');
        $plat        = $this->request->getVar('plat');
        $odometer    = $this->request->getVar('odometer');
        $bahan_bakar = $this->request->getVar('bahan_bakar');
        $lokasi      = $this->request->getVar('lokasi');
        $kecamatan   = $this->request->getVar('kecamatan');
        $kabupaten   = $this->request->getVar('kabupaten');
        $provinsi    = $this->request->getVar('provinsi');
        $deskripsi   = $this->request->getVar('deskripsi');
        $harga       = $this->request->getVar('harga');
        $nolayanan       = $this->request->getVar('nolayanan');
        $nosublayanan       = $this->request->getVar('nosublayanan');
        $imageFile = $this->request->getFiles();

        $imageFile1 = $imageFile['file1'];
        $imageName1 = '';
        if ($imageFile1->isValid()) {
            $imageName1 = $imageFile1->getName();
            $imageFile1->move(ROOTPATH . 'public/Image/iklan/motor', $imageName1);
        }

        $imageFile2 = $imageFile['file2'];
        $imageName2 = '';
        if ($imageFile2->isValid()) {
            $imageName2 = $imageFile2->getName();
            $imageFile2->move(ROOTPATH . 'public/Image/iklan/motor', $imageName2);
        }

        $imageFile3 = $imageFile['file3'];
        $imageName3 = '';
        if ($imageFile3->isValid()) {
            $imageName3 = $imageFile3->getName();
            $imageFile3->move(ROOTPATH . 'public/Image/iklan/motor', $imageName3);
        }

        $imageFile4 = $imageFile['file4'];
        $imageName4 = '';
        if ($imageFile4->isValid()) {
            $imageName4 = $imageFile4->getName();
            $imageFile4->move(ROOTPATH . 'public/Image/iklan/motor', $imageName4);
        }

        $imageFile5 = $imageFile['file5'];
        $imageName5 = '';
        if ($imageFile5->isValid()) {
            $imageName5 = $imageFile5->getName();
            $imageFile5->move(ROOTPATH . 'public/Image/iklan/motor', $imageName5);
        }

        $imageFile6 = $imageFile['file6'];
        $imageName6 = '';
        if ($imageFile6->isValid()) {
            $imageName6 = $imageFile6->getName();
            $imageFile6->move(ROOTPATH . 'public/Image/iklan/motor', $imageName6);
        }

        $data = ([
            'judul_iklan' => $judul_iklan,
            'merk' => $merk,
            'type' => $type,
            'tahun' => $tahun,
            'warna' => $warna,
            'plat' => $plat,
            'odometer' => $odometer,
            'bahan_bakar' => $bahan_bakar,
            'lokasi' => $lokasi,
            'kecamatan' => $kecamatan,
            'kabupaten' => $kabupaten,
            'provinsi' => $provinsi,
            'deskripsi' => $deskripsi,
            'harga' => $harga,
            'nolayanan' => $nolayanan,
            'nosublayanan' => $nosublayanan,
            'image_1'          => $imageName1,
            'image_2'          => $imageName2,
            'image_3'          => $imageName3,
            'image_4'          => $imageName4,
            'image_5'          => $imageName5,
            'image_6'          => $imageName6,
            'idpengiklan'     => $this->session->get('id'),
            'path_folder'     => 'motor',
        ]);

        $id_iklan = $this->iklan->saveMotor($data);

        $description = "Merek : " . $merk . " " . 'Type :' . " " . $type . " " . 'Tahun :' . " " . $tahun . " " . 'Warna :' . " " . $warna . " " . 'Deskripsi :' . " " . $deskripsi . "";

        $this->sendNotifWA();

        return $this->saveRekomendasiIklan('motor', $id_iklan, $judul_iklan, $description, $lokasi, $imageName1, 'tbl_motor');
    }

    public function saveKostkontrakan()
    {
        $judul_iklan   = $this->request->getVar('judul_iklan');
        $jumlah_kamar  = $this->request->getVar('jumlah_kamar');
        $kamar_kosong  = $this->request->getVar('kamar_kosong');
        $listrik       = $this->request->getVar('listrik');
        $kamar_mandi   = $this->request->getVar('kamar_mandi');
        $ac            = $this->request->getVar('ac');
        $water_heater  = $this->request->getVar('water_heater');
        $tempat_tidur  = $this->request->getVar('tempat_tidur');
        $meja_kursi    = $this->request->getVar('meja_kursi');
        $almari        = $this->request->getVar('almari');
        $alamat_lokasi = $this->request->getVar('alamat_lokasi');
        $kecamatan     = $this->request->getVar('kecamatan');
        $kabupaten     = $this->request->getVar('kabupaten');
        $provinsi      = $this->request->getVar('provinsi');
        $harga         = $this->request->getVar('harga');
        $nolayanan     = $this->request->getVar('nolayanan');
        $nosublayanan  = $this->request->getVar('nosublayanan');
        $perbulan      = $this->request->getVar('perbulan');

        $imageFile  = $this->request->getFiles();

        $imageFile1 = $imageFile['file1'];
        $imageName1 = '';
        if ($imageFile1->isValid()) {
            $imageName1 = $imageFile1->getName();
            $imageFile1->move(ROOTPATH . 'public/Image/iklan/kost&kontrakan', $imageName1);
        }

        $imageFile2 = $imageFile['file2'];
        $imageName2 = '';
        if ($imageFile2->isValid()) {
            $imageName2 = $imageFile2->getName();
            $imageFile2->move(ROOTPATH . 'public/Image/iklan/kost&kontrakan', $imageName2);
        }

        $imageFile3 = $imageFile['file3'];
        $imageName3 = '';
        if ($imageFile3->isValid()) {
            $imageName3 = $imageFile3->getName();
            $imageFile3->move(ROOTPATH . 'public/Image/iklan/kost&kontrakan', $imageName3);
        }

        $imageFile4 = $imageFile['file4'];
        $imageName4 = '';
        if ($imageFile4->isValid()) {
            $imageName4 = $imageFile4->getName();
            $imageFile4->move(ROOTPATH . 'public/Image/iklan/kost&kontrakan', $imageName4);
        }

        $imageFile5 = $imageFile['file5'];
        $imageName5 = '';
        if ($imageFile5->isValid()) {
            $imageName5 = $imageFile5->getName();
            $imageFile5->move(ROOTPATH . 'public/Image/iklan/kost&kontrakan', $imageName5);
        }

        $imageFile6 = $imageFile['file6'];
        $imageName6 = '';
        if ($imageFile6->isValid()) {
            $imageName6 = $imageFile6->getName();
            $imageFile6->move(ROOTPATH . 'public/Image/iklan/kost&kontrakan', $imageName6);
        }

        $data = ([
            'judul_iklan'  => $judul_iklan,
            'jumlah_kamar' => $jumlah_kamar,
            'kamar_kosong' => $kamar_kosong,
            'listrik'      => $listrik,
            'kamar_mandi'  => $kamar_mandi,
            'ac'           => $ac,
            'water_heater' => $water_heater,
            'tempat_tidur' => $tempat_tidur,
            'meja_kursi'   => $meja_kursi,
            'almari'       => $almari,
            'alamat_lokasi' => $alamat_lokasi,
            'kecamatan'    => $kecamatan,
            'kabupaten'    => $kabupaten,
            'provinsi'     => $provinsi,
            'harga'        => $harga,
            'nolayanan'    => $nolayanan,
            'nosublayanan' => $nosublayanan,
            'harga'        => $harga,
            'perbulan'     => $perbulan,
            'image_1'          => $imageName1,
            'image_2'          => $imageName2,
            'image_3'          => $imageName3,
            'image_4'          => $imageName4,
            'image_5'          => $imageName5,
            'image_6'          => $imageName6,
            'idpengiklan'     => $this->session->get('id'),
            'path_folder'     => 'kost_kontrakan',
        ]);

        $id_iklan = $this->iklan->saveKostKontrakan($data);

        $description = "Jumlah Kamar : " . $jumlah_kamar . " " . 'Kamar Kosong :' . " " . $kamar_kosong . " " . 'Listrik :' . " " . $listrik . " " . 'Kamar Mandi :' . " " . $kamar_mandi . "";

        $this->sendNotifWA();

        return $this->saveRekomendasiIklan('kost&kontrakan', $id_iklan, $judul_iklan = '', $description, $alamat_lokasi, $imageName1, 'tbl_kostkontrakan');
    }

    public function saveTenagaAhli()
    {
        $bidang_profesi = $this->request->getVar('bidang_profesi');
        $nama_lengkap = $this->request->getVar('nama_lengkap');
        $tanggal_lahir = $this->request->getVar('tanggal_lahir');
        $pendidikan = $this->request->getVar('pendidikan');
        $jurusan = $this->request->getVar('jurusan');
        $pengalaman_kerja = $this->request->getVar('pengalaman_kerja');
        $domisili = $this->request->getVar('domisili');
        $kecamatan = $this->request->getVar('kecamatan');
        $kabupaten = $this->request->getVar('kabupaten');
        $provinsi = $this->request->getVar('provinsi');
        $deskripsi = $this->request->getVar('deskripsi');
        $gaji = $this->request->getVar('gaji');
        $nolayanan = $this->request->getVar('nolayanan');
        $nosublayanan = $this->request->getVar('nosublayanan');
        $imageFile  = $this->request->getFiles();

        $imageFile1 = $imageFile['file1'];
        $imageName1 = '';
        if ($imageFile1->isValid()) {
            $imageName1 = $imageFile1->getName();
            $imageFile1->move(ROOTPATH . 'public/Image/iklan/tenaga_ahli', $imageName1);
        }

        $imageFile2 = $imageFile['file2'];
        $imageName2 = '';
        if ($imageFile2->isValid()) {
            $imageName2 = $imageFile2->getName();
            $imageFile2->move(ROOTPATH . 'public/Image/iklan/tenaga_ahli', $imageName2);
        }

        $imageFile3 = $imageFile['file3'];
        $imageName3 = '';
        if ($imageFile3->isValid()) {
            $imageName3 = $imageFile3->getName();
            $imageFile3->move(ROOTPATH . 'public/Image/iklan/tenaga_ahli', $imageName3);
        }

        $imageFile4 = $imageFile['file4'];
        $imageName4 = '';
        if ($imageFile4->isValid()) {
            $imageName4 = $imageFile4->getName();
            $imageFile4->move(ROOTPATH . 'public/Image/iklan/tenaga_ahli', $imageName4);
        }

        $imageFile5 = $imageFile['file5'];
        $imageName5 = '';
        if ($imageFile5->isValid()) {
            $imageName5 = $imageFile5->getName();
            $imageFile5->move(ROOTPATH . 'public/Image/iklan/tenaga_ahli', $imageName5);
        }

        $imageFile6 = $imageFile['file6'];
        $imageName6 = '';
        if ($imageFile6->isValid()) {
            $imageName6 = $imageFile6->getName();
            $imageFile6->move(ROOTPATH . 'public/Image/iklan/tenaga_ahli', $imageName6);
        }

        $file1 = $imageFile['curiculum_vitae'];
        $fileName1 = '';
        if ($file1->isValid()) {
            $fileName1 = $file1->getName();
            $file1->move(ROOTPATH . 'public/Image/file', $fileName1);
        }

        $data = ([
            'bidang_profesi'   => $bidang_profesi,
            'nama_lengkap'     => $nama_lengkap,
            'tanggal_lahir'    => $tanggal_lahir,
            'pendidikan'       => $pendidikan,
            'jurusan'          => $jurusan,
            'pengalaman_kerja' => $pengalaman_kerja,
            'domisili'         => $domisili,
            'kecamatan'        => $kecamatan,
            'kabupaten'        => $kabupaten,
            'provinsi'         => $provinsi,
            'deskripsi'        => $deskripsi,
            'gaji'             => $gaji,
            'image_1'          => $imageName1,
            'image_2'          => $imageName2,
            'image_3'          => $imageName3,
            'image_4'          => $imageName4,
            'image_5'          => $imageName5,
            'image_6'          => $imageName6,
            'nolayanan'        => $nolayanan,
            'nosublayanan'     => $nosublayanan,
            'idpengiklan'     => $this->session->get('id'),
            'path_folder'     => 'tenaga_ahli',
            'curiculum_vitae' => $fileName1
        ]);

        $id_iklan = $this->iklan->saveTenagaAhli($data);

        $description = "Bidang Profesi : " . $bidang_profesi . " " . 'Tanggal Lahir :' . " " . $tanggal_lahir . " " . 'Pendidikan :' . " " . $pendidikan . " " . 'Jurusan :' . " " . $jurusan . "";

        $this->sendNotifWA();

        return $this->saveRekomendasiIklan('tenaga_ahli', $id_iklan, $nama_lengkap, $description, $domisili, $imageName1, 'tbl_tenagaahli');
    }

    public function saveTenagaTerampil()
    {
        $profesi          = $this->request->getVar('profesi');
        $nama_lengkap     = $this->request->getVar('nama_lengkap');
        $tempat_lahir     = $this->request->getVar('tempat_lahir');
        $pendidikan       = $this->request->getVar('pendidikan');
        $pengalaman_kerja = $this->request->getVar('pengalaman_kerja');
        $domisili         = $this->request->getVar('domisili');
        $kecamatan        = $this->request->getVar('kecamatan');
        $kabupaten        = $this->request->getVar('kabupaten');
        $provinsi         = $this->request->getVar('provinsi');
        $deskripsi        = $this->request->getVar('deskripsi');
        $gaji             = $this->request->getVar('gaji');
        $nolayanan        = $this->request->getVar('nolayanan');
        $nosublayanan     = $this->request->getVar('nosublayanan');

        $imageFile  = $this->request->getFiles();

        $imageFile1 = $imageFile['file1'];
        $imageName1 = '';
        if ($imageFile1->isValid()) {
            $imageName1 = $imageFile1->getName();
            $imageFile1->move(ROOTPATH . 'public/Image/iklan/tenaga_terampil', $imageName1);
        }

        $imageFile2 = $imageFile['file2'];
        $imageName2 = '';
        if ($imageFile2->isValid()) {
            $imageName2 = $imageFile2->getName();
            $imageFile2->move(ROOTPATH . 'public/Image/iklan/tenaga_terampil', $imageName2);
        }

        $imageFile3 = $imageFile['file3'];
        $imageName3 = '';
        if ($imageFile3->isValid()) {
            $imageName3 = $imageFile3->getName();
            $imageFile3->move(ROOTPATH . 'public/Image/iklan/tenaga_terampil', $imageName3);
        }

        $imageFile4 = $imageFile['file4'];
        $imageName4 = '';
        if ($imageFile4->isValid()) {
            $imageName4 = $imageFile4->getName();
            $imageFile4->move(ROOTPATH . 'public/Image/iklan/tenaga_terampil', $imageName4);
        }

        $imageFile5 = $imageFile['file5'];
        $imageName5 = '';
        if ($imageFile5->isValid()) {
            $imageName5 = $imageFile5->getName();
            $imageFile5->move(ROOTPATH . 'public/Image/iklan/tenaga_terampil', $imageName5);
        }

        $imageFile6 = $imageFile['file6'];
        $imageName6 = '';
        if ($imageFile6->isValid()) {
            $imageName6 = $imageFile6->getName();
            $imageFile6->move(ROOTPATH . 'public/Image/iklan/tenaga_terampil', $imageName6);
        }

        $data = ([
            'profesi'          => $profesi,
            'nama_lengkap'     => $nama_lengkap,
            'tempat_lahir'     => $tempat_lahir,
            'pendidikan'       => $pendidikan,
            'pengalaman_kerja' => $pengalaman_kerja,
            'domisili'         => $domisili,
            'kecamatan'        => $kecamatan,
            'kabupaten'        => $kabupaten,
            'provinsi'         => $provinsi,
            'deskripsi'        => $deskripsi,
            'gaji'             => $gaji,
            'nolayanan'        => $nolayanan,
            'nosublayanan'     => $nosublayanan,
            'image_1'            => $imageName1,
            'image_2'            => $imageName2,
            'image_3'            => $imageName3,
            'image_4'            => $imageName4,
            'image_5'            => $imageName5,
            'image_6'            => $imageName6,
            'idpengiklan'        => $this->session->get('id'),
            'path_folder'        => 'tenaga_terampil',
        ]);

        $id_iklan = $this->iklan->saveTenagaTerampil($data);

        $description = "Profesi : " . $profesi . " " . 'Tanggal Lahir :' . " " . $tempat_lahir . " " . 'Pendidikan :' . " " . $pendidikan . " " . 'Pengalaman :' . " " . $pengalaman_kerja . " " . 'Tempat Lahir :' . " " . $tempat_lahir . "";

        $this->sendNotifWA();

        return $this->saveRekomendasiIklan('tenaga_terampil', $id_iklan, $nama_lengkap, $description, $domisili, $imageName1, 'tbl_tenagaterampil');
    }

    public function saveRumah()
    {
        $juduliklan    = $this->request->getVar('juduliklan');
        $luastanah     = $this->request->getVar('luastanah');
        $luasbangunan  = $this->request->getVar('luasbangunan');
        $kepemilikan   = $this->request->getVar('kepemilikan');
        $jumlahlantai  = $this->request->getVar('jumlahlantai');
        $listrik       = $this->request->getVar('listrik');
        $ruangtamu     = $this->request->getVar('ruangtamu');
        $ruangkeluarga = $this->request->getVar('ruangkeluarga');
        $kamartidur    = $this->request->getVar('kamartidur');
        $kamarpembantu = $this->request->getVar('kamarpembantu');
        $kamarmandi    = $this->request->getVar('kamarmandi');
        $teras         = $this->request->getVar('teras');
        $taman         = $this->request->getVar('taman');
        $aksesmobil    = $this->request->getVar('aksesmobil');
        $garasi        = $this->request->getVar('garasi');
        $carport       = $this->request->getVar('carport');
        $lokasi        = $this->request->getVar('lokasi');
        $kecamatan     = $this->request->getVar('kecamatan');
        $kabupaten     = $this->request->getVar('kabupaten');
        $propinsi      = $this->request->getVar('propinsi');
        $deskripsi     = $this->request->getVar('deskripsi');
        $harga         = $this->request->getVar('harga');
        $nolayanan     = $this->request->getVar('nolayanan');
        $nosublayanan  = $this->request->getVar('nosublayanan');

        $imageFile  = $this->request->getFiles();

        $imageFile1 = $imageFile['file1'];
        $imageName1 = '';
        if ($imageFile1->isValid()) {
            $imageName1 = $imageFile1->getName();
            $imageFile1->move(ROOTPATH . 'public/Image/iklan/rumah', $imageName1);
        }

        $imageFile2 = $imageFile['file2'];
        $imageName2 = '';
        if ($imageFile2->isValid()) {
            $imageName2 = $imageFile2->getName();
            $imageFile2->move(ROOTPATH . 'public/Image/iklan/rumah', $imageName2);
        }

        $imageFile3 = $imageFile['file3'];
        $imageName3 = '';
        if ($imageFile3->isValid()) {
            $imageName3 = $imageFile3->getName();
            $imageFile3->move(ROOTPATH . 'public/Image/iklan/rumah', $imageName3);
        }

        $imageFile4 = $imageFile['file4'];
        $imageName4 = '';
        if ($imageFile4->isValid()) {
            $imageName4 = $imageFile4->getName();
            $imageFile4->move(ROOTPATH . 'public/Image/iklan/rumah', $imageName4);
        }

        $imageFile5 = $imageFile['file5'];
        $imageName5 = '';
        if ($imageFile5->isValid()) {
            $imageName5 = $imageFile5->getName();
            $imageFile5->move(ROOTPATH . 'public/Image/iklan/rumah', $imageName5);
        }

        $imageFile6 = $imageFile['file6'];
        $imageName6 = '';
        if ($imageFile6->isValid()) {
            $imageName6 = $imageFile6->getName();
            $imageFile6->move(ROOTPATH . 'public/Image/iklan/rumah', $imageName6);
        }

        $data = ([
            'juduliklan'    => $juduliklan,
            'luastanah'     => $luastanah,
            'luasbangunan'  => $luasbangunan,
            'kepemilikan'   => $kepemilikan,
            'jumlahlantai'  => $jumlahlantai,
            'listrik'       => $listrik,
            'ruangtamu'     => $ruangtamu,
            'ruangkeluarga' => $ruangkeluarga,
            'kamartidur'    => $kamartidur,
            'kamarpembantu' => $kamarpembantu,
            'kamarmandi'    => $kamarmandi,
            'teras'         => $teras,
            'taman'         => $taman,
            'aksesmobil'    => $aksesmobil,
            'garasi'        => $garasi,
            'carport'       => $carport,
            'lokasi'        => $lokasi,
            'kecamatan'     => $kecamatan,
            'kabupaten'     => $kabupaten,
            'propinsi'      => $propinsi,
            'deskripsi'     => $deskripsi,
            'harga'         => $harga,
            'nolayanan'     => $nolayanan,
            'nosublayanan'  => $nosublayanan,
            'harga'         => $harga,
            'image_1'       => $imageName1,
            'image_2'       => $imageName2,
            'image_3'       => $imageName3,
            'image_4'       => $imageName4,
            'image_5'       => $imageName5,
            'image_6'       => $imageName6,
            'idpengiklan'   => $this->session->get('id'),
            'path_folder'   => 'rumah',
        ]);

        $id_iklan = $this->iklan->saveRumah($data);

        $description = "Luas Tanah : " . $luastanah . " " . 'Luas Bangunan :' . " " . $luasbangunan . " " . 'Kepemilikan :' . " " . $kepemilikan . " " . 'Jumlah Lantai :' . " " . $jumlahlantai . " " . 'Listrik :' . " " . $listrik . " " . 'Kamar Tidur :' . " " . $kamartidur . " " . 'Kamar Pembantu :' . " " . $kamarpembantu . "";

        $this->sendNotifWA();

        return $this->saveRekomendasiIklan('rumah', $id_iklan, $juduliklan, $description, $lokasi, $imageName1, 'tbl_rumah');
    }

    public function saveTanah()
    {
        $juduliklan = $this->request->getVar('juduliklan');
        $luastanah = $this->request->getVar('luastanah');
        $kepemilikan = $this->request->getVar('kepemilikan');
        $aksesmobil = $this->request->getVar('aksesmobil');
        $lokasi = $this->request->getVar('lokasi');
        $kecamatan = $this->request->getVar('kecamatan');
        $kabupaten = $this->request->getVar('kabupaten');
        $propinsi = $this->request->getVar('propinsi');
        $deskripsi = $this->request->getVar('deskripsi');
        $harga = $this->request->getVar('harga');
        $nolayanan = $this->request->getVar('nolayanan');
        $nosublayanan = $this->request->getVar('nosublayanan');

        $imageFile  = $this->request->getFiles();

        $imageFile1 = $imageFile['file1'];
        $imageName1 = '';
        if ($imageFile1->isValid()) {
            $imageName1 = $imageFile1->getName();
            $imageFile1->move(ROOTPATH . 'public/Image/iklan/tanah', $imageName1);
        }

        $imageFile2 = $imageFile['file2'];
        $imageName2 = '';
        if ($imageFile2->isValid()) {
            $imageName2 = $imageFile2->getName();
            $imageFile2->move(ROOTPATH . 'public/Image/iklan/tanah', $imageName2);
        }

        $imageFile3 = $imageFile['file3'];
        $imageName3 = '';
        if ($imageFile3->isValid()) {
            $imageName3 = $imageFile3->getName();
            $imageFile3->move(ROOTPATH . 'public/Image/iklan/tanah', $imageName3);
        }

        $imageFile4 = $imageFile['file4'];
        $imageName4 = '';
        if ($imageFile4->isValid()) {
            $imageName4 = $imageFile4->getName();
            $imageFile4->move(ROOTPATH . 'public/Image/iklan/tanah', $imageName4);
        }

        $imageFile5 = $imageFile['file5'];
        $imageName5 = '';
        if ($imageFile5->isValid()) {
            $imageName5 = $imageFile5->getName();
            $imageFile5->move(ROOTPATH . 'public/Image/iklan/tanah', $imageName5);
        }

        $imageFile6 = $imageFile['file6'];
        $imageName6 = '';
        if ($imageFile6->isValid()) {
            $imageName6 = $imageFile6->getName();
            $imageFile6->move(ROOTPATH . 'public/Image/iklan/tanah', $imageName6);
        }

        $data = ([
            'juduliklan'    => $juduliklan,
            'luastanah'     => $luastanah,
            'kepemilikan'   => $kepemilikan,
            'aksesmobil'    => $aksesmobil,
            'lokasi'        => $lokasi,
            'kecamatan'     => $kecamatan,
            'kabupaten'     => $kabupaten,
            'propinsi'      => $propinsi,
            'deskripsi'     => $deskripsi,
            'harga'         => $harga,
            'nolayanan'     => $nolayanan,
            'nosublayanan'  => $nosublayanan,
            'image_1'       => $imageName1,
            'image_2'       => $imageName2,
            'image_3'       => $imageName3,
            'image_4'       => $imageName4,
            'image_5'       => $imageName5,
            'image_6'       => $imageName6,
            'idpengiklan'   => $this->session->get('id'),
            'path_folder'   => 'tanah',
        ]);


        $id_iklan = $this->iklan->saveTanah($data);

        $description = "Luas Tanah : " . $luastanah . " " . 'Kepemilikan :' . " " . $kepemilikan . " " . 'Akses Mobil :' . " " . $aksesmobil . " " . 'Deskripsi :' . " " . $deskripsi . "";

        $this->sendNotifWA();

        return $this->saveRekomendasiIklan('tanah', $id_iklan, $juduliklan, $description, $lokasi, $imageName1, 'tbl_tanah');
    }

    public function saveApartemen()
    {
        $juduliklan = $this->request->getVar('juduliklan');
        $luas = $this->request->getVar('luas');
        $kepemilikan = $this->request->getVar('kepemilikan');
        $bedroom = $this->request->getVar('bedroom');
        $kamarmandi = $this->request->getVar('kamarmandi');
        $listrik = $this->request->getVar('listrik');
        $alamatlokasi = $this->request->getVar('alamatlokasi');
        $kecamatan = $this->request->getVar('kecamatan');
        $kabupaten = $this->request->getVar('kabupaten');
        $propinsi = $this->request->getVar('propinsi');
        $deskripsi = $this->request->getVar('deskripsi');
        $harga = $this->request->getVar('harga');
        $nolayanan = $this->request->getVar('nolayanan');
        $nosublayanan = $this->request->getVar('nosublayanan');
        $imageFile  = $this->request->getFiles();

        $imageFile1 = $imageFile['file1'];
        $imageName1 = '';
        if ($imageFile1->isValid()) {
            $imageName1 = $imageFile1->getName();
            $imageFile1->move(ROOTPATH . 'public/Image/iklan/apartemen', $imageName1);
        }

        $imageFile2 = $imageFile['file2'];
        $imageName2 = '';
        if ($imageFile2->isValid()) {
            $imageName2 = $imageFile2->getName();
            $imageFile2->move(ROOTPATH . 'public/Image/iklan/apartemen', $imageName2);
        }

        $imageFile3 = $imageFile['file3'];
        $imageName3 = '';
        if ($imageFile3->isValid()) {
            $imageName3 = $imageFile3->getName();
            $imageFile3->move(ROOTPATH . 'public/Image/iklan/apartemen', $imageName3);
        }

        $imageFile4 = $imageFile['file4'];
        $imageName4 = '';
        if ($imageFile4->isValid()) {
            $imageName4 = $imageFile4->getName();
            $imageFile4->move(ROOTPATH . 'public/Image/iklan/apartemen', $imageName4);
        }

        $imageFile5 = $imageFile['file5'];
        $imageName5 = '';
        if ($imageFile5->isValid()) {
            $imageName5 = $imageFile5->getName();
            $imageFile5->move(ROOTPATH . 'public/Image/iklan/apartemen', $imageName5);
        }

        $imageFile6 = $imageFile['file6'];
        $imageName6 = '';
        if ($imageFile6->isValid()) {
            $imageName6 = $imageFile6->getName();
            $imageFile6->move(ROOTPATH . 'public/Image/iklan/apartemen', $imageName6);
        }

        $data = ([
            'juduliklan' => $juduliklan,
            'luas' => $luas,
            'kepemilikan' => $kepemilikan,
            'bedroom' => $bedroom,
            'kamarmandi' => $kamarmandi,
            'listrik' => $listrik,
            'alamatlokasi' => $alamatlokasi,
            'kecamatan' => $kecamatan,
            'kabupaten' => $kabupaten,
            'propinsi' => $propinsi,
            'deskripsi' => $deskripsi,
            'harga' => $harga,
            'nolayanan' => $nolayanan,
            'nosublayanan' => $nosublayanan,
            'image_1'       => $imageName1,
            'image_2'       => $imageName2,
            'image_3'       => $imageName3,
            'image_4'       => $imageName4,
            'image_5'       => $imageName5,
            'image_6'       => $imageName6,
            'idpengiklan'   => $this->session->get('id'),
            'path_folder'   => 'apartemen',
        ]);


        $id_iklan = $this->iklan->saveApartemen($data);

        $description = "Luas : " . $luas . " " . 'Kepemilikan :' . " " . $kepemilikan . " " . 'Bedroom :' . " " . $bedroom . " " . 'Kamar Mandi :' . " " . $kamarmandi . " " . 'Deskripsi :' . " " . $deskripsi . "";

        $this->sendNotifWA();

        return $this->saveRekomendasiIklan('apartemen', $id_iklan, $juduliklan, $description, $alamatlokasi, $imageName1, 'tbl_apartemen');
    }

    public function saveRuko()
    {
        $juduliklan = $this->request->getVar('juduliklan');
        $luastanah = $this->request->getVar('luastanah');
        $luasbangunan = $this->request->getVar('luasbangunan');
        $kepemilikan = $this->request->getVar('kepemilikan');
        $jumlahlantai = $this->request->getVar('jumlahlantai');
        $listrik = $this->request->getVar('listrik');
        $kamarmandi = $this->request->getVar('kamarmandi');
        $carport = $this->request->getVar('carport');
        $lokasi = $this->request->getVar('lokasi');
        $kecamatan = $this->request->getVar('kecamatan');
        $kabupaten = $this->request->getVar('kabupaten');
        $propinsi = $this->request->getVar('propinsi');
        $deskripsi = $this->request->getVar('deskripsi');
        $harga = $this->request->getVar('harga');
        $nolayanan = $this->request->getVar('nolayanan');
        $nosublayanan = $this->request->getVar('nosublayanan');

        $imageFile  = $this->request->getFiles();

        $imageFile1 = $imageFile['file1'];
        $imageName1 = '';
        if ($imageFile1->isValid()) {
            $imageName1 = $imageFile1->getName();
            $imageFile1->move(ROOTPATH . 'public/Image/iklan/ruko', $imageName1);
        }

        $imageFile2 = $imageFile['file2'];
        $imageName2 = '';
        if ($imageFile2->isValid()) {
            $imageName2 = $imageFile2->getName();
            $imageFile2->move(ROOTPATH . 'public/Image/iklan/ruko', $imageName2);
        }

        $imageFile3 = $imageFile['file3'];
        $imageName3 = '';
        if ($imageFile3->isValid()) {
            $imageName3 = $imageFile3->getName();
            $imageFile3->move(ROOTPATH . 'public/Image/iklan/ruko', $imageName3);
        }

        $imageFile4 = $imageFile['file4'];
        $imageName4 = '';
        if ($imageFile4->isValid()) {
            $imageName4 = $imageFile4->getName();
            $imageFile4->move(ROOTPATH . 'public/Image/iklan/ruko', $imageName4);
        }

        $imageFile5 = $imageFile['file5'];
        $imageName5 = '';
        if ($imageFile5->isValid()) {
            $imageName5 = $imageFile5->getName();
            $imageFile5->move(ROOTPATH . 'public/Image/iklan/ruko', $imageName5);
        }

        $imageFile6 = $imageFile['file6'];
        $imageName6 = '';
        if ($imageFile6->isValid()) {
            $imageName6 = $imageFile6->getName();
            $imageFile6->move(ROOTPATH . 'public/Image/iklan/ruko', $imageName6);
        }

        $data = ([
            'juduliklan'   => $juduliklan,
            'luastanah'    => $luastanah,
            'luasbangunan' => $luasbangunan,
            'kepemilikan'  => $kepemilikan,
            'jumlahlantai' => $jumlahlantai,
            'listrik'      => $listrik,
            'kamarmandi'   => $kamarmandi,
            'carport'      => $carport,
            'lokasi'       => $lokasi,
            'kecamatan'    => $kecamatan,
            'kabupaten'    => $kabupaten,
            'propinsi'     => $propinsi,
            'deskripsi'    => $deskripsi,
            'harga'        => $harga,
            'nolayanan'    => $nolayanan,
            'nosublayanan' => $nosublayanan,
            'image_1'       => $imageName1,
            'image_2'       => $imageName2,
            'image_3'       => $imageName3,
            'image_4'       => $imageName4,
            'image_5'       => $imageName5,
            'image_6'       => $imageName6,
            'idpengiklan'   => $this->session->get('id'),
            'path_folder'   => 'ruko',
        ]);

        $id_iklan = $this->iklan->saveRuko($data);

        $description = "Luas Tanah : " . $luastanah . " " . 'Luas Bangunan :' . " " . $luasbangunan . " " . 'Kepemilikan :' . " " . $kepemilikan . " " . 'Jumlah Lantai :' . " " . $jumlahlantai . " " . 'Deskripsi :' . " " . $deskripsi . "";

        $this->sendNotifWA();

        return $this->saveRekomendasiIklan('ruko', $id_iklan, $juduliklan, $description, $lokasi, $imageName1, 'tbl_ruko');
    }

    public function saveBangunanKomersial()
    {
        $juduliklan = $this->request->getVar('juduliklan');
        $luastanah = $this->request->getVar('luastanah');
        $luasbangunan = $this->request->getVar('luasbangunan');
        $kepemilikan = $this->request->getVar('kepemilikan');
        $jumlahlantai = $this->request->getVar('jumlahlantai');
        $listrik = $this->request->getVar('listrik');
        // $kamarmandi = $this->request->getVar('kamarmandi');
        $carport = $this->request->getVar('carport');
        $lokasi = $this->request->getVar('lokasi');
        $kecamatan = $this->request->getVar('kecamatan');
        $kabupaten = $this->request->getVar('kabupaten');
        $propinsi = $this->request->getVar('propinsi');
        $deskripsi = $this->request->getVar('deskripsi');
        $harga = $this->request->getVar('harga');
        $nolayanan = $this->request->getVar('nolayanan');
        $nosublayanan = $this->request->getVar('nosublayanan');

        $imageFile  = $this->request->getFiles();

        $imageFile1 = $imageFile['file1'];
        $imageName1 = '';
        if ($imageFile1->isValid()) {
            $imageName1 = $imageFile1->getName();
            $imageFile1->move(ROOTPATH . 'public/Image/iklan/bangunan_komersial', $imageName1);
        }

        $imageFile2 = $imageFile['file2'];
        $imageName2 = '';
        if ($imageFile2->isValid()) {
            $imageName2 = $imageFile2->getName();
            $imageFile2->move(ROOTPATH . 'public/Image/iklan/bangunan_komersial', $imageName2);
        }

        $imageFile3 = $imageFile['file3'];
        $imageName3 = '';
        if ($imageFile3->isValid()) {
            $imageName3 = $imageFile3->getName();
            $imageFile3->move(ROOTPATH . 'public/Image/iklan/bangunan_komersial', $imageName3);
        }

        $imageFile4 = $imageFile['file4'];
        $imageName4 = '';
        if ($imageFile4->isValid()) {
            $imageName4 = $imageFile4->getName();
            $imageFile4->move(ROOTPATH . 'public/Image/iklan/bangunan_komersial', $imageName4);
        }

        $imageFile5 = $imageFile['file5'];
        $imageName5 = '';
        if ($imageFile5->isValid()) {
            $imageName5 = $imageFile5->getName();
            $imageFile5->move(ROOTPATH . 'public/Image/iklan/bangunan_komersial', $imageName5);
        }

        $imageFile6 = $imageFile['file6'];
        $imageName6 = '';
        if ($imageFile6->isValid()) {
            $imageName6 = $imageFile6->getName();
            $imageFile6->move(ROOTPATH . 'public/Image/iklan/bangunan_komersial', $imageName6);
        }

        $data = ([
            'juduliklan' => $juduliklan,
            'luastanah' => $luastanah,
            'luasbangunan' => $luasbangunan,
            'kepemilikan' => $kepemilikan,
            'jumlahlantai' => $jumlahlantai,
            'listrik' => $listrik,
            // 'kamarmandi' => $kamarmandi,
            'carport' => $carport,
            'lokasi' => $lokasi,
            'kecamatan' => $kecamatan,
            'kabupaten' => $kabupaten,
            'propinsi' => $propinsi,
            'deskripsi' => $deskripsi,
            'harga' => $harga,
            'nolayanan' => $nolayanan,
            'nosublayanan' => $nosublayanan,
            'harga' => $harga,
            'image_1'       => $imageName1,
            'image_2'       => $imageName2,
            'image_3'       => $imageName3,
            'image_4'       => $imageName4,
            'image_5'       => $imageName5,
            'image_6'       => $imageName6,
            'idpengiklan'   => $this->session->get('id'),
            'path_folder'     => 'bangunan_komersial',
        ]);


        $id_iklan = $this->iklan->saveBangunanKomersial($data);

        $description = "Luas Tanah : " . $luastanah . " " . 'Luas Bangunan :' . " " . $luasbangunan . " " . 'Kepemilikan :' . " " . $kepemilikan . " " . 'Jumlah Lantai :' . " " . $jumlahlantai . " " . 'Deskripsi :' . " " . $deskripsi . "";

        $this->sendNotifWA();

        return $this->saveRekomendasiIklan('bangunan_komersial', $id_iklan, $juduliklan, $description, $lokasi, $imageName1, 'tbl_bangunankomersial');
    }

    public function uploadImage($imageFile = [], $path = '')
    {
        $image = array();
        foreach ($imageFile['file'] as $value) {
            if ($value->isValid() && !$value->hasMoved()) {
                $newName = $value->getRandomName();
                $value->move(ROOTPATH . $path, $newName);
                array_push($image, $newName);
            }
        }

        return json_encode($image);
    }


    public function saveRekomendasiIklan($type_rekomendasi_iklan = '', $id_iklan = 0, $nama_iklan = '', $description = '', $alamat = '', $imageName = '', $table_iklan = '')
    {
        $user_id = $this->session->get('id');
        $data = ([
            'type_rekomendasi_iklan' => $type_rekomendasi_iklan,
            'id_iklan' => $id_iklan,
            'nama_iklan' => $nama_iklan,
            'description' => $description,
            'alamat' => $alamat,
            'image' => $imageName,
            'table_iklan' => $table_iklan,
            'user_id' => $user_id,
        ]);

        $rekomendasi_iklan = $this->iklan->saveRekomendasiIklan($data);

        return $rekomendasi_iklan;
    }

    public function detailIklan($id_rekomendasi_iklan = 0, $nama_iklan = '', $id_iklan = 0, $type_iklan = '', $table = '')
    {
        $result['component_iklan'] = '';

        if ($type_iklan == 'tenaga_ahli') {
            $result['component_iklan'] = 'iklan/detail/component/tenaga_ahli';
        } elseif ($type_iklan == 'mobil') {
            $result['component_iklan'] = 'iklan/detail/component/mobil';
        } elseif ($type_iklan == 'motor') {
            $result['component_iklan'] = 'iklan/detail/component/motor';
        } elseif ($type_iklan == 'kost&kontrakan') {
            $result['component_iklan'] = 'iklan/detail/component/kost_kontrakan';
        } elseif ($type_iklan == 'rumah') {
            $result['component_iklan'] = 'iklan/detail/component/rumah';
        } elseif ($type_iklan == 'tanah') {
            $result['component_iklan'] = 'iklan/detail/component/tanah';
        } elseif ($type_iklan == 'apartemen') {
            $result['component_iklan'] = 'iklan/detail/component/apartemen';
        } elseif ($type_iklan == 'ruko') {
            $result['component_iklan'] = 'iklan/detail/component/ruko';
        } elseif ($type_iklan == 'bangunan_komersial') {
            $result['component_iklan'] = 'iklan/detail/component/bangunan_komersial';
        } elseif ($type_iklan == 'tenaga_terampil') {
            $result['component_iklan'] = 'iklan/detail/component/tenaga_terampil';
        }



        return view('iklan/detail/index', $result);

        // var_dump($component_iklan);

        // $dataiklan = $this->modelalugada->detailIklan($id_iklan, $table, $primarykey);
        // // $dataiklan = $this->modelalugada->detailIklanTenagaTerampil($id_iklan, $table, $primarykey);

        // $nohppengunjung = $this->session->get('nohppengunjung');
        // if ($nohppengunjung == null) {
        //     $nohppengunjung = 123;
        //     // $idpengunjung = $this->modelalugada->layananbynohp($nohppengunjung);
        //     // $idpengunjung = $idpengunjung['id']; 
        // }

        // $data = [
        //     'admin'         => $this->admin,
        //     'pengunjung'    => $this->modelalugada->userbynohp($nohppengunjung),
        //     'title'         => $nama_iklan,
        //     'layanan'       => $this->modelalugada->layanan(),
        //     'sublayanan'    => $this->modelalugada->sublayanan(),
        //     'detail_iklan'  => $this->iklan,
        //     'dataiklan'     => $dataiklan
        // ];

        // return view('iklan/detail/index', $data);
    }

    public function sendNotifWA()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.fonnte.com/send',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'target' => $this->noWAAdmin,
                'message' => "*Selamat Datang di Alugada*\r\n\r\n_Notification Baru 'Pasang Iklan'_\r\n_Agar segera di kroscek di halaman admin._\r\n\r\n_Link : https://dev-public.alugada.co.id/administrator-area_",
                'url' => 'https://md.fonnte.com/images/wa-logo.png',
                'filename' => 'filename',
                'schedule' => '0',
                'delay' => '2',
                'countryCode' => '62',
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: 2D3-nhz3YnAucN2D_Z4E'
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
    }

    public function detailIklanLayanan($layanan = 0, $id_layanan = '')
    {
        $result['data_sub_layanan'] = $this->iklan->getDataIklanSubLayanan($id_layanan);

        return view('iklan/detail-iklan-layanan/index', $result);
    }
}
