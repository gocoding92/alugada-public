<div class="row">

    <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="" class="font-size-15">Profesi</label>
        <select name="pendidikan" class="form-control">
            <option value="" selected>-- Pilih Profesi--</option>
            <option value="">Driver</option>
            <option value="">Babysitter</option>
            <option value="">Perawat Jompo/Lansia</option>
            <option value="">Asisten Rumahtangga</option>
            <option value="">Office Girl/Boy</option>
            <option value="">Keamanan/Satpam</option>

        </select>
    </div>


    <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="idpengiklan" class="font-size-15">Id Pengiklan</label>
        <input readonly type="text" name="idpengiklan" class="form-control margin-top-6" value="<?= $pengunjung['id'];?>">
    </div>
    <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="" class="font-size-15">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" class="form-control margin-top-6" placeholder="Tulis nama anda">
    </div>
    <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="" class="font-size-15">Tempat Lahir</label>
        <input type="date" name="tempat_lahir" class="form-control margin-top-6" placeholder="">
    </div>
    <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="" class="font-size-15">Pendidikan</label>
        <select name="pendidikan" class="form-control">
            <option value="" selected>-- Silahkan pilih --</option>
            <option value="">SD</option>
            <option value="">SMP</option>
            <option value="">SMA</option>
        </select>
    </div>
    <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="" class="font-size-15">Pengalaman Kerja</label>
        <select name="pendidikan" class="form-control">
            <option value="" selected>-- Silahkan pilih --</option>
            <option value="">
                < 1 Tahun</option>
            <option value="">1 - 3 Tahun</option>
            <option value="">3 - 5 Tahun</option>
            <option value="">> 5 Tahun</option>
        </select>
    </div>
    <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="" class="font-size-15">Domisili</label>
        <input type="text" name="domisili" class="form-control margin-top-6" placeholder="Kelurahan/Kecamatan">
    </div>
    <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="" class="font-size-15">Kabupaten</label>
        <input type="text" name="kabupaten" class="form-control margin-top-6" placeholder="">
    </div>
    <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="" class="font-size-15">Propinsi</label>
        <input type="text" name="propinsi" class="form-control margin-top-6" placeholder="">
    </div>

    <?= $this->include('layout/6gambar');?>

    <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="" class="font-size-15">Deskripsi</label>
        <textarea name="deskripsi" class="form-control" placeholder="Babysitter berpengalaman, sabar, telaten, bisa bayi baru lahir atau batita"></textarea>
    </div>

    <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="" class="font-size-15">Gaji</label>
        <input type="number" name="Gaji" class="form-control margin-top-6" value="4000000">
    </div>

    <div class="margin-bottom-12 padding-right-20 padding-left-16 margin-top-20">
        <button class="btn btn-primary width-100-percent textcolor-white"> Simpan </button>
    </div>

</div>