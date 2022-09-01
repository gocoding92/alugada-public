<form action="<?= base_url('/iklan/savemtr'); ?>" method="post" enctype="multipart/form-data">

    <h2 class="margin-top-3 margin-bottom-min3"> <i class=" fa fa-edit"></i> Informasi Data <br />
        <span class="font-size-10 position-relative bottom-16 left-30"> Motor </span>
    </h2>

    <div class="border3-solid-ced4da margin-bottom-6 border-radius-5">
        <legend class="font-size-10 textcolor-9a9a9a margin-top-4 margin-bottom-8">Select photos (Up to photos 6) Min 1 <span class="textcolor-red"> * </span></legend>
        <div class="display-flex width-auto overflow-auto">
            <div class="select-image margin-bottom-12">
                <label for="inputTag" class="cursor-pointer font-size-14">
                    <i class="fa fa-2x fa-camera"></i>
                    <input id="inputTag" type="file" name="file[]" class="display-none" multiple required />
                    <br />
                    <span id="imageName"></span>
                </label>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Judul Iklan</label>
            <input type="text" name="judul_iklan" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Merk</label>
            <input type="text" name="merk" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Type</label>
            <input type="text" name="type" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Tahun</label>
            <input type="text" name="tahun" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Warna</label>
            <input type="text" name="warna" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Plat</label>
            <input type="text" name="plat" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Odometer(km)</label>
            <input type="text" name="odometer" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Bahan Bakar</label>
            <input type="text" name="bahan_bakar" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Lokasi</label>
            <input type="text" name="lokasi" class="form-control width-input margin-top-6" placeholder="">
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
            <input type="text" name="provinsi" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <!-- <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Gambar1</label>
            <input type="file" name="gambar1" class="form-control width-input">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Gambar2</label>
            <input type="file" name="gambar2" class="form-control width-input">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Gambar3</label>
            <input type="file" name="gambar3" class="form-control width-input">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Gambar4</label>
            <input type="file" name="gambar4" class="form-control width-input">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Gambar5</label>
            <input type="file" name="gambar5" class="form-control width-input">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Gambar6</label>
            <input type="file" name="gambar6" class="form-control width-input">
        </div> -->
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Deskripsi</label>
            <textarea name="deskripsi" class="form-control width-input"></textarea>
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Harga</label>
            <input type="harga" name="harga" class="form-control width-input margin-top-6" placeholder="">
        </div>

        <div class="margin-bottom-12 margin-top-20">
            <button type="submit" class="btn btn-primary width-100-percent textcolor-white"> Submit </button>
        </div>

    </div>
</form>