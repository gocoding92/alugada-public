<div>
    <div class="margin-bottom-12">
        <h2><i class="fa fa-user"></i> <?= $data_iklan['juduliklan'] ?></h2>
        <p class="deskripsi-detail-iklan"><i class="fa fa-edit"></i> <?= $data_iklan['deskripsi']; ?></p>
    </div>
    <h3> <i class="fa fa-info"></i> Info Kami </h3>
</div>

<hr />

<div class="display-flex">
    <div class="margin-bottom-12 width-50-percent">  
        <label class="label-detail-iklan" for="" class="font-size-18">Judul Iklan</label>
        <p class="font-size-16"><?= $data_iklan['juduliklan'] ?></p>
    </div>
    <div class="margin-bottom-12 width-50-percent">  
        <label class="label-detail-iklan" for="" class="font-size-18">Luas Tanah</label>
        <p class="font-size-16"><?= $data_iklan['luastanah'] ?></p>
    </div>
</div>

<div class="display-flex">
    <div class="margin-bottom-12 width-50-percent">  
        <label class="label-detail-iklan" for="" class="font-size-18">Kepemilikan</label>
        <p class="font-size-16"><?= $data_iklan['kepemilikan'] ?></p>
    </div>
    <div class="margin-bottom-12 width-50-percent">  
        <label class="label-detail-iklan" for="" class="font-size-18">Akses Mobil</label>
        <p class="font-size-16"><?= $data_iklan['aksesmobil'] ?></p>
    </div>
</div>

<div class="display-flex">
    <div class="margin-bottom-12 width-50-percent">  
        <label class="label-detail-iklan" for="" class="font-size-18">Alamat</label>
        <p class="font-size-16"><?= $data_iklan['lokasi'] ?></p>
    </div>
    <div class="margin-bottom-12 width-50-percent">  
        <label class="label-detail-iklan" for="" class="font-size-18">Kecamatan</label>
        <p class="font-size-16"><?= $data_iklan['kecamatan'] ?></p>
    </div>
</div>

<div class="display-flex">
    <div class="margin-bottom-12 width-50-percent">  
        <label class="label-detail-iklan" for="" class="font-size-18">Kabupaten</label>
        <p class="font-size-16"><?= $data_iklan['kabupaten'] ?></p>
    </div>
    <div class="margin-bottom-12 width-50-percent">  
        <label class="label-detail-iklan" for="" class="font-size-18">Provinsi</label>
        <p class="font-size-16"><?= $data_iklan['propinsi'] ?></p>
    </div>
</div>
<div class="display-flex">
    <div class="margin-bottom-12 width-50-percent">  
        <label class="label-detail-iklan" for="" class="font-size-18">Harga</label>
        <p class="font-size-16"> Rp. <?= number_format($data_iklan['harga']); ?></p>  
    </div>
</div>
        