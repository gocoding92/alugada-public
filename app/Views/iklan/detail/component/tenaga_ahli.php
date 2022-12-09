<div>
    <div class="margin-bottom-12">
        <h2><i class="fa fa-user"></i> <?= $data_iklan['nama_lengkap'] ?></h2>
        <p style="font-size: 12px; margin-top: -17px; color: #a1a1a1;"><i class="fa fa-edit"></i> <?= $data_iklan['deskripsi']; ?></p>
    </div>
    <h3> <i class="fa fa-info"></i> Tentang Kami </h3>
</div>

<hr />

<div class="display-flex">
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-18">Tanggal Lahir :</label>
        <p style="font-size: 16px;"><?= $data_iklan['tanggal_lahir'] ?></p>
    </div>
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-18">Pendidikan :</label>
        <p style="font-size: 16px;"><?= $data_iklan['pendidikan'] ?></p>
    </div>
</div>

<div class="display-flex">
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-18">Jurusan :</label>
        <p style="font-size: 16px;"><?= $data_iklan['jurusan'] ?></p>
    </div>
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-18">Pengalaman Kerja :</label>
        <p style="font-size: 16px;"><?= $data_iklan['pengalaman_kerja'] ?></p>
    </div>
</div>

<div class="display-flex">
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-18">Domisili :</label>
        <p style="font-size: 16px;"><?= $data_iklan['domisili'] ?></p>
    </div>
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-18">Kecamatan :</label>
        <p style="font-size: 16px;"><?= $data_iklan['kecamatan'] ?></p>
    </div>
</div>

<div class="display-flex">
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-18">Kabupaten :</label>
        <p style="font-size: 16px;"><?= $data_iklan['kabupaten'] ?></p>
    </div>
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-18">Provinsi :</label>
        <p style="font-size: 16px;"><?= $data_iklan['provinsi'] ?></p>
    </div>
</div>

<div class="margin-bottom-12" style="width: 50%;">
    <label style="color: #a1a1a1;" for="" class="font-size-18">Gaji :</label>
    <p style="font-size: 16px;">Rp. <?= number_format($data_iklan['gaji']); ?></p>
</div>