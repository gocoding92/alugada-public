<div class="row">
    <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="" class="font-size-15">Judul Iklan</label>
        <!-- <input type="text" name="judul_iklan" class="form-control margin-top-6" placeholder="Kost/Kontrakan Fasilitas lengkap, AC non AC, kamar mandi dalam"> -->
        <textarea name="judul_iklan" cols="55" rows="3" placeholder="Kost/Kontrakan Fasilitas lengkap, AC non AC, kamar mandi dalam, Tempat tidu, meja, kursi, almari"></textarea>
    </div>
    <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="" class="font-size-15">Jumlah Kamar/Kontrakan</label>
        <input type="number" name="jumlah_kamar" class="form-control margin-top-6" placeholder="">
    </div>
    <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="" class="font-size-15">Kamar Kosong</label>
        <input type="number" name="kamar_kosong" class="form-control margin-top-6" placeholder="">
    </div>
    <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="" class="font-size-15">Listrik</label>
        <select name="kamar_mandi" class="form-control">
            <!-- <option value="" selected>-- Silahkan Pilih --</option> -->
            <option value="">Token tiap kamar/kontrakan</option>
            <option value="">Gabung rumah induk</option>
        </select>
    </div>
    <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="" class="font-size-15">Kamar Mandi</label>
        <select name="kamar_mandi" class="form-control">
            <!-- <option value="" selected>-- Silahkan Pilih --</option> -->
            <option value="">Diluar / bersama</option>
            <option value="">Kamar mandi dalam</option>
        </select>
    </div>
    <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="" class="font-size-15">AC</label>
        <select name="ac" class="form-control">
            <!-- <option value="" selected>-- Silahkan Pilih --</option> -->
            <option value="">Tidak ada</option>
            <option value="">Ada</option>
        </select>
    </div>
    <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="" class="font-size-15">Water Heater</label>
        <select name="water_heater" class="form-control">
            <!-- <option value="" selected>-- Silahkan Pilih --</option> -->
            <option value="">Tidak ada</option>
            <option value="">Ada</option>
        </select>
    </div>
    <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="" class="font-size-15">Tempat Tidur</label>
        <select name="tempat_tidur" class="form-control">
            <!-- <option value="" selected>-- Silahkan Pilih --</option> -->
            <option value="">Tidak ada</option>
            <option value="">Ada</option>
        </select>
    </div>
    <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="" class="font-size-15">Meja-Kursi</label>
        <select name="Meja_kursi" class="form-control">
            <!-- <option value="" selected>-- Silahkan Pilih --</option> -->
            <option value="">Tidak ada</option>
            <option value="">Ada</option>
        </select>
    </div>
    <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="almari" class="font-size-15">Almari</label>
        <select name="almari" class="form-control">
            <!-- <option value="" selected>-- Silahkan Pilih --</option> -->
            <option value="">Tidak ada</option>
            <option value="">Ada</option>
        </select>
    </div>

    <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="" class="font-size-15">Alamat Lokasi</label>
        <input type="text" name="alamat_lokasi" class="form-control" placeholder="Kelurahan/kecamatan">
    </div>
    <!-- <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="" class="font-size-15">Kecamatan</label>
        <input type="text" name="kecamatan" class="form-control">
    </div> -->
    <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="" class="font-size-15">Kabupaten</label>
        <input type="text" name="kabupaten" class="form-control">
    </div>
    <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="" class="font-size-15">Propinsi</label>
        <input type="text" name="propinsi" class="form-control">
    </div>

    <?= $this->include('layout/6gambar');?>
    
    <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="" class="font-size-15">Harga</label>
        <input type="number" name="propinsi" class="form-control" placeholder="1000000">
        <select name="perbulan" class="form-control">
            <!-- <option value="" selected>-- Silahkan Pilih --</option> -->
            <option value="">Per Bulan</option>
            <option value="">Per Tahun</option>
        </select>
    </div>

    <div class="margin-bottom-12 padding-right-20 padding-left-16 margin-top-20">
        <button class="btn btn-primary width-100-percent textcolor-white"> Simpan </button>
    </div>

</div>