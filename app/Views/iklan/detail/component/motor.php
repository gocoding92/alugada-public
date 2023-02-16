<div>
    <div class="margin-bottom-12">
        <h2><br /><i class="fa fa-user"></i> <?= $data_iklan['judul_iklan'] ?></h2>
        <p class="deskripsi-detail-iklan"><i class="fa fa-edit"></i> <?= $data_iklan['deskripsi']; ?></p>
    </div>
    <h3> <i class="fa fa-info"></i> Info Kami </h3>
</div>

<hr />

<div class="display-flex">
    <div class="margin-bottom-12 width-50-percent">
        <label class="label-detail-iklan" for="" class="font-size-18">Judul Iklan</label>
        <p class="font-size-16"><?= $data_iklan['judul_iklan']; ?></p>
    </div>
    <div class="margin-bottom-12 width-50-percent">
        <label class="label-detail-iklan" for="" class="font-size-18">Merk</label>
        <p class="font-size-16"><?= $data_iklan['merk']; ?></p>
    </div>
</div>

<div class="display-flex">
    <div class="margin-bottom-12 width-50-percent">
        <label class="label-detail-iklan" for="" class="font-size-18">Type</label>
        <p class="font-size-16"><?= $data_iklan['type']; ?></p>
    </div>
    <div class="margin-bottom-12 width-50-percent">
        <label class="label-detail-iklan" for="" class="font-size-18">Tahun</label>
        <p class="font-size-16"><?= $data_iklan['tahun']; ?></p>
    </div>
</div>

<div class="display-flex">
    <div class="margin-bottom-12 width-50-percent">
        <label class="label-detail-iklan" for="" class="font-size-18">Warna</label>
        <p class="font-size-16"><?= $data_iklan['warna']; ?></p>
    </div>
    <div class="margin-bottom-12 width-50-percent">
        <label class="label-detail-iklan" for="" class="font-size-18">Plat</label>
        <p class="font-size-16"><?= $data_iklan['plat']; ?></p>
    </div>
</div>

<div class="display-flex">
    <div class="margin-bottom-12 width-50-percent">
        <label class="label-detail-iklan" for="" class="font-size-18">Odometer</label>
        <p class="font-size-16"><?= $data_iklan['odometer']; ?></p>
    </div>
    <div class="margin-bottom-12 width-50-percent">
        <label class="label-detail-iklan" for="" class="font-size-18">Bahan Bakar</label>
        <p class="font-size-16"><?= $data_iklan['bahan_bakar']; ?></p>
    </div>
</div>

<div class="display-flex">
    <div class="margin-bottom-12 width-50-percent">
        <label class="label-detail-iklan" for="" class="font-size-18">Alamat</label>
        <p class="font-size-16"><?= $data_iklan['lokasi']; ?></p>
    </div>
    <div class="margin-bottom-12 width-50-percent">
        <label class="label-detail-iklan" for="" class="font-size-18">Kecamatan</label>
        <p class="font-size-16"><?= $data_iklan['kecamatan']; ?></p>
    </div>
</div>

<div class="display-flex">
    <div class="margin-bottom-12 width-50-percent">
        <label class="label-detail-iklan" for="" class="font-size-18">Kabupaten</label>
        <p class="font-size-16"><?= $data_iklan['kabupaten']; ?></p>
    </div>
    <div class="margin-bottom-12 width-50-percent">
        <label class="label-detail-iklan" for="" class="font-size-18">Provinsi</label>
        <p class="font-size-16"><?= $data_iklan['provinsi']; ?></p>
    </div>
</div>

<div class="margin-bottom-12 width-50-percent">
    <label class="label-detail-iklan" for="" class="font-size-18">Harga</label>
    <p class="font-size-16">Rp. <?= number_format($data_iklan['harga']); ?></p>
</div>