<form action="<?= base_url('iklan/saveTanah'); ?>" method="post">
    <div class="row">
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Judul Iklan</label>
            <input type="text" name="juduliklan" class="form-control margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Luas</label>
            <input type="number" name="luastanah" class="form-control margin-top-6" placeholder="">
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
            <label for="" class="font-size-15">Akses Mobil</label>
            <select name="aksesmobil" id="" class="form-control margin-top-6">
                <option disabled>-- Silahkan dipilih --</option>
                <option>Tidak Masuk Mobil</option>
                <option>Masuk Mobil</option>
            </select>
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