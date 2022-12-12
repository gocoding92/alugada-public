<form method="post" enctype="multipart/form-data">
    <div class="row">
        <h2 class="margin-top-3 margin-bottom-min3"> <i class=" fa fa-edit"></i> Informasi Data <br />
            <span class="font-size-10 position-relative bottom-16 left-30"> Tenaga Terampil - Driver </span>
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

        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Profesi <span class="textcolor-red"> * </span></label>
            <select name="profesi" class="form-control width-select margin-top-6">
                <option> </option>
                <option <?= $data_iklan['profesi'] == 'Driver' ? 'selected' : null; ?>>Driver</option>
                <option <?= $data_iklan['profesi'] == 'Babysitter' ? 'selected' : null; ?>>Babysitter</option>
                <option <?= $data_iklan['profesi'] == 'Perawat Jompo/Lansia' ? 'selected' : null; ?>>Perawat Jompo/Lansia</option>
                <option <?= $data_iklan['profesi'] == 'Asisten Rumah Tangga' ? 'selected' : null; ?>>Asisten Rumah Tangga</option>
                <option <?= $data_iklan['profesi'] == 'Office Girl/Boy' ? 'selected' : null; ?>>Office Girl/Boy</option>
                <option <?= $data_iklan['profesi'] == 'Keamanan/Satpam' ? 'selected' : null; ?>>Keamanan/Satpam</option>
            </select>
        </div>

        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Nama Lengkap <span class="textcolor-red"> * </span></label>
            <input type="text" name="nama_lengkap" value="<?= $data_iklan['nama_lengkap']; ?>" class="form-control width-input margin-top-6">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Tanggal Lahir <span class="textcolor-red"> * </span></label>
            <input type="date" name="tempat_lahir" value="<?= $data_iklan['tempat_lahir']; ?>" class="form-control width-input margin-top-6">
        </div>
        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Pendidikan <span class="textcolor-red"> * </span></label>
            <select name="pendidikan" class="form-control width-select margin-top-6">
                <option selected> </option>
                <option <?= $data_iklan['pendidikan'] == 'SD' ? 'selected' : null; ?>>SD</option>
                <option <?= $data_iklan['pendidikan'] == 'SMP' ? 'selected' : null; ?>>SMP</option>
                <option <?= $data_iklan['pendidikan'] == 'SMA' ? 'selected' : null; ?>>SMA</option>
            </select>
        </div>
        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Pengalaman Kerja</label>
            <select name="pengalaman_kerja" class="form-control  width-select margin-top-6">
                <option selected> </option>
                <option <?= $data_iklan['pengalaman_kerja'] == '< 1 Tahun' ? 'selected' : null; ?>>
                    < 1 Tahun</option>
                <option <?= $data_iklan['pengalaman_kerja'] == '1 - 3 Tahun' ? 'selected' : null; ?>>1 - 3 Tahun</option>
                <option <?= $data_iklan['pengalaman_kerja'] == '3 - 5 Tahun' ? 'selected' : null; ?>>3 - 5 Tahun</option>
                <option <?= $data_iklan['pengalaman_kerja'] == '5 Tahun' ? 'selected' : null; ?>>5 Tahun</option>
            </select>
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Domisili</label>
            <input type="text" name="domisili" value=" <?= $data_iklan['domisili']; ?>" class="form-control width-input margin-top-6">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Kecamatan</label>
            <input type="text" name="kecamatan" value=" <?= $data_iklan['kecamatan']; ?>" class="form-control width-input margin-top-6">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Kabupaten</label>
            <input type="text" name="kabupaten" value=" <?= $data_iklan['kabupaten']; ?>" class="form-control width-input margin-top-6">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Provinsi</label>
            <input type="text" name="provinsi" value=" <?= $data_iklan['provinsi']; ?>" class="form-control width-input margin-top-6">
        </div>

        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Deskripsi</label>
            <textarea name="deskripsi" class="form-control width-input margin-top-6" placeholder="Babysitter berpengalaman, sabar, telaten, bisa bayi baru lahir atau batita"><?= $data_iklan['deskripsi']; ?></textarea>
        </div>

        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Gaji</label>
            <input type="number" name="gaji" value="<?= $data_iklan['gaji']; ?>" class="form-control width-input margin-top-6">
        </div>

        <div class="margin-bottom-12 margin-top-20">
            <button type="submit" id="submit" class="btn btn-primary width-100-percent textcolor-white"> Submit </button>
        </div>

    </div>
</form>

<?= $this->include("script/iklan/iklan_upload_img"); ?>

<?= $this->include("script/edit-iklan/iklan_tenaga_terampil"); ?>