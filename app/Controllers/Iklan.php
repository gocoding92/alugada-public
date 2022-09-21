<?php

namespace App\Controllers;

use App\Models\ModelAlugada;
use LengthException;

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
            // $idpengunjung = $idpengunjung['id']; 
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

        // validasi required image belum
        $imageFile = $this->request->getFiles();
        $imageName = $this->uploadImage($imageFile, 'public/Image/iklan/mobil');

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
            'image' => $imageName,
        ]);
        $id_iklan = $this->modelalugada->saveMobil($data);
        $description = $merk . ' ' . $type . ' ' . $tahun . '' . $warna . '' . $plat . ' ' . $odometer . '' . $bahan_bakar . '' . $deskripsi;
        $alamat = $lokasi . ' ' . $kecamatan . ' ' . $kabupaten . ' ' . $provinsi;

        $this->saveRekomendasiIklan('mobil', $id_iklan, $judul_iklan, $description, $alamat, $imageName, 'tbl_mobil');
        return redirect()->to('/pasang-iklan?success_iklan=1');
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

        // validasi required image belum
        $imageFile = $this->request->getFiles();
        $imageName = $this->uploadImage($imageFile, 'public/Image/iklan/motor');

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
            'image'  => $imageName,

        ]);
        $id_iklan = $this->modelalugada->saveMotor($data);
        $description = $merk . ' ' . $type . ' ' . $tahun . '' . $warna . '' . $plat . ' ' . $odometer . '' . $bahan_bakar . '' . $deskripsi;
        $alamat = $lokasi . ' ' . $kecamatan . ' ' . $kabupaten . ' ' . $provinsi;

        $this->saveRekomendasiIklan('motor', $id_iklan, $judul_iklan, $description, $alamat, $imageName, 'tbl_motor');
        return redirect()->to('/pasang-iklan?success_iklan=1');
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

        // validasi required image belum
        $imageFile = $this->request->getFiles();
        $imageName = $this->uploadImage($imageFile, 'public/Image/iklan/kost_kontrakan');

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
            'image'        => $imageName,
        ]);

        $id_iklan = $this->modelalugada->saveKost($data);
        $description = $jumlah_kamar . ' ' . $kamar_kosong . ' ' . $listrik . ' ' . $kamar_mandi . ' ' . $ac . '' . $water_heater . '' . $tempat_tidur . '' . $meja_kursi . '' . $almari;
        $alamat = $alamat_lokasi . ' ' . $kecamatan . ' ' . $kabupaten . ' ' . $provinsi;

        $this->saveRekomendasiIklan('kost&kontrakan', $id_iklan, $judul_iklan, $description, $alamat, $imageName, 'tbl_kostkontrakan');
        return redirect()->to('/pasang-iklan?success_iklan=1');
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

        // validasi required image belum
        $imageFile = $this->request->getFiles();
        $imageName = $this->uploadImage($imageFile, 'public/Image/iklan/tenaga_ahli');

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
            'image'            => $imageName,
            'nolayanan'        => $nolayanan,
            'nosublayanan'     => $nosublayanan,
            'idpengiklan'     => 1,
        ]);

        $id_iklan = $this->modelalugada->saveTenaga_Ahli($data);

        $description = $bidang_profesi . ' ' . $tanggal_lahir . ' ' . $pendidikan;
        $alamat = $domisili . ' ' . $kecamatan . ' ' . $kabupaten . ' ' . $provinsi;

        $this->saveRekomendasiIklan('tenaga_ahli', $id_iklan, $nama_lengkap, $description, $alamat, $imageName, 'tbl_tenagaahli');

        return redirect()->to('/pasang-iklan?success_iklan=1');
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

        // validasi required image belum
        $imageFile = $this->request->getFiles();
        $imageName = $this->uploadImage($imageFile, 'public/Image/iklan/tenaga_terampil');

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
            'image'            => $imageName,
        ]);

        $id_iklan = $this->modelalugada->saveTenaga_Terampil($data);

        $description = $profesi . ' ' . $tempat_lahir . ' ' . $pendidikan . ' ' . $pengalaman_kerja;
        $alamat = $domisili . ' ' . $kecamatan . ' ' . $kabupaten . ' ' . $provinsi;

        $this->saveRekomendasiIklan('tenaga_terampil', $id_iklan, $nama_lengkap, $description, $alamat, $imageName, 'tbl_tenagaterampil');

        return redirect()->to('/pasang-iklan?success_iklan=1');
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

        // validasi required image belum
        $imageFile = $this->request->getFiles();
        $imageName = $this->uploadImage($imageFile, 'public/Image/iklan/property');

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
            'image'         => $imageName,
        ]);
        $id_iklan = $this->modelalugada->save_Rumah($data);

        $description = $luastanah . ' ' . $luasbangunan . ' ' . $kepemilikan . ' ' . $jumlahlantai . ' ' . $listrik . ' ' . $ruangtamu . ' ' . $ruangkeluarga . ' ' . $kamartidur . ' ' .
            $kamarpembantu . ' ' . $kamarmandi . ' ' . $teras . ' ' . $taman . ' ' . $aksesmobil . ' ' . $garasi . ' ' . $carport . ' ' . $deskripsi;
        $alamat = $lokasi . ' ' . $kecamatan . ' ' . $kabupaten . ' ' . $propinsi;

        $this->saveRekomendasiIklan('rumah', $id_iklan, $juduliklan, $description, $alamat, $imageName, 'tbl_rumah');

        return redirect()->to('/pasang-iklan?success_iklan=1');
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

        // validasi required image belum
        $imageFile = $this->request->getFiles();
        $imageName = $this->uploadImage($imageFile, 'public/Image/iklan/property');

        $data = ([
            'juduliklan' => $juduliklan,
            'luastanah' => $luastanah,
            'kepemilikan' => $kepemilikan,
            'aksesmobil' => $aksesmobil,
            'lokasi' => $lokasi,
            'kecamatan' => $kecamatan,
            'kabupaten' => $kabupaten,
            'propinsi' => $propinsi,
            'deskripsi' => $deskripsi,
            'harga' => $harga,
            'nolayanan' => $nolayanan,
            'nosublayanan' => $nosublayanan,
            'image'  => $imageName,
        ]);

        $id_iklan = $this->modelalugada->save_Tanah($data);

        $description = $luastanah . ' ' . $kepemilikan . ' ' . $aksesmobil;
        $alamat = $lokasi . ' ' . $kecamatan . ' ' . $kabupaten . ' ' . $propinsi;

        $this->saveRekomendasiIklan('tanah', $id_iklan, $juduliklan, $description, $alamat, $imageName, 'tbl_tanah');
        return redirect()->to('/pasang-iklan?success_iklan=1');
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

        // validasi required image belum
        $imageFile = $this->request->getFiles();
        $imageName = $this->uploadImage($imageFile, 'public/Image/iklan/property');

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
            'image' => $imageName,
        ]);

        $id_iklan = $this->modelalugada->save_Apartemen($data);
        $description = $luas . ' ' . $kepemilikan . '' . $bedroom . ' ' . $kamarmandi . ' ' . $listrik . '' . $deskripsi;
        $alamat = $alamatlokasi . ' ' . $kecamatan . ' ' . $kabupaten . ' ' . $propinsi;

        $this->saveRekomendasiIklan('apartemen', $id_iklan, $juduliklan, $description, $alamat, $imageName, 'tbl_apartemen');
        return redirect()->to('/pasang-iklan?success_iklan=1');
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

        // validasi required image belum
        $imageFile = $this->request->getFiles();
        $imageName = $this->uploadImage($imageFile, 'public/Image/iklan/property');

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
            'image'        => $imageName,
        ]);

        $id_iklan = $this->modelalugada->save_Ruko($data);
        $description = $luastanah . ' ' . $luasbangunan . ' ' . $kepemilikan . '' . $jumlahlantai . '' . $listrik . '' . $kamarmandi . ' ' . $carport . '' . $deskripsi;
        $alamat = $lokasi . ' ' . $kecamatan . ' ' . $kabupaten . ' ' . $propinsi;

        $this->saveRekomendasiIklan('ruko', $id_iklan, $juduliklan, $description, $alamat, $imageName, 'tbl_ruko');
        return redirect()->to('/pasang-iklan?success_iklan=1');
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

        // validasi required image belum
        $imageFile = $this->request->getFiles();
        $imageName = $this->uploadImage($imageFile, 'public/Image/iklan/property');

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
            'image' => $imageName,
        ]);

        $id_iklan = $this->modelalugada->save_BangunanKomersial($data);
        $description = $luastanah . ' ' . $luasbangunan . ' ' . $kepemilikan . '' . $jumlahlantai . '' . $listrik . ' ' . $carport . '' . $deskripsi;
        $alamat = $lokasi . ' ' . $kecamatan . ' ' . $kabupaten . ' ' . $propinsi;

        $this->saveRekomendasiIklan('bangunan_komersial', $id_iklan, $juduliklan, $description, $alamat, $imageName, 'tbl_bangunankomersial');
        return redirect()->to('/pasang-iklan?success_iklan=1');
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
        $data = ([
            'type_rekomendasi_iklan' => $type_rekomendasi_iklan,
            'id_iklan' => $id_iklan,
            'nama_iklan' => $nama_iklan,
            'description' => $description,
            'alamat' => $alamat,
            'image' => $imageName,
            'table_iklan' => $table_iklan,
        ]);

        $this->modelalugada->saveRekomendasiIklan($data);
    }

    public function detailIklan($nama_iklan = '', $id_master = 0, $id_iklan = 0, $layanan = '')
    {
        $this->iklan = '';
        $table = '';
        $primarykey = '';

        if ($layanan) {
            if ($layanan == 'tenaga_ahli') {
                $this->iklan = 'iklan/detail/component/tenaga_ahli';
                $table = 'tbl_tenagaahli';
                $primarykey = 'id';
            }
            if ($layanan == 'tenaga_terampil') {
                $this->iklan = 'iklan/detail/component/tenaga_terampil';
                $table = 'tbl_tenagaterampil';
                $primarykey = 'id';
            }
            if ($layanan == 'kost&kontrakan') {
                $this->iklan = 'iklan/detail/component/kost_kontrakan';
                $table = 'tbl_kostkontrakan';
                $primarykey = 'id';
            }
            if ($layanan == 'mobil') {
                $this->iklan = 'iklan/detail/component/mobil';
                $table = 'tbl_mobil';
                $primarykey = 'id';
            }
            if ($layanan == 'motor') {
                $this->iklan = 'iklan/detail/component/motor';
                $table = 'tbl_motor';
                $primarykey = 'id';
            }
            if ($layanan == 'rumah') {
                $this->iklan = 'iklan/detail/component/rumah';
                $table = 'tbl_rumah';
                $primarykey = 'id';
            }
            if ($layanan == 'tanah') {
                $this->iklan = 'iklan/detail/component/tanah';
                $table = 'tbl_tanah';
                $primarykey = 'id';
            }
            if ($layanan == 'apartemen') {
                $this->iklan = 'iklan/detail/component/apartemen';
                $table = 'tbl_apartemen';
                $primarykey = 'id';
            }
            if ($layanan == 'ruko') {
                $this->iklan = 'iklan/detail/component/ruko';
                $table = 'tbL_ruko';
                $primarykey = 'id';
            }
            if ($layanan == 'bangunan_komersial') {
                $this->iklan = 'iklan/detail/component/bangunan_komersial';
                $table = 'tbl_bangunankomersial';
                $primarykey = 'id';
            }
        }

        $dataiklan = $this->modelalugada->detailIklan($id_iklan, $table, $primarykey);
        // $dataiklan = $this->modelalugada->detailIklanTenagaTerampil($id_iklan, $table, $primarykey);

        $nohppengunjung = $this->session->get('nohppengunjung');
        if ($nohppengunjung == null) {
            $nohppengunjung = 123;
            // $idpengunjung = $this->modelalugada->layananbynohp($nohppengunjung);
            // $idpengunjung = $idpengunjung['id']; 
        }

        $data = [
            'admin'         => $this->admin,
            'pengunjung'    => $this->modelalugada->userbynohp($nohppengunjung),
            'title'         => $nama_iklan,
            'layanan'       => $this->modelalugada->layanan(),
            'sublayanan'    => $this->modelalugada->sublayanan(),
            'detail_iklan'  => $this->iklan,
            'dataiklan'     => $dataiklan
        ];

        return view('iklan/detail/index', $data);
    }
}
