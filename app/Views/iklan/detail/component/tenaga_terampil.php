<form action="<?= base_url('iklan/saveTenagaTerampil'); ?>" method="post" enctype="multipart/form-data">
    <div class="row">
        <h2 class="margin-top-3 margin-bottom-min3"> <i class=" fa fa-edit"></i> Informasi Data <br />
            <span class="font-size-10 position-relative bottom-16 left-30"> Tenaga Terampil - Driver </span>
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

        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Profesi <span class="textcolor-red"> * </span></label>
            <p><?= $dataiklan['profesi']; ?></p>
        </div>
        <!-- <div class="margin-bottom-12">
            <label for="idpengiklan" class="font-size-14">Id Pengiklan</label>
            <input readonly type="text" name="idpengiklan" class="form-control width-input margin-top-6" value="<?= $pengunjung['id']; ?>">
        </div> -->
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Nama Lengkap <span class="textcolor-red"> * </span></label>
            <p><?= $dataiklan['nama_lengkap']; ?></p>
            
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Tempat Lahir <span class="textcolor-red"> * </span></label>
           <p><?= $dataiklan['tempat_lahir'] ?></p>
        </div>
        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Pendidikan <span class="textcolor-red"> * </span></label>
            <p><?= $dataiklan['pendidikan']; ?></p>
        </div>
        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Pengalaman Kerja</label>
            <p><?= $dataiklan['pengalaman_kerja']; ?></p>
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Domisili</label>
            <p><?= $dataiklan['domisili']; ?></p>
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
            <label for="" class="font-size-14">Deskripsi</label>
            <p><?= $dataiklan['deskripsi']; ?></p>
        </div>

        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Gaji</label>
            <p><?= $dataiklan['gaji']; ?></p>
        </div>

        <div class="margin-bottom-12 margin-top-20">
            <button type="submit" class="btn btn-primary width-100-percent textcolor-white"> Submit </button>
        </div>

    </div>
</form>