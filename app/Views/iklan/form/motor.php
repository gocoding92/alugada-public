<form method="post" enctype="multipart/form-data">
    <div class="row">
        <h2 class="margin-top-3 margin-bottom-min3"> <i class=" fa fa-edit"></i> Informasi Data <br />
            <span class="font-size-10 position-relative bottom-16 left-30"> Motor </span>
        </h2>

        <?= $this->include("iklan/form/upload_img_iklan"); ?>

        <div class="row">
            <div class="margin-bottom-12 margin-right-25">
                <label for="" class="font-size-14">Judul Iklan</label>
                <input type="text" name="judul_iklan" class="form-control width-input margin-top-6" placeholder="">
            </div>
            <input type="hidden" name="nolayanan" value="<?= $no_layanan; ?>">
            <input type="hidden" name="nosublayanan" value="<?= $no_sublayanan; ?>">
            <div class="margin-bottom-12 margin-right-25">
                <label for="" class="font-size-14">Merk</label>
                <input type="text" name="merk" class="form-control width-input margin-top-6" placeholder="">
            </div>
            <div class="margin-bottom-12 margin-right-25">
                <label for="" class="font-size-14">Type</label>
                <input type="text" name="type" class="form-control width-input margin-top-6" placeholder="">
            </div>
            <div class="margin-bottom-12 margin-right-25">
                <label for="" class="font-size-14">Tahun</label>
                <input type="text" name="tahun" class="form-control width-input margin-top-6" placeholder="">
            </div>
            <div class="margin-bottom-12 margin-right-25">
                <label for="" class="font-size-14">Warna</label>
                <input type="text" name="warna" class="form-control width-input margin-top-6" placeholder="">
            </div>
            <div class="margin-bottom-12 margin-right-25">
                <label for="" class="font-size-14">Plat</label>
                <input type="text" name="plat" class="form-control width-input margin-top-6" placeholder="">
            </div>
            <div class="margin-bottom-12 margin-right-25">
                <label for="" class="font-size-14">Odometer(km)</label>
                <input type="text" name="odometer" class="form-control width-input margin-top-6" placeholder="">
            </div>
            <div class="margin-bottom-12 margin-right-25">
                <label for="" class="font-size-14">Bahan Bakar</label>
                <input type="text" name="bahan_bakar" class="form-control width-input margin-top-6" placeholder="">
            </div>
            <div class="margin-bottom-12 margin-right-25">
                <label for="" class="font-size-14">Lokasi</label>
                <input type="text" name="lokasi" class="form-control width-input margin-top-6" placeholder="">
            </div>
            <div class="margin-bottom-12 margin-right-25">
                <label for="" class="font-size-14">Kecamatan</label>
                <input type="text" name="kecamatan" class="form-control width-input margin-top-6" placeholder="">
            </div>
            <div class="margin-bottom-12 margin-right-25">
                <label for="" class="font-size-14">Kabupaten</label>
                <input type="text" name="kabupaten" class="form-control width-input margin-top-6" placeholder="">
            </div>
            <div class="margin-bottom-12 margin-right-25">
                <label for="" class="font-size-14">Provinsi</label>
                <input type="text" name="provinsi" class="form-control width-input margin-top-6" placeholder="">
            </div>
            <div class="margin-bottom-12 margin-right-25">
                <label for="" class="font-size-14">Deskripsi</label>
                <textarea name="deskripsi" class="form-control width-input"></textarea>
            </div>
            <div class="margin-bottom-12 margin-right-25">
                <label for="" class="font-size-14">Harga</label>
                <input type="harga" name="harga" class="form-control width-input margin-top-6" placeholder="">
            </div>

            <div class="margin-bottom-12 margin-top-20">
                <button type="submit" id="submit" class="btn btn-primary width-100-percent textcolor-white"> Submit </button>
            </div>
        </div>
</form>

<?= $this->include("script/iklan/iklan_motor"); ?>