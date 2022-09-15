<form action="<?= base_url('iklan/saveTenagaAhli'); ?>" method="post" enctype="multipart/form-data">
    <div class="row">
        <h2 class="margin-top-3 margin-bottom-min3"> <i class=" fa fa-edit"></i> Informasi Data <br />
            <span class="font-size-10 position-relative bottom-16 left-30"> Tenaga Ahli - Engineering </span>
        </h2>

        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Nama Lengkap <span class="textcolor-red"> * </span></label>
            <p><?= $dataiklan['nama_lengkap']; ?></p>
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Tanggal Lahir <span class="textcolor-red"> * </span></label>
            <p><?= $dataiklan['tanggal_lahir']; ?></p>
            <div class="margin-bottom-12">
                <label for="" class="font-size-14">Pendidikan <span class="textcolor-red"> * </span></label>
                <p><?= $dataiklan['pendidikan']; ?></p>
            </div>
            <div class="margin-bottom-12 margin-right-25">
                <label for="" class="font-size-14">Jurusan</label>
                <p><?= $dataiklan['jurusan']; ?></p>
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
                <p></p>
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
                <label for="" class="font-size-14">Gaji yang diharapkan (Rp / Bulan)</label>
                <p><?= $dataiklan['gaji']; ?></p>
            </div>
            <div class="margin-bottom-12 margin-right-25">
                <label for="" class="font-size-14">Curiculum Vitae</label>
                <p><?= $dataiklan['image']; ?></p>
            </div>
            <div class="margin-bottom-12 margin-top-20">
                <button type="submit" class="btn btn-primary width-100-percent textcolor-white"> Submit </button>
            </div>

        </div>
</form>