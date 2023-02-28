<!-- base_url('iklan/saveTenagaAhli') -->
<form method="post" enctype="multipart/form-data">
    <div class="row">
        <h2 class="margin-top-3 margin-bottom-min3"> <i class=" fa fa-edit"></i> Informasi Data <br />
            <span class="font-size-10 position-relative bottom-16 left-30"> Tenaga Ahli - Engineering </span>
        </h2>

        <?= $this->include('iklan/css/styles'); ?>

        <?= $this->include("iklan/edit-iklan/component/upload_img_iklan"); ?>

        <!-- // image string hidden -->
        <input type="hidden" name="image_1" value="<?= $data_iklan['image_1']; ?>">
        <input type="hidden" name="image_2" value="<?= $data_iklan['image_2']; ?>">
        <input type="hidden" name="image_3" value="<?= $data_iklan['image_3']; ?>">
        <input type="hidden" name="image_4" value="<?= $data_iklan['image_4']; ?>">
        <input type="hidden" name="image_5" value="<?= $data_iklan['image_5']; ?>">
        <input type="hidden" name="image_6" value="<?= $data_iklan['image_6']; ?>">

        <!-- // hidden type form -->
        <input type="hidden" name="id_rekomendasi_iklan" value="<?= $id_rekomendasi_iklan; ?>">
        <input type="hidden" name="id_iklan" value="<?= $id_iklan; ?>">
        <input type="hidden" name="nolayanan" value="<?= $no_layanan; ?>">
        <input type="hidden" name="nosublayanan" value="<?= $no_sub_layanan; ?>">

        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Bidang Profesi <span class="textcolor-red"> * </span></label>
            <select name="bidang_profesi" class="form-control width-select margin-top-6">
                <option></option>
                <option <?= $data_iklan['bidang_profesi'] == 'Engineering' ? 'selected' : null; ?>>Engineering</option>
                <option <?= $data_iklan['bidang_profesi'] == 'Production' ? 'selected' : null; ?>>Production</option>
                <option <?= $data_iklan['bidang_profesi'] == 'Project' ? 'selected' : null; ?>>Project</option>
                <option <?= $data_iklan['bidang_profesi'] == 'Marketing' ? 'selected' : null; ?>>Marketing</option>
                <option <?= $data_iklan['bidang_profesi'] == 'Adm - Finance' ? 'selected' : null; ?>>Adm - Finance</option>
                <option <?= $data_iklan['bidang_profesi'] == 'Medical' ? 'selected' : null; ?>>Medical</option>
            </select>
        </div>

        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Nama Lengkap <span class="textcolor-red"> * </span></label>
            <input type="text" name="nama_lengkap" value="<?= $data_iklan['nama_lengkap']; ?>" class="form-control width-input margin-top-6">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Tanggal Lahir <span class="textcolor-red"> * </span></label>
            <input type="date" value="<?= $data_iklan['tanggal_lahir']; ?>" name="tanggal_lahir" class="form-control width-input margin-top-6">
        </div>
        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Pendidikan <span class="textcolor-red"> * </span></label>
            <select name="pendidikan" class="form-control width-select margin-top-6">
                <option></option>
                <option <?= $data_iklan['pendidikan'] == 'S1' ? 'selected' : null; ?>>S1</option>
                <option <?= $data_iklan['pendidikan'] == 'S2' ? 'selected' : null; ?>>S2</option>
                <option <?= $data_iklan['pendidikan'] == 'S3' ? 'selected' : null; ?>>S3</option>
            </select>
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Jurusan</label>
            <input type="text" name="jurusan" value="<?= $data_iklan['jurusan']; ?>" class="form-control width-input margin-top-6">
        </div>
        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Pengalaman Kerja</label>
            <select name="pengalaman_kerja" class="form-control width-select width-select margin-top-6">
                <option></option>
                <option <?= $data_iklan['pengalaman_kerja'] == '< 1 Tahun' ? 'selected' : null; ?>>
                    < 1 Tahun</option>
                <option <?= $data_iklan['pengalaman_kerja'] == '1 - 3 Tahun' ? 'selected' : null; ?>>1 - 3 Tahun</option>
                <option <?= $data_iklan['pengalaman_kerja'] == '3 - 5 Tahun' ? 'selected' : null; ?>>3 - 5 Tahun</option>
                <option <?= $data_iklan['pengalaman_kerja'] == '5 - 7 Tahun' ? 'selected' : null; ?>>5 - 7 Tahun</option>
                <option <?= $data_iklan['pengalaman_kerja'] == '7 Tahun' ? 'selected' : null; ?>>7 Tahun</option>
            </select>
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Domisili</label>
            <input type="text" name="domisili" value="<?= $data_iklan['domisili']; ?>" class="form-control width-input margin-top-6">
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
            <input type="text" name="provinsi" value="<?= $data_iklan['provinsi']; ?>" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Deskripsi</label>
            <textarea name="deskripsi" class="form-control width-input margin-top-6" placeholder="S1 Ekonomi, brevet A/B/C, English Fluently, Menguasai microsoft office"><?= $data_iklan['deskripsi']; ?></textarea>
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Gaji yang diharapkan (Rp / Bulan)</label>
            <input type="number" name="gaji" value="<?= $data_iklan['gaji']; ?>" class="form-control width-input margin-top-6">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Curiculum Vitae</label>
            <input type="hidden" name="curiculum_vitae_edit" value="<?= $data_iklan['curiculum_vitae']; ?>">
            <input type="file" name="curiculum_vitae" class="form-control width-input margin-top-6">
        </div>
        <div class="margin-bottom-12 margin-top-20">
            <button type="submit" id="submit" class="btn btn-primary width-100-percent textcolor-white"> Submit </button>
        </div>

    </div>
</form>

<?= $this->include("script/edit-iklan/iklan_tenaga_ahli"); ?>