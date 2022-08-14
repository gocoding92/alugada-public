<form action="<?= base_url('iklan/saveTenagaAhli'); ?>" method="post">

    <div class="row">
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Bidang Profesi</label>
            <select name="bidang_profesi" class="form-control">
                <option selected>-- Pilih Bidang Profesi--</option>
                <option>Engineering</option>
                <option>Production</option>
                <option>Project</option>
                <option>Marketing</option>
                <option>Adm - Finance</option>
                <option>Medical</option>

            </select>
        </div>

        <!-- <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="idpengiklan" class="font-size-15">Id Pengiklan (Id User)</label>
            <input type="text" name="idpengiklan" class="form-control margin-top-6" value="<?= $pengunjung['id']; ?>">
        </div> -->
        <!-- <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="nolayanan" class="font-size-15">No Layanan</label>
        <input type="text" name="nolayanan" class="form-control margin-top-6" value="<?php //echo $layanan['nolayanan'];
                                                                                        ?>">
    </div> -->
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="form-control margin-top-6" placeholder="Tulis nama anda">
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Pendidikan</label>
            <select name="pendidikan" class="form-control">
                <option selected>-- Silahkan pilih --</option>
                <option>S1</option>
                <option>S2</option>
                <option>S3</option>
            </select>
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Jurusan</label>
            <input type="text" name="jurusan" class="form-control margin-top-6" placeholder="Akuntansi/Psikologi/Teknik Mesin/Informatika/Hukum/Dll">
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Pengalaman Kerja</label>
            <!-- <input type="text" name="pengalaman_kerja" class="form-control margin-top-6" placeholder=""> -->
            <select name="pengalaman_kerja" class="form-control">
                <option selected>-- Silahkan pilih --</option>
                <option>< 1 Tahun</option>
                <option>1 - 3 Tahun</option>
                <option>3 - 5 Tahun</option>
                <option>5 - 7 Tahun</option>
                <option>7 Tahun</option>
            </select>
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Domisili</label>
            <input type="text" name="domisili" class="form-control margin-top-6" placeholder="Kelurahan / Kecamatan">
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="" class="font-size-15">Kecamatan</label>
        <input type="text" name="kecamatan" class="form-control margin-top-6" placeholder="">
    </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Kabupaten</label>
            <input type="text" name="kabupaten" class="form-control margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Provinsi</label>
            <input type="text" name="provinsi" class="form-control margin-top-6" placeholder="">
        </div>

        <!-- <?= $this->include('layout/6gambar'); ?> -->

        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" placeholder="S1 Ekonomi, brevet A/B/C, English Fluently, Menguasai microsoft office"></textarea>
        </div>
        <!-- <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="" class="font-size-15">Curiculum Vitae</label>
        <input type="file" name="curiculum_vitae" class="form-control">
    </div> -->
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Gaji yang diharapkan (Rp / Bulan)</label>
            <input type="number" name="gaji" class="form-control margin-top-6">
        </div>
        <div class="margin-bottom-12 padding-right-20 padding-left-16 margin-top-20">
            <button type="submit" class="btn btn-primary width-100-percent textcolor-white"> Simpan </button>
        </div>

    </div>
</form>