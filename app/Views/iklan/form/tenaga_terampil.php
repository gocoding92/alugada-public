<form action="<?= base_url('iklan/saveTenagaTerampil'); ?>" method="post" enctype="multipart/form-data">
    <div class="row">
        <h2 class="margin-top-3 margin-bottom-min3"> <i class=" fa fa-edit"></i> Informasi Data <br />
            <span class="font-size-10 position-relative bottom-16 left-30"> Tenaga Terampil - Driver </span>
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

        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Profesi <span class="textcolor-red"> * </span></label>
            <select name="profesi" class="form-control width-select margin-top-6">
                <option> </option>
                <option>Driver</option>
                <option>Babysitter</option>
                <option>Perawat Jompo/Lansia</option>
                <option>Asisten Rumahtangga</option>
                <option>Office Girl/Boy</option>
                <option>Keamanan/Satpam</option>
            </select>
        </div>
        <!-- <div class="margin-bottom-12">
            <label for="idpengiklan" class="font-size-14">Id Pengiklan</label>
            <input readonly type="text" name="idpengiklan" class="form-control width-input margin-top-6" value="<?= $pengunjung['id']; ?>">
        </div> -->
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Nama Lengkap <span class="textcolor-red"> * </span></label>
            <input type="text" name="nama_lengkap" class="form-control width-input margin-top-6">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Tempat Lahir <span class="textcolor-red"> * </span></label>
            <input type="date" name="tempat_lahir" class="form-control width-input margin-top-6">
        </div>
        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Pendidikan <span class="textcolor-red"> * </span></label>
            <select name="pendidikan" class="form-control width-select margin-top-6">
                <option selected> </option>
                <option>SD</option>
                <option>SMP</option>
                <option>SMA</option>
            </select>
        </div>
        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Pengalaman Kerja</label>
            <select name="pengalaman_kerja" class="form-control  width-select margin-top-6">
                <option selected> </option>
                <option>
                    < 1 Tahun</option>
                <option>1 - 3 Tahun</option>
                <option>3 - 5 Tahun</option>
                <option> 5 Tahun</option>
            </select>
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Domisili</label>
            <input type="text" name="domisili" class="form-control width-input margin-top-6">
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
            <label for="" class="font-size-14">Deskripsi</label>
            <textarea name="deskripsi" class="form-control width-input margin-top-6" placeholder="Babysitter berpengalaman, sabar, telaten, bisa bayi baru lahir atau batita"></textarea>
        </div>

        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Gaji</label>
            <input type="number" name="gaji" class="form-control width-input margin-top-6">
        </div>

        <div class="margin-bottom-12 margin-top-20">
            <button type="submit" class="btn btn-primary width-100-percent textcolor-white"> Submit </button>
        </div>

    </div>
</form>