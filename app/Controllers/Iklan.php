<?php

namespace App\Controllers;

use App\Models\ModelAlugada;

class Iklan extends BaseController
{

    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->modelalugada = new ModelAlugada();
        $this->session = \Config\Services::session();
        $this->admin = 0;   //Bukan Admin
    }
    public function index($param = '')
    {
        $nohppengunjung = $this->session->get('nohppengunjung');
        if ($nohppengunjung == null) {
            $nohppengunjung = 123;
            // $idpengunjung = $this->modelalugada->layananbynohp($nohppengunjung);
            // $idpengunjung = $idpengunjung['id']; 
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

    public function detail($layanan = '', $id_layanan = '', $sublayanan = '', $id_sublayanan = '')
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
            // $idpengunjung = $idpengunjung['id']; 
        }

        $data = [
            'admin'         => $this->admin,
            'pengunjung'    => $this->modelalugada->userbynohp($nohppengunjung),
            'title'         => "Layanan",
            'layanan'       => $this->modelalugada->layanan(),
            'sublayanan'    => $this->modelalugada->sublayanan(),
            'form'          => $this->form,
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
        // $gambar1     = $this->request->getVar('gambar1');
        // $gambar2     = $this->request->getVar('gambar2');
        // $gambar3     = $this->request->getVar('gambar3');
        // $gambar4     = $this->request->getVar('gambar4');
        // $gambar5     = $this->request->getVar('gambar5');
        // $gambar6     = $this->request->getVar('gambar6');
        $deskripsi   = $this->request->getVar('deskripsi');
        $harga       = $this->request->getVar('harga');


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
            // 'gambar1' => $gambar1,
            // 'gambar2' => $gambar2,
            // 'gambar3' => $gambar3,
            // 'gambar4' => $gambar4,
            // 'gambar5' => $gambar5,
            // 'gambar6' => $gambar6,
            'deskripsi' => $deskripsi,
            'harga' => $harga

        ]);
        $this->modelalugada->saveMobil($data);

        return redirect()->to('/pasang-iklan');
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
        // $gambar1     = $this->request->getVar('gambar1');
        // $gambar2     = $this->request->getVar('gambar2');
        // $gambar3     = $this->request->getVar('gambar3');
        // $gambar4     = $this->request->getVar('gambar4');
        // $gambar5     = $this->request->getVar('gambar5');
        // $gambar6     = $this->request->getVar('gambar6');
        $deskripsi   = $this->request->getVar('deskripsi');
        $harga       = $this->request->getVar('harga');

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
            // 'gambar1' => $gambar1,
            // 'gambar2' => $gambar2,
            // 'gambar3' => $gambar3,
            // 'gambar4' => $gambar4,
            // 'gambar5' => $gambar5,
            // 'gambar6' => $gambar6,
            'deskripsi' => $deskripsi,
            'harga' => $harga

        ]);
        $this->modelalugada->saveMotor($data);

        return redirect()->to('/pasang-iklan');
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
        $perbulan      = $this->request->getVar('perbulan');


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
            'alamat_lokasi'=> $alamat_lokasi,
            'kecamatan'    => $kecamatan,
            'kabupaten'    => $kabupaten,
            'provinsi'     => $provinsi,
            'harga'        => $harga,
            'perbulan'     => $perbulan,
        ]);

        $this->modelalugada->saveKost($data);

        return redirect()->to('/pasang-iklan');
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

        ]);

        $this->modelalugada->saveTenaga_Ahli($data);
        return redirect()->to('/pasang-iklan');
    }

    public function saveTenagaTerampil()
    {
        $profesi = $this->request->getVar('profesi');
        $nama_lengkap = $this->request->getVar('nama_lengkap');
        $tempat_lahir = $this->request->getVar('tempat_lahir');
        $pendidikan = $this->request->getVar('pendidikan');
        $pengalaman_kerja = $this->request->getVar('pengalaman_kerja');
        $domisili = $this->request->getVar('domisili');
        $kecamatan = $this->request->getVar('kecamatan');
        $kabupaten = $this->request->getVar('kabupaten');
        $provinsi = $this->request->getVar('provinsi');
        $deskripsi = $this->request->getVar('deskripsi');
        $gaji = $this->request->getVar('gaji');

        $data = ([
            'profesi' => $profesi,
            'nama_lengkap' => $nama_lengkap,
            'tempat_lahir' => $tempat_lahir,
            'pendidikan' => $pendidikan,
            'pengalaman_kerja' => $pengalaman_kerja,
            'domisili' => $domisili,
            'kecamatan' => $kecamatan,
            'kabupaten' => $kabupaten,
            'provinsi' => $provinsi,
            'deskripsi' => $deskripsi,
            'gaji' => $gaji,
        ]);

        $this->modelalugada->saveTenaga_Terampil($data);
        return redirect()->to('/pasang-iklan');
    }
}
