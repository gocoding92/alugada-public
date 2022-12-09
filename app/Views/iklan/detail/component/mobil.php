<div>
    <div class="margin-bottom-12">
        <h2><i class="fa fa-user"></i> <?= $data_iklan['judul_iklan'] ?></h2>
        <p style="font-size: 12px; margin-top: -17px; color: #a1a1a1;"><i class="fa fa-edit"></i> <?= $data_iklan['deskripsi']; ?></p>
    </div>
    <h3> <i class="fa fa-info"></i> Info Kami </h3>
</div>

<hr />

<div class="display-flex">
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-14">Judul Iklan</label>
        <p style="font-size: 16px;"><?= $data_iklan['judul_iklan']; ?></p>
    </div>
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-14">Merk</label>
        <p style="font-size: 16px;"><?= $data_iklan['merk']; ?></p>
    </div>
</div>

<div class="display-flex">
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-14">Type</label>
        <p style="font-size: 16px;"><?= $data_iklan['type']; ?></p>
    </div>
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-14">Tahun</label>
        <p style="font-size: 16px;"><?= $data_iklan['tahun']; ?></p>
    </div>
</div>

<div class="display-flex">
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-14">Warna</label>
        <p style="font-size: 16px;"><?= $data_iklan['warna']; ?></p>
    </div>
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-14">Plat</label>
        <p style="font-size: 16px;"><?= $data_iklan['plat']; ?></p>
    </div>
</div>

<div class="display-flex">
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-14">Odometer</label>
        <p style="font-size: 16px;"><?= $data_iklan['odometer']; ?></p>
    </div>
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-14">Bahan Bakar</label>
        <p style="font-size: 16px;"><?= $data_iklan['bahan_bakar']; ?></p>
    </div>
</div>

<div class="display-flex">
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-14">Alamat</label>
        <p style="font-size: 16px;"><?= $data_iklan['lokasi']; ?></p>
    </div>
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-14">Kecamatan</label>
        <p style="font-size: 16px;"><?= $data_iklan['kecamatan']; ?></p>
    </div>
</div>

<div class="display-flex">
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-14">Kabupaten</label>
        <p style="font-size: 16px;"><?= $data_iklan['kabupaten']; ?></p>
    </div>
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-14">Provinsi</label>
        <p style="font-size: 16px;"><?= $data_iklan['provinsi']; ?></p>
    </div>
</div>


<div class="margin-bottom-12" style="width: 50%;">
    <label style="color: #a1a1a1;" for="" class="font-size-14">Harga</label>
    <p style="font-size: 16px;">Rp. <?= number_format($data_iklan['harga']); ?></p>
</div>