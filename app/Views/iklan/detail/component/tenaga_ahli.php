<form action="<?= base_url('iklan/saveTenagaAhli'); ?>" method="post" enctype="multipart/form-data">
    <div class="row">
        <h2 class="margin-top-3 margin-bottom-min3"> <i class=" fa fa-edit"></i> Informasi Data <br />
            <span class="font-size-10 position-relative bottom-16 left-30"> Tenaga Ahli - Engineering </span>
        </h2>

        
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Nama Lengkap <span class="textcolor-red"> * </span></label>
            <input type="text" name="nama_lengkap" class="form-control width-input margin-top-6">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Tanggal Lahir <span class="textcolor-red"> * </span></label>
            <input type="date" name="tanggal_lahir" class="form-control width-input margin-top-6">
        </div>
        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Pendidikan <span class="textcolor-red"> * </span></label>
            <select name="pendidikan" class="form-control width-select margin-top-6">
                <option></option>
                <option>S1</option>
                <option>S2</option>
                <option>S3</option>
            </select>
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Jurusan</label>
            <input type="text" name="jurusan" class="form-control width-input margin-top-6">
        </div>
        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Pengalaman Kerja</label>
            <select name="pengalaman_kerja" class="form-control width-select width-select margin-top-6">
                <option></option>
                <option>
                    < 1 Tahun</option>
                <option>1 - 3 Tahun</option>
                <option>3 - 5 Tahun</option>
                <option>5 - 7 Tahun</option>
                <option>7 Tahun</option>
            </select>
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Domisili</label>
            <input type="text" name="domisili" class="form-control width-input margin-top-6">
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
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Deskripsi</label>
            <textarea name="deskripsi" class="form-control width-input margin-top-6" placeholder="S1 Ekonomi, brevet A/B/C, English Fluently, Menguasai microsoft office"></textarea>
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Gaji yang diharapkan (Rp / Bulan)</label>
            <input type="number" name="gaji" class="form-control width-input margin-top-6">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Curiculum Vitae</label>
            <input type="file" name="curiculum_vitae" class="form-control width-input margin-top-6">
        </div>
        <div class="margin-bottom-12 margin-top-20">
            <button type="submit" class="btn btn-primary width-100-percent textcolor-white"> Submit </button>
        </div>

    </div>
</form>