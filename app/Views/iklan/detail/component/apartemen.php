<div>
    <div class="margin-bottom-12">
        <h2><i class="fa fa-user"></i> <?= $data_iklan['juduliklan'] ?></h2>
        <p style="font-size: 12px; margin-top: -17px; color: #a1a1a1;"><i class="fa fa-edit"></i> <?= $data_iklan['deskripsi']; ?></p>
    </div>
    <h3> <i class="fa fa-info"></i> Info Kami </h3>
</div>

<hr />

<div class="display-flex">
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-14">Luas Tanah</label>
        <p style="font-size: 16px;"><?= $data_iklan['luas']; ?></p>
    </div>
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-14">Kepemilikan</label>
        <p style="font-size: 16px;"><?= $data_iklan['kepemilikan']; ?></p>
    </div>
</div>

<div class="display-flex">
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-14">Bedroom</label>
        <p style="font-size: 16px;"><?= $data_iklan['bedroom']; ?></p>
    </div>
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-14">Kamar Mandi</label>
        <p style="font-size: 16px;"><?= $data_iklan['kamarmandi']; ?></p>
    </div>
</div>

<div class="display-flex">
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-14">listrik</label>
        <p style="font-size: 16px;"><?= $data_iklan['listrik']; ?></p>
    </div>
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-14">Alamat</label>
        <p style="font-size: 16px;"><?= $data_iklan['alamatlokasi']; ?></p>
    </div>
</div>

<div class="display-flex">
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-14">Kecamatan</label>
        <p style="font-size: 16px;"><?= $data_iklan['kecamatan']; ?></p>
    </div>
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-14">Kabupaten</label>
        <p style="font-size: 16px;"><?= $data_iklan['kabupaten']; ?></p>
    </div>
</div>

<div class="display-flex">
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-14">Provinsi</label>
        <p style="font-size: 16px;"><?= $data_iklan['propinsi']; ?></p>
    </div>
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-14">Harga</label>
        <p style="font-size: 16px;">Rp. <?= number_format($data_iklan['harga']); ?></p>
    </div>
</div>