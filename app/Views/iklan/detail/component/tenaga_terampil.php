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
        <label style="color: #a1a1a1;" for="" class="font-size-14">Profesi</label>
        <p style="font-size: 16px;"><?= $data_iklan['profesi'] ?></p>
    </div>
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-14">Tanggal Lahir</label>
        <p style="font-size: 16px;"><?= $data_iklan['tempat_lahir'] ?></p>
    </div>
</div>


<div class="display-flex">
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-14">Pendidikan</label>
        <p style="font-size: 16px;"><?= $data_iklan['pendidikan'] ?></p>
    </div>
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-14">Pengalaman Kerja</label>
        <p style="font-size: 16px;"><?= $data_iklan['pengalaman_kerja'] ?></p>
    </div>
</div>

<div class="display-flex">
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-14">Domisili</label>
        <p style="font-size: 16px;"><?= $data_iklan['domisili'] ?></p>
    </div>
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-14">Kecamatan</label>
        <p style="font-size: 16px;"><?= $data_iklan['kecamatan'] ?></p>
    </div>
</div>

<div class="display-flex">
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-14">Kabupaten</label>
        <p style="font-size: 16px;"><?= $data_iklan['kabupaten'] ?></p>
    </div>
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-14">Provinsi</label>
        <p style="font-size: 16px;"><?= $data_iklan['provinsi'] ?></p>
    </div>
</div>

<div class="display-flex">
    <div class="margin-bottom-12" style="width: 50%;">
        <label style="color: #a1a1a1;" for="" class="font-size-14">Gaji</label>
        <p style="font-size: 16px;">Rp. <?= number_format($data_iklan['gaji']); ?></p>
    </div>
</div>