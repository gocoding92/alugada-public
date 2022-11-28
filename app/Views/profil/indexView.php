<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('profil/css/styles'); ?>

<div id="home-page" class="container-profil padding-bottom-90">
  <div class="row-profil display-flex">
    <div class="position-img-profil">
      <img class="img-profil" src="https://w7.pngwing.com/pngs/86/421/png-transparent-computer-icons-user-profile-set-of-abstract-icon-miscellaneous-monochrome-computer-wallpaper-thumbnail.png" alt="">
      <p class="font-size-10">
        Verified
      </p>
      <a href="<?= base_url('/profil/update-profil'); ?>" class="text-decoration-none textcolor-433e3e font-size-13"> <i class="fa fa-edit"></i> Ubah Profil </a>
    </div>
    <div class="margin-left-12">
      <p class="font-size-14 font-weight-bold"> <?= $nama; ?> </p>
      <p class="font-size-13"> <i class="fa fa-phone"></i> <?= $no_handphone; ?> </p>
      <p class="font-size-13">
        <?= $deskripsi; ?>
      </p>
      <p class="font-size-12">
        🏡 <?= $alamat; ?>
      </p>
    </div>
  </div>
  <div class="row-profil-iklan">
    <h4> Iklan Anda </h4>
    <div class="row-card-layanan">
      <?php foreach ($data_iklan as $tbl_rekomendasi_iklan) :
        $image = $tbl_rekomendasi_iklan['image'];
        $nama_iklan = substr($tbl_rekomendasi_iklan['nama_iklan'], 0, 16);
        $nama_iklan_str = strlen($tbl_rekomendasi_iklan['nama_iklan']) > 16 ? '...' : '';
        $description = substr($tbl_rekomendasi_iklan['description'], 0, 50);
        $description_str = strlen($tbl_rekomendasi_iklan['description']) > 50 ? '...' : '';
        $alamat = substr($tbl_rekomendasi_iklan['alamat'], 0, 80);
        $alamat_str = strlen($tbl_rekomendasi_iklan['alamat']) > 80 ? '...' : '';
      ?>
        <a href="<?= base_url('iklan/detail'); ?>/<?= $tbl_rekomendasi_iklan['nama_iklan']; ?>/<?= $tbl_rekomendasi_iklan['id_rekomendasi_iklan']; ?>/<?= $tbl_rekomendasi_iklan['id_iklan']; ?>/<?= $tbl_rekomendasi_iklan['type_rekomendasi_iklan']; ?>" class="cursor-pointer text-decoration-none">
          <div class="card-layanan-list">
            <div class="card-layanan">
              <figure class="card-figure-layanan">
                <img src="<?= base_url(); ?>/Image/iklan/<?= $tbl_rekomendasi_iklan['type_rekomendasi_iklan']; ?>/<?= $image[0]; ?>" class="card-img-layanan">
              </figure>
              <div class="row-title-layanan">
                <span class="title-layanan"><?= $nama_iklan . $nama_iklan_str; ?></span>
                <span class="title-type-layanan-border"><?= $tbl_rekomendasi_iklan['type_rekomendasi_iklan']; ?></span> <br /> <br />
                <span class="title-type-desc"><?= $description . $description_str; ?></span> <br /> <br />
                <div class="text-footer-layanan">
                  <span class=""><?= $alamat . $alamat_str; ?></span> <br />
                  <span class="title-type-layanan"><?= $tbl_rekomendasi_iklan['create_at']; ?></span>
                </div>
              </div>
            </div>
          </div>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>