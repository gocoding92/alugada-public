<form method="post" enctype="multipart/form-data">
    <div class="row">
        <h2 class="margin-top-3 margin-bottom-min3"> <i class=" fa fa-edit"></i> Informasi Data <br />
            <span class="font-size-10 position-relative bottom-16 left-30"> Property - Rumah </span>
        </h2>

        <?= $this->include('iklan/css/styles'); ?>

        <div>
            <div class="fade">
                <?php if ($data_iklan['image_1']) : ?>
                    <div><img class="img-slider-detail" src="<?= base_url('Image/iklan') ?>/<?= $path_folder; ?>/<?= $data_iklan['image_1']; ?>" /></div>
                <?php endif; ?>
                <?php if ($data_iklan['image_2']) : ?>
                    <div><img class="img-slider-detail" src="<?= base_url('Image/iklan') ?>/<?= $path_folder; ?>/<?= $data_iklan['image_2']; ?>" /></div>
                <?php endif; ?>
                <?php if ($data_iklan['image_3']) : ?>
                    <div><img class="img-slider-detail" src="<?= base_url('Image/iklan') ?>/<?= $path_folder; ?>/<?= $data_iklan['image_3']; ?>" /></div>
                <?php endif; ?>
                <?php if ($data_iklan['image_4']) : ?>
                    <div><img class="img-slider-detail" src="<?= base_url('Image/iklan') ?>/<?= $path_folder; ?>/<?= $data_iklan['image_4']; ?>" /></div>
                <?php endif; ?>
                <?php if ($data_iklan['image_5']) : ?>
                    <div><img class="img-slider-detail" src="<?= base_url('Image/iklan') ?>/<?= $path_folder; ?>/<?= $data_iklan['image_5']; ?>" /></div>
                <?php endif; ?>
                <?php if ($data_iklan['image_6']) : ?>
                    <div><img class="img-slider-detail" src="<?= base_url('Image/iklan') ?>/<?= $path_folder; ?>/<?= $data_iklan['image_6']; ?>" /></div>
                <?php endif; ?>
            </div>
        </div>

        <?= $this->include("iklan/form/upload_img"); ?>

        <!-- // hidden type form -->
        <input type="hidden" name="id_rekomendasi_iklan" value="<?= $id_rekomendasi_iklan; ?>">
        <input type="hidden" name="id_iklan" value="<?= $id_iklan; ?>">
        <input type="hidden" name="id_iklan" value="<?= $no_layanan; ?>">
        <input type="hidden" name="no_sub_layanan" value="<?= $no_sub_layanan; ?>">

        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Judul Iklan</label>
            <input type="text" id="juduliklan" name="juduliklan" value="<?= $data_iklan['juduliklan']; ?>" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Luas Tanah</label>
            <input type="number" name="luastanah" value="<?= $data_iklan['luastanah']; ?>" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Luas Bangunan</label>
            <input type="number" name="luasbangunan" value="<?= $data_iklan['luasbangunan']; ?>" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Kepemilikan</label>
            <select name="kepemilikan" id="" class="form-control margin-top-6">
                <option></option>
                <option  <?= $data_iklan['kepemilikan'] == 'Sertifikat' ? 'selected': null;?>>Sertifikat</option>
                <option  <?= $data_iklan['kepemilikan'] == 'AJB' ? 'selected': null;?>>AJB</option>
                <option  <?= $data_iklan['kepemilikan'] == 'Girik' ? 'selected': null;?>>Girik</option>
                <option  <?= $data_iklan['kepemilikan'] == 'Lainnya' ? 'selected': null;?>>Lainnya</option>
            </select>
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Jumlah Lantai</label>
            <input type="number" name="jumlahlantai" value="<?= $data_iklan['jumlahlantai']; ?>" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Listrik</label>
            <input type="number" name="listrik"  value="<?= $data_iklan['listrik']; ?>" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Ruang Tamu</label>
            <select name="ruangtamu" id="" class="form-control margin-top-6">
                <option> </option>
                <option <?= $data_iklan['ruangtamu'] == 'Tidak Ada' ? 'selected': null;?>>Tidak Ada</option>
                <option <?= $data_iklan['ruangtamu'] == 'Ada' ? 'selected': null;?>>Ada</option>
            </select>
        </div>
        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Ruang Keluarga</label>
            <select name="ruangkeluarga" id="" class="form-control margin-top-6">
                <option> </option>
                <option <?= $data_iklan['ruangkeluarga'] == 'Tidak Ada' ? 'selected': null;?>>Tidak Ada</option>
                <option <?= $data_iklan['ruangkeluarga'] == 'Ada' ? 'selected': null;?>>Ada</option>
            </select>
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Kamar Tidur</label>
            <input type="number" name="kamartidur" value="<?= $data_iklan['kamartidur']; ?>" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Kamar Pembantu</label>
            <input type="number" name="kamarpembantu" value="<?= $data_iklan['kamarpembantu']; ?>" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Kamar Mandi</label>
            <input type="number" name="kamarmandi" value="<?= $data_iklan['kamarmandi']; ?>" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Teras</label>
            <select name="teras" id="" class="form-control margin-top-6">
                <option> </option>
                <option <?= $data_iklan['teras'] == 'Tidak Ada' ? 'selected': null;?>>Tidak Ada</option>
                <option <?= $data_iklan['teras'] == 'Ada' ? 'selected': null;?>>Ada</option>
            </select>
        </div>
        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Taman</label>
            <select name="taman" id="" class="form-control margin-top-6">
                <option> </option>
                <option <?= $data_iklan['taman'] == 'Tidak Ada' ? 'selected': null;?>>Tidak Ada</option>
                <option <?= $data_iklan['taman'] == 'Ada' ? 'selected': null;?>>Ada</option>
            </select>
        </div>
        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Akses Mobil</label>
            <select name="aksesmobil" id="" class="form-control margin-top-6">
                <option> </option>
                <option <?= $data_iklan['aksesmobil'] == 'Tidak Masuk Mobil' ? 'selected': null;?>>Tidak Masuk Mobil</option>
                <option <?= $data_iklan['aksesmobil'] == 'Masuk Mobil' ? 'selected': null;?>>Masuk Mobil</option>
            </select>
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Garasi</label>
            <input type="number" name="garasi" value="<?= $data_iklan['garasi']; ?>" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Carport</label>
            <input type="number" name="carport" value="<?= $data_iklan['carport']; ?>" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Alamat Lokasi</label>
            <textarea name="lokasi" class="form-control width-input margin-top-6"> <?= $data_iklan['lokasi']; ?></textarea>
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Kecamatan</label>
            <input type="text" name="kecamatan" value="<?= $data_iklan['kecamatan']; ?>" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Kabupaten</label>
            <input type="text" name="kabupaten" value="<?= $data_iklan['kabupaten']; ?>" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Provinsi</label>
            <input type="text" name="propinsi" value="<?= $data_iklan['propinsi']; ?>" class="form-control width-input margin-top-6" placeholder="">
        </div>

        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Deskripsi</label>
            <textarea name="deskripsi" class="form-control"><?= $data_iklan['deskripsi']; ?></textarea>
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Harga</label>
            <input type="number" name="harga" value="<?= $data_iklan['harga']; ?>" class="form-control width-input margin-top-6" placeholder="">
        </div>

        <div class="margin-bottom-12 margin-top-20">
            <button type="submit" id="submit" class="btn btn-primary width-100-percent textcolor-white"> Submit </button>
        </div>

    </div>
</form>

<?= $this->include("script/iklan/iklan_upload_img"); ?>

<?= $this->include("script/iklan/iklan_rumah"); ?>