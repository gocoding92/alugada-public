<form method="post" enctype="multipart/form-data">
    <div class="row">
        <h2 class="margin-top-3 margin-bottom-min3"> <i class=" fa fa-edit"></i> Informasi Data <br />
            <span class="font-size-10 position-relative bottom-16 left-30"> Kost & Kontrakan </span>
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
            <input type="text" name="judul_iklan" value="<?= $data_iklan['judul_iklan']; ?>" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Jumlah Kamar/Kontrakan</label>
            <input type="number" name="jumlah_kamar" value="<?= $data_iklan['jumlah_kamar']; ?>" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Kamar Kosong</label>
            <input type="number" name="kamar_kosong" value="<?= $data_iklan['kamar_kosong'] ?>" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Listrik</label>
            <select name="listrik" class="form-control width-select margin-top-6">
                <option></option>
                <option <?= $data_iklan['listrik'] == 'Token tiap kamar/kontrakan' ? 'selected' : null; ?>>Token tiap kamar/kontrakan</option>
                <option <?= $data_iklan['listrik'] == 'Gabung rumah induk' ? 'selected' : null; ?>>Gabung rumah induk</option>
            </select>
        </div>
        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Kamar Mandi</label>
            <select name="kamar_mandi" class="form-control width-select margin-top-6">
                <option selected></option>
                <option <?= $data_iklan['kamar_mandi'] == 'Diluar / bersama' ? 'selected' : null; ?>>Diluar / bersama</option>
                <option <?= $data_iklan['kamar_mandi'] == 'Kamar mandi dalam' ? 'selected' : null; ?>>Kamar mandi dalam</option>
            </select>
        </div>
        <div class="margin-bottom-12">
            <label for="" class="font-size-14">AC</label>
            <select name="ac" class="form-control width-select margin-top-6">
                <option selected></option>
                <option <?= $data_iklan['ac'] == 'Tidak ada' ? 'selected' : null; ?>>Tidak ada</option>
                <option <?= $data_iklan['ac'] == 'Ada' ? 'selected' : null; ?>>Ada</option>
            </select>
        </div>
        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Water Heater</label>
            <select name="water_heater" class="form-control width-select margin-top-6">
                <option selected></option>
                <option <?= $data_iklan['water_heater'] == 'Tidak ada' ? 'selected' : null; ?>>Tidak ada</option>
                <option <?= $data_iklan['water_heater'] == 'Ada' ? 'selected' : null; ?>>Ada</option>
            </select>
        </div>
        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Tempat Tidur</label>
            <select name="tempat_tidur" class="form-control width-select margin-top-6">
                <option selected></option>
                <option <?= $data_iklan['tempat_tidur'] == 'Tidak ada' ? 'selected' : null; ?>>Tidak ada</option>
                <option <?= $data_iklan['tempat_tidur'] == 'Ada' ? 'selected' : null; ?>>Ada</option>
            </select>
        </div>
        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Meja Kursi</label>
            <select name="meja_kursi" class="form-control width-select margin-top-6">
                <option selected></option>
                <option <?= $data_iklan['meja_kursi'] == 'Tidak ada' ? 'selected' : null; ?>>Tidak ada</option>
                <option <?= $data_iklan['meja_kursi'] == 'Ada' ? 'selected' : null; ?>>Ada</option>
            </select>
        </div>
        <div class="margin-bottom-12">
            <label for="almari" class="font-size-14">Lemari</label>
            <select name="almari" class="form-control width-select margin-top-6">
                <option selected></option>
                <option <?= $data_iklan['almari'] == 'Tidak ada' ? 'selected' : null; ?>>Tidak ada</option>
                <option <?= $data_iklan['almari'] == 'Ada' ? 'selected' : null; ?>>Ada</option>
            </select>
        </div>

        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Alamat Lokasi</label>
            <input type="text" name="alamat_lokasi" class="form-control width-input margin-top-6">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Kecamatan</label>
            <input type="text" name="kecamatan" value="<?= $data_iklan['kecamatan']; ?>" class="form-control width-input margin-top-6">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Kabupaten</label>
            <input type="text" name="kabupaten" value="<?= $data_iklan['kabupaten']; ?>" class="form-control width-input margin-top-6">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Provinsi</label>
            <input type="text" name="provinsi" value="<?= $data_iklan['provinsi']; ?>" class="form-control width-input margin-top-6">
        </div>

        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Harga</label>
            <input type="number" name="harga" value="<?= $data_iklan['harga']; ?>" class="form-control width-input margin-top-6">
        </div>

        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Jenis Sewa</label>
            <select name="perbulan" class="form-control">
                <option selected></option>
                <option <?= $data_iklan['perbulan'] == 'Per Bulan' ? 'selected' : null; ?>>Per Bulan</option>
                <option <?= $data_iklan['perbulan'] == 'Per Tahun' ? 'selected' : null; ?>>Per Tahun</option>
                <option>Per Tahun</option>
            </select>
        </div>

        <div class="margin-bottom-12 margin-top-20">
            <button id="submit" type="submit" class="btn btn-primary width-100-percent textcolor-white"> Simpan </button>
        </div>
</form>

<?= $this->include("script/edit-iklan/iklan_kostkontrakan") ?>