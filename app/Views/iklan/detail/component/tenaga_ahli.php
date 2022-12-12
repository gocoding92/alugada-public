<div>
    <div class="margin-bottom-12">
        <h2><i class="fa fa-user"></i> <?= $data_iklan['nama_lengkap'] ?></h2>
        <p class="deskripsi-detail-iklan"><i class="fa fa-edit"></i> <?= $data_iklan['deskripsi']; ?></p>
    </div>
    <h3> <i class="fa fa-info"></i> Tentang Kami </h3>
</div>

<hr />

<div class="display-flex">
    <div class="margin-bottom-12 width-50-percent">
        <label class="label-detail-iklan" for="" class="font-size-18">Tanggal Lahir :</label>
        <p class="font-size-16"><?= $data_iklan['tanggal_lahir'] ?></p>
    </div>
    <div class="margin-bottom-12 width-50-percent">
        <label class="label-detail-iklan" for="" class="font-size-18">Pendidikan :</label>
        <p class="font-size-16"><?= $data_iklan['pendidikan'] ?></p>
    </div>
</div>

<div class="display-flex">
    <div class="margin-bottom-12 width-50-percent">
        <label class="label-detail-iklan" for="" class="font-size-18">Jurusan :</label>
        <p class="font-size-16"><?= $data_iklan['jurusan'] ?></p>
    </div>
    <div class="margin-bottom-12 width-50-percent">
        <label class="label-detail-iklan" for="" class="font-size-18">Pengalaman Kerja :</label>
        <p class="font-size-16"><?= $data_iklan['pengalaman_kerja'] ?></p>
    </div>
</div>

<div class="display-flex">
    <div class="margin-bottom-12 width-50-percent">
        <label class="label-detail-iklan" for="" class="font-size-18">Domisili :</label>
        <p class="font-size-16"><?= $data_iklan['domisili'] ?></p>
    </div>
    <div class="margin-bottom-12 width-50-percent">
        <label class="label-detail-iklan" for="" class="font-size-18">Kecamatan :</label>
        <p class="font-size-16"><?= $data_iklan['kecamatan'] ?></p>
    </div>
</div>

<div class="display-flex">
    <div class="margin-bottom-12 width-50-percent">
        <label class="label-detail-iklan" for="" class="font-size-18">Kabupaten :</label>
        <p class="font-size-16"><?= $data_iklan['kabupaten'] ?></p>
    </div>
    <div class="margin-bottom-12 width-50-percent">
        <label class="label-detail-iklan" for="" class="font-size-18">Provinsi :</label>
        <p class="font-size-16"><?= $data_iklan['provinsi'] ?></p>
    </div>
</div>

<div class="margin-bottom-12 width-50-percent">
    <label class="label-detail-iklan" for="" class="font-size-18">Gaji :</label>
    <p class="font-size-16">Rp. <?= number_format($data_iklan['gaji']); ?></p>
</div>