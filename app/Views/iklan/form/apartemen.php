<form method="post" enctype="multipart/form-data">
    <div class="row">
        <h2 class="margin-top-3 margin-bottom-min3"> <i class=" fa fa-edit"></i> Informasi Data <br />
            <span class="font-size-10 position-relative bottom-16 left-30"> Property - Apartemen</span>
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
        <input type="hidden" name="nolayanan" value="<?= $no_layanan; ?>">
        <input type="hidden" name="nosublayanan" value="<?= $no_sublayanan; ?>">
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Judul Iklan</label>
            <input type="text" name="juduliklan" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Luas</label>
            <input type="number" name="luas" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Kepemilikan</label>
            <select name="kepemilikan" id="" class="form-control margin-top-6">
                <option></option>
                <option>SHM Strata tittle</option>
                <option>HGB</option>
                <option>Lainnya</option>
            </select>
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Bedroom</label>
            <input type="number" name="bedroom" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Kamar Mandi</label>
            <input type="number" name="kamarmandi" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Dapur</label>
            <input type="number" name="dapur" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Listrik</label>
            <input type="number" name="listrik" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Alamat Lokasi</label>
            <textarea name="alamatlokasi" class="form-control width-input margin-top-6"></textarea>
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Kecamatan</label>
            <input type="text" name="kecamatan" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Kabupaten</label>
            <input type="text" name="kabupaten" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Provinsi</label>
            <input type="text" name="propinsi" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Deskripsi</label>
            <textarea name="deskripsi" class="form-control"></textarea>
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Harga</label>
            <input type="number" name="harga" class="form-control margin-top-6" placeholder="">
        </div>

        <div class="margin-bottom-12 margin-top-20">
            <button type="submit" class="btn btn-primary width-100-percent textcolor-white"> Submit </button>
        </div>

    </div>
</form>

 <?= $this->include("script/iklan/iklan_apartemen"); ?>