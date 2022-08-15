<form action="<?= base_url('/iklan/save'); ?>" method="post">
    <div class="row">
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Judul Iklan</label>
            <input type="text" name="judul_iklan" class="form-control margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Merk</label>
            <input type="text" name="merk" class="form-control margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Type</label>
            <input type="text" name="type" class="form-control margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Tahun</label>
            <input type="text" name="tahun" class="form-control margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Warna</label>
            <input type="text" name="warna" class="form-control margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Plat</label>
            <input type="text" name="plat" class="form-control margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Odometer(km)</label>
            <input type="text" name="odometer" class="form-control margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Bahan Bakar</label>
            <input type="text" name="bahan_bakar" class="form-control margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">Lokasi</label>
            <input type="text" name="lokasi" class="form-control margin-top-6" placeholder="">
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