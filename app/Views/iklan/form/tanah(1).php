<form method="post" enctype="multipart/form-data">
    <div class="row">
        <h2 class="margin-top-3 margin-bottom-min3"> <i class=" fa fa-edit"></i> Informasi Data <br />
            <span class="font-size-10 position-relative bottom-16 left-30"> Property - Tanah </span>
        </h2>

        <?= $this->include("iklan/form/upload_img"); ?>

        <input type="hidden" name="nolayanan" value="<?= $no_layanan; ?>">
        <input type="hidden" name="nosublayanan" value="<?= $no_sublayanan; ?>">
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Judul Iklan</label>
            <input type="text" id="juduliklan" name="juduliklan" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Luas</label>
            <input type="number" name="luastanah" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Kepemilikan</label>
            <select name="kepemilikan" id="" class="form-control margin-top-6">
                <option></option>
                <option>Sertifikat</option>
                <option>AJB</option>
                <option>Girik</option>
                <option>Lainnya</option>
            </select>
        </div>
        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Akses Mobil</label>
            <select name="aksesmobil" id="" class="form-control margin-top-6">
                <option></option>
                <option>Tidak Masuk Mobil</option>
                <option>Masuk Mobil</option>
            </select>
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Alamat Lokasi</label>
            <textarea name="lokasi" class="form-control margin-top-6"></textarea>
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
            <input type="text" name="propinsi" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Deskripsi</label>
            <textarea name="deskripsi" class="form-control"></textarea>
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Harga</label>
            <input type="number" name="harga" class="form-control width-input margin-top-6" placeholder="">
        </div>

        <div class="margin-bottom-12 margin-top-20">
            <button type="submit" id="submit" class="btn btn-primary width-100-percent textcolor-white"> Submit </button>
        </div>

    </div>
</form>

<?= $this->include("script/iklan/iklan_upload_img"); ?>

<?= $this->include("script/iklan/iklan_tanah"); ?>