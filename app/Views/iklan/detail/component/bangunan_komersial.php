<form action="<?= base_url('iklan/saveBangunanKomersial'); ?>" method="post" enctype="multipart/form-data">
    <div class="row">

        <h2 class="margin-top-3 margin-bottom-min3"> <i class=" fa fa-edit"></i> Informasi Data <br />
            <span class="font-size-10 position-relative bottom-16 left-30"> Property - Bangunan Komersial </span>
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


        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Judul Iklan</label>
            <p><?= $dataiklan['juduliklan']; ?></p>
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Luas Tanah</label>
            <p><?= $dataiklan['luastanah']; ?></p>
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Luas Bangunan</label>
            <p><?= $dataiklan['luasbangunan']; ?></p>
            
        </div>
        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Kepemilikan</label>
            <p><?= $dataiklan['kepemilikan']; ?></p>
            
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Jumlah Lantai</label>
            <p><?= $dataiklan['jumlahlantai']; ?></p>
            
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Listrik</label>
            <p><?= $dataiklan['listrik']; ?></p>
            
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Carport</label>
            <p><?= $dataiklan['carport']; ?></p>
            
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Alamat Lokasi</label>
            <p><?= $dataiklan['lokasi']; ?></p>
            
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
            <p><?= $dataiklan['propinsi']; ?></p>
            
        </div>

        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Deskripsi</label>
            <p><?= $dataiklan['deskripsi']; ?></p>
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Harga</label>
            <p><?= $dataiklan['harga']; ?></p>
        </div>

        <div class="margin-bottom-12">
            <button type="submit" class="btn btn-primary width-100-percent textcolor-white"> Submit </button>
        </div>

    </div>
</form>