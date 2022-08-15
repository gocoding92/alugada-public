<form action="<?= base_url('iklan/saveRumah'); ?>" method="post">
    <div class="row">
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Judul Iklan</label>
            <input type="text" name="juduliklan" class="form-control margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Luas Tanah</label>
            <input type="number" name="luastanah" class="form-control margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Luas Bangunan</label>
            <input type="number" name="luasbangunan" class="form-control margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Kepemilikan</label>
            <select name="kepemilikan" id="" class="form-control margin-top-6">
                <option disabled>-- Silahkan dipilih --</option>
                <option>Sertifikat</option>
                <option>AJB</option>
                <option>Girik</option>
                <option>Lainnya</option>
            </select>
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Jumlah Lantai</label>
            <input type="number" name="jumlahlantai" class="form-control margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Listrik</label>
            <input type="number" name="listrik" class="form-control margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Ruang Tamu</label>
            <select name="ruangtamu" id="" class="form-control margin-top-6">
                <option disabled>-- Silahkan Pilih --</option>
                <option>Tidak Ada</option>
                <option>Ada</option>
            </select>
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Ruang Keluarga</label>
            <select name="ruangkeluarga" id="" class="form-control margin-top-6">
                <option disabled>-- Silahkan Pilih --</option>
                <option>Tidak Ada</option>
                <option>Ada</option>
            </select>
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Kamar Tidur</label>
            <input type="number" name="kamartidur" class="form-control margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Kamar Pembantu</label>
            <input type="number" name="kamarpembantu" class="form-control margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Kamar Mandi</label>
            <input type="number" name="kamarmandi" class="form-control margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Teras</label>
            <select name="teras" id="" class="form-control margin-top-6">
                <option disabled>-- Silahkan Pilih --</option>
                <option>Tidak Ada</option>
                <option>Ada</option>
            </select>
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Taman</label>
            <select name="taman" id="" class="form-control margin-top-6">
                <option disabled>-- Silahkan Pilih --</option>
                <option>Tidak Ada</option>
                <option>Ada</option>
            </select>
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Akses Mobil</label>
            <select name="aksesmobil" id="" class="form-control margin-top-6">
                <option disabled>-- Silahkan Pilih --</option>
                <option>Tidak Masuk Mobil</option>
                <option>Masuk Mobil</option>
            </select>
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Garasi</label>
            <input type="number" name="garasi" class="form-control margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">carport</label>
            <input type="number" name="carport" class="form-control margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Alamat Lokasi</label>
            <textarea name="lokasi" class="form-control margin-top-6"></textarea>
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
            <input type="text" name="propinsi" class="form-control margin-top-6" placeholder="">
        </div>

        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Deskripsi</label>
            <textarea name="deskripsi" class="form-control"></textarea>
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Harga</label>
            <input type="number" name="harga" class="form-control margin-top-6" placeholder="">
        </div>

        <?php echo $this->include('layout/6gambar'); ?>

        <div class="margin-bottom-12 padding-right-20 padding-left-16 margin-top-20">
            <button type="submit" class="btn btn-primary width-100-percent textcolor-white"> Simpan </button>
        </div>

    </div>
</form>