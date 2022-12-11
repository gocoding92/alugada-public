<form method="post" enctype="multipart/form-data">
    <div class="row">
        <h2 class="margin-top-3 margin-bottom-min3"> <i class=" fa fa-edit"></i> Informasi Data <br />
            <span class="font-size-10 position-relative bottom-16 left-30"> Motor </span>
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
        <input type="hidden" name="nolayanan" value="<?= $no_layanan; ?>">
        <input type="hidden" name="nosublayanan" value="<?= $no_sub_layanan; ?>">

        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Judul Iklan</label>
            <input type="text" name="judul_iklan" value="<?= $data_iklan['judul_iklan'];  ?>" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Merk</label>
            <input type="text" name="merk" value="<?= $data_iklan['merk']; ?>" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Type</label>
            <input type="text" name="type" value="<?= $data_iklan['type'];  ?>" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Tahun</label>
            <input type="text" name="tahun" value="<?= $data_iklan['tahun'];  ?>" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Warna</label>
            <input type="text" name="warna" value="<?= $data_iklan['warna'];  ?>" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Plat</label>
            <input type="text" name="plat" value="<?= $data_iklan['plat'];  ?>" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Odometer(km)</label>
            <input type="text" name="odometer" value="<?= $data_iklan['odometer'];  ?>" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Bahan Bakar</label>
            <input type="text" name="bahan_bakar" value="<?= $data_iklan['bahan_bakar'];  ?>" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Lokasi</label>
            <input type="text" name="lokasi" value="<?= $data_iklan['lokasi'];  ?>" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Kecamatan</label>
            <input type="text" name="kecamatan" value="<?= $data_iklan['kecamatan'];  ?>" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Kabupaten</label>
            <input type="text" name="kabupaten" value="<?= $data_iklan['kabupaten'];  ?>" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Provinsi</label>
            <input type="text" name="provinsi" value="<?= $data_iklan['provinsi'];  ?>" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Deskripsi</label>
            <textarea name="deskripsi" class="form-control width-input"> <?= $data_iklan['deskripsi']; ?></textarea>
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Harga</label>
            <input type="harga" name="harga" value="<?= $data_iklan['harga'];  ?>" class="form-control width-input margin-top-6" placeholder="">
        </div>

        <div class="margin-bottom-12 margin-top-20">
            <button type="submit" id="submit" class="btn btn-primary width-100-percent textcolor-white"> Submit </button>
        </div>
</form>

<?= $this->include("script/iklan/iklan_upload_img"); ?>

<?= $this->include("script/iklan/iklan_motor"); ?>