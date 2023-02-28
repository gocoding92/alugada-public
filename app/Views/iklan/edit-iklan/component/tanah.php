<form method="post" enctype="multipart/form-data">
    <div class="row">
        <h2 class="margin-top-3 margin-bottom-min3"> <i class=" fa fa-edit"></i> Informasi Data <br />
            <span class="font-size-10 position-relative bottom-16 left-30"> Property - Tanah </span>
        </h2>

        <?= $this->include('iklan/css/styles'); ?>

        <?= $this->include("iklan/edit-iklan/component/upload_img_iklan"); ?>

        <!-- // hidden type form -->
        <input type="hidden" name="id_rekomendasi_iklan" value="<?= $id_rekomendasi_iklan; ?>">
        <input type="hidden" name="id_iklan" value="<?= $id_iklan; ?>">
        <input type="hidden" name="nolayanan" value="<?= $no_layanan; ?>">
        <input type="hidden" name="nosublayanan" value="<?= $no_sub_layanan; ?>">

        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Judul Iklan</label>
            <input type="text" id="juduliklan" name="juduliklan" value=" <?= $data_iklan['juduliklan'];  ?>" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Luas</label>
            <input type="number" name="luastanah" value=" <?= $data_iklan['luastanah']; ?>" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Kepemilikan</label>
            <select name="kepemilikan" id="" class="form-control margin-top-6">
                <option></option>
                <option <?= $data_iklan['kepemilikan'] == 'Sertifikat' ? 'selected' : null; ?>>Sertifikat</option>
                <option <?= $data_iklan['kepemilikan'] == 'AJB' ? 'selected' : null; ?>>AJB</option>
                <option <?= $data_iklan['kepemilikan'] == 'Girik' ? 'selected' : null; ?>>Girik</option>
                <option <?= $data_iklan['kepemilikan'] == 'Lainnya' ? 'selected' : null; ?>>Lainnya</option>
            </select>
        </div>
        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Akses Mobil</label>
            <select name="aksesmobil" id="" class="form-control margin-top-6">
                <option></option>
                <option <?= $data_iklan['aksesmobil'] == 'Tidak Masuk Mobil' ? 'selected' : null; ?>>Tidak Masuk Mobil</option>
                <option <?= $data_iklan['aksesmobil'] == 'Masuk Mobil' ? 'selected' : null; ?>>Masuk Mobil</option>
            </select>
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Alamat Lokasi</label>
            <textarea name="lokasi" class="form-control margin-top-6"><?= $data_iklan['lokasi']; ?></textarea>
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Kecamatan</label>
            <input type="text" name="kecamatan" value=" <?= $data_iklan['kecamatan']; ?>" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Kabupaten</label>
            <input type="text" name="kabupaten" value=" <?= $data_iklan['kabupaten']; ?>" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Provinsi</label>
            <input type="text" name="propinsi" value=" <?= $data_iklan['propinsi']; ?>" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Deskripsi</label>
            <textarea name="deskripsi" class="form-control"><?= $data_iklan['deskripsi']; ?></textarea>
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Harga</label>
            <input type="number" name="harga" value="<?= $data_iklan['harga'] ?>" class="form-control width-input margin-top-6" placeholder="">
        </div>

        <div class="margin-bottom-12 margin-top-20">
            <button type="submit" id="submit" class="btn btn-primary width-100-percent textcolor-white"> Submit </button>
        </div>

    </div>
</form>

<?= $this->include("script/edit-iklan/iklan_tanah"); ?>