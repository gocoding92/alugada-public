<form action="<?= base_url('/iklan/saveKostkontrakan'); ?>" method="post" enctype="multipart/form-data">>

    <h2 class="margin-top-3 margin-bottom-min3"> <i class=" fa fa-edit"></i> Informasi Data <br />
        <span class="font-size-10 position-relative bottom-16 left-30"> Kost & Kontrakan </span>
    </h2>

    <!-- <div class="border3-solid-ced4da margin-bottom-6 border-radius-5">
        <legend class="font-size-10 textcolor-9a9a9a margin-top-4 margin-bottom-8">Select photos (Up to photos 6) Min 1 <span class="textcolor-red"> * </span></legend>
        <div class="display-flex width-auto overflow-auto">
            <div class="select-image margin-bottom-12">
                <label for="inputTag" class="cursor-pointer font-size-14">
                    <i class="fa fa-2x fa-camera"></i>
                    <input onchange="previewgambar()" id="inputTag" type="file" name="file[]" class="display-none" multiple required />
                    <br />
                    <span id="imageName"></span>
                </label>
            </div>
            <div class="gallery display-flex"></div>
        </div>
    </div> -->
   
    <div class="row">
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Judul Iklan</label>
            <p><?= $dataiklan['judul_iklan']; ?></p>
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Jumlah Kamar/Kontrakan</label>
            <p><?= $dataiklan['jumlah_kamar']; ?></p>

        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Kamar Kosong</label>
            <p><?= $dataiklan['kamar_kosong']; ?></p>
            
        </div>
        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Listrik</label>
            <p><?= $dataiklan['listrik']; ?></p>
            
        </div>
        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Kamar Mandi</label>
            <p><?= $dataiklan['kamar_mandi']; ?></p>
            
        </div>
        <div class="margin-bottom-12">
            <label for="" class="font-size-14">AC</label>
            <p><?= $dataiklan['ac']; ?></p>
            
        </div>
        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Water Heater</label>
            <p><?= $dataiklan['water_heater']; ?></p>
            
        </div>
        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Tempat Tidur</label>
            <p><?= $dataiklan['tempat_tidur']; ?></p>
            
        </div>
        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Meja Kursi</label>
            <p><?= $dataiklan['meja_kursi']; ?></p>
            
        </div>
        <div class="margin-bottom-12">
            <label for="almari" class="font-size-14">Lemari</label>
            <p><?= $dataiklan['almari']; ?></p>
            
        </div>

        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Alamat Lokasi</label>
            <p><?= $dataiklan['alamat_lokasi']; ?></p>
            
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Kecamatan</label>
            <p><?= $dataiklan['kecamatan']; ?></p>
            
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Kabupaten</label>
            <p><?= $dataiklan['kabupaten']; ?></p>
            
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Provinsi</label>
            <p><?= $dataiklan['provinsi']; ?></p>
            
        </div>

        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Harga</label>
            <p><?= $dataiklan['harga']; ?></p>
            
        </div>

        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Jenis Sewa</label>
            <p><?= $dataiklan['perbulan']; ?></p>
        </div>

        <div class="margin-bottom-12 margin-top-20">
            <button class="btn btn-primary width-100-percent textcolor-white"> Simpan </button>
        </div>

    </div>
</form>