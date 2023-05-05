<?= $this->extend('layout/template'); ?>

<?php
$url = '/login';
if (! empty($_SESSION['nohp'])) {
  $url = '/pasang-iklan';
}

// color: #489fe4;
//     font-weight: bold;
?>

<?= $this->section('content'); ?>
<div id="home-page" class="row-sm">
  <div class="position-relative top10">
    <div class="fade">
      <?php foreach ($slider as $slider) : ?>
        <div><img style="width:476px" src="<?= base_url('Image/carousel/carouselIklan/' . $slider['gambar']); ?>" alt=""></div>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="row-categories">
    <?php foreach ($layanan as $l) : ?>
      <a href="<?= base_url('iklan/detail-iklan-layanan/' . $l['layanan'] . '/' . $l['nolayanan'] . '/0'); ?>" class="categories-button text-decoration-none" variant="light">
        <div>
          <img class="img-categories" src="<?= base_url('Image/Layanan/' . $l['gambar']); ?>" alt="semua">
        </div>
        <div class="label-categories">
          <p class="text-layanan"><?= $l['layanan']; ?></p>
        </div>
      </a>
    <?php endforeach; ?>
  </div>
    <div style="display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); grid-gap: 15px;gap: 15px;">

    <?php foreach ($rekomendasi_iklan as $tbl_rekomendasi_iklan) :
      $image = $tbl_rekomendasi_iklan['image'];
      $nama_iklan = substr($tbl_rekomendasi_iklan['nama_iklan'], 0, 16);
      $nama_iklan_str = strlen($tbl_rekomendasi_iklan['nama_iklan']) > 16 ? '...' : '';
      $description = substr($tbl_rekomendasi_iklan['description'], 0, 95);
      $description_str = strlen($tbl_rekomendasi_iklan['description']) > 95 ? '...' : '';
      $alamat = substr($tbl_rekomendasi_iklan['alamat'], 0, 15);
      $alamat_str = strlen($tbl_rekomendasi_iklan['alamat']) > 15 ? '...' : '';
    ?>
      
      <div style="width: 168px;
                  height: 240px;
                  box-shadow: 0 1px 4px 0 var(--blackDividers);
                  position: relative;
                  box-sizing: border-box;
                  margin: 8px;
                  padding: 0;
                  text-align: left;
                  background-color: #fafafa;
                  border-radius: 4px;">
        <div>
         <img style="width: 100%;
          object-fit: cover;
          height: 120px;
          border-radius: 4px 4px 0 0;
          " src="<?= $image; ?>" alt="" />
          <div style="margin: 12px 0 0;">
            <div style="margin: 0; padding: 0 8px;">
              <span style="font-size: 16px; line-height: normal;">Rp. <?= number_format($tbl_rekomendasi_iklan['harga']); ?></span>
            </div>
            <h3 style="font-size: 12px;
              line-height: 18px;
              line-height: 20px;
              margin: 8px 0 0;
              display: inline-block;
              max-width: 100%;
              overflow: hidden;
              text-overflow: ellipsis;
              white-space: nowrap;
              padding: 0 8px;
              margin-bottom: 6px;
              ">
              <?= $nama_iklan . $nama_iklan_str; ?>
            </h3>
            <span style="background-color: <?= $tbl_rekomendasi_iklan['color']; ?>;
    color: white;
    padding: 4px;
    border-radius: 2px;
    font-size: 7px;
    position: absolute; top: 0; left: 0px;"><?= $tbl_rekomendasi_iklan['type_rekomendasi_iklan']; ?></span>
            <div style="text-transform: capitalize;
              margin: 0;
              display: inline-block;
              max-width: auto;
              overflow: hidden;
              text-overflow: ellipsis;
              white-space: nowrap;
              font-size: 10px;
              line-height: 16px;
              max-width: 140px;
              padding: 0 8px;">
              <?= $description . $description_str; ?>
            </div>
            <a href="<?= base_url('iklan/detail-iklan'); ?>/<?= $tbl_rekomendasi_iklan['nama_iklan']; ?>/<?= $tbl_rekomendasi_iklan['id_rekomendasi_iklan']; ?>/<?= $tbl_rekomendasi_iklan['id_iklan']; ?>/<?= $tbl_rekomendasi_iklan['type_rekomendasi_iklan']; ?>/<?= $tbl_rekomendasi_iklan['table_iklan']; ?>" class="cursor-pointer text-decoration-none">
            <div style="
                  margin: auto 1px 1px;
                  font-size: 12px;
                  background-color: #009688;
                  text-align: center;
                  color: #fff;
                  border-radius: 0px;
                  margin-top: 0px;
                  padding: -3px;
                  height: 18px;
              ">
              Detail
            </div>
          </a>
          </div>
        </div>
      </div>

    <?php endforeach; ?>

    </div>


  <?php if (count($rekomendasi_iklan) == 0): ?>
    <div class="empty-state-iklan">
      <img style="max-width: 90px;" src="<?= base_url('Image/emptystate.png') ?>" />
      <p class="text-empty-state-iklan"> Iklan Belum Tersedia, Pasang Iklan Gratis! </p>
      <a href="<?= base_url($url); ?>" class="btn btn-primary width-100-percent text-decoration-none textcolor-white"> Yuk, Pasang Iklan Sekarang </a>
    </div>
  <?php endif; ?>
</div>
<?= $this->endSection(); ?>