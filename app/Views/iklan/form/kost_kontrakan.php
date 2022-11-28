<form method="post" enctype="multipart/form-data">
    <div class="row">
        <h2 class="margin-top-3 margin-bottom-min3"> <i class=" fa fa-edit"></i> Informasi Data <br />
            <span class="font-size-10 position-relative bottom-16 left-30"> Kost & Kontrakan </span>
        </h2>

        <?= $this->include("iklan/form/upload_img"); ?>

        <div class="row">
            <div class="margin-bottom-12 margin-right-25">
                <label for="" class="font-size-14">Judul Iklan</label>
                <input type="text" name="judul_iklan" class="form-control width-input margin-top-6" placeholder="">
            </div>
            <input type="hidden" name="nolayanan" value="<?= $no_layanan; ?>">
            <input type="hidden" name="nosublayanan" value="<?= $no_sublayanan; ?>">
            <div class="margin-bottom-12 margin-right-25">
                <label for="" class="font-size-14">Jumlah Kamar/Kontrakan</label>
                <input type="number" name="jumlah_kamar" class="form-control width-input margin-top-6" placeholder="">
            </div>
            <div class="margin-bottom-12 margin-right-25">
                <label for="" class="font-size-14">Kamar Kosong</label>
                <input type="number" name="kamar_kosong" class="form-control width-input margin-top-6" placeholder="">
            </div>
            <div class="margin-bottom-12">
                <label for="" class="font-size-14">Listrik</label>
                <select name="listrik" class="form-control width-select margin-top-6">
                    <option></option>
                    <option>Token tiap kamar/kontrakan</option>
                    <option>Gabung rumah induk</option>
                </select>
            </div>
            <div class="margin-bottom-12">
                <label for="" class="font-size-14">Kamar Mandi</label>
                <select name="kamar_mandi" class="form-control width-select margin-top-6">
                    <option selected></option>
                    <option>Diluar / bersama</option>
                    <option>Kamar mandi dalam</option>
                </select>
            </div>
            <div class="margin-bottom-12">
                <label for="" class="font-size-14">AC</label>
                <select name="ac" class="form-control width-select margin-top-6">
                    <option selected></option>
                    <option>Tidak ada</option>
                    <option>Ada</option>
                </select>
            </div>
            <div class="margin-bottom-12">
                <label for="" class="font-size-14">Water Heater</label>
                <select name="water_heater" class="form-control width-select margin-top-6">
                    <option selected></option>
                    <option>Tidak ada</option>
                    <option>Ada</option>
                </select>
            </div>
            <div class="margin-bottom-12">
                <label for="" class="font-size-14">Tempat Tidur</label>
                <select name="tempat_tidur" class="form-control width-select margin-top-6">
                    <option selected></option>
                    <option>Tidak ada</option>
                    <option>Ada</option>
                </select>
            </div>
            <div class="margin-bottom-12">
                <label for="" class="font-size-14">Meja Kursi</label>
                <select name="meja_kursi" class="form-control width-select margin-top-6">
                    <option selected></option>
                    <option>Tidak ada</option>
                    <option>Ada</option>
                </select>
            </div>
            <div class="margin-bottom-12">
                <label for="almari" class="font-size-14">Lemari</label>
                <select name="almari" class="form-control width-select margin-top-6">
                    <option selected></option>
                    <option>Tidak ada</option>
                    <option>Ada</option>
                </select>
            </div>

            <div class="margin-bottom-12 margin-right-25">
                <label for="" class="font-size-14">Alamat Lokasi</label>
                <input type="text" name="alamat_lokasi" class="form-control width-input margin-top-6">
            </div>
            <div class="margin-bottom-12 margin-right-25">
                <label for="" class="font-size-14">Kecamatan</label>
                <input type="text" name="kecamatan" class="form-control width-input margin-top-6">
            </div>
            <div class="margin-bottom-12 margin-right-25">
                <label for="" class="font-size-14">Kabupaten</label>
                <input type="text" name="kabupaten" class="form-control width-input margin-top-6">
            </div>
            <div class="margin-bottom-12 margin-right-25">
                <label for="" class="font-size-14">Provinsi</label>
                <input type="text" name="provinsi" class="form-control width-input margin-top-6">
            </div>

            <div class="margin-bottom-12 margin-right-25">
                <label for="" class="font-size-14">Harga</label>
                <input type="number" name="harga" class="form-control width-input margin-top-6">
            </div>

            <div class="margin-bottom-12">
                <label for="" class="font-size-14">Jenis Sewa</label>
                <select name="perbulan" class="form-control">
                    <option selected></option>
                    <option>Per Bulan</option>
                    <option>Per Tahun</option>
                </select>
            </div>

            <div class="margin-bottom-12 margin-top-20">
                <button class="btn btn-primary width-100-percent textcolor-white"> Simpan </button>
            </div>

        </div>
</form>

<?= $this->include("script/iklan/iklan_upload_img"); ?>

<?= $this->include("script/iklan/iklan_kostkontrakan") ?>