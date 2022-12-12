<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div id="home-page" class="row-sm">
  <div class="row-categories">
    <?php foreach ($data_sub_layanan as $l) :

      $url_detail = $layanan . '/' . $l['nolayanan'] . '/' . $l['nosublayanan'];
    ?>
      <a onclick="filterSublayanan('<?= $url_detail; ?>');" href="#" class="categories-button text-decoration-none" variant="light">
        <div>
          <img class="img-categories" src="<?= base_url('Image/Layanan/Sublayanan/' . $l['gambar']); ?>" alt="semua">
        </div>
        <div class="label-categories">
          <p class="text-layanan"><?= $l['sublayanan']; ?></p>
        </div>
      </a>
    <?php endforeach; ?>
  </div>

  <div class="row-card-layanan">
    <?php foreach ($data_iklan as $tbl_rekomendasi_iklan) :
      $image = $tbl_rekomendasi_iklan['image'];
      $nama_iklan = substr($tbl_rekomendasi_iklan['nama_iklan'], 0, 16);
      $nama_iklan_str = strlen($tbl_rekomendasi_iklan['nama_iklan']) > 16 ? '...' : '';
      $description = substr($tbl_rekomendasi_iklan['description'], 0, 95);
      $description_str = strlen($tbl_rekomendasi_iklan['description']) > 95 ? '...' : '';
      $alamat = substr($tbl_rekomendasi_iklan['alamat'], 0, 15);
      $alamat_str = strlen($tbl_rekomendasi_iklan['alamat']) > 15 ? '...' : '';
    ?>
      <a href="<?= base_url('iklan/detail-iklan'); ?>/<?= $tbl_rekomendasi_iklan['nama_iklan']; ?>/<?= $tbl_rekomendasi_iklan['id_rekomendasi_iklan']; ?>/<?= $tbl_rekomendasi_iklan['id_iklan']; ?>/<?= $tbl_rekomendasi_iklan['type_rekomendasi_iklan']; ?>/<?= $tbl_rekomendasi_iklan['table_iklan']; ?>" class="cursor-pointer text-decoration-none">
        <div class="card-layanan-list">
          <div class="card-layanan">
            <figure class="card-figure-layanan">
              <img src="<?= base_url(); ?>/Image/iklan/<?= $tbl_rekomendasi_iklan['type_rekomendasi_iklan']; ?>/<?= $image; ?>" class="card-img-layanan">
            </figure>
            <div class="row-title-layanan">
              <span class="title-layanan"><?= $nama_iklan . $nama_iklan_str; ?></span>
              <span class="title-type-layanan-border"><?= $tbl_rekomendasi_iklan['type_rekomendasi_iklan']; ?></span> <br /> <br />
              <span class="title-type-desc"><?= $description . $description_str; ?></span> <br /> <br />
              <div style="position: absolute; bottom: 0;">
                <div style="position: relative; top: -10px;">
                  <p class="title-alamat"> <i class="fa fa-map"></i> <?= $alamat . $alamat_str; ?></p>
                  <span class="title-type-layanan"><?= $tbl_rekomendasi_iklan['create_at']; ?></span> <br />
                  <button id="submit" style="width: 100px;" class="btn btn-primary textcolor-white margin-top-7 cursor-pointer"> Detail </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </a>
    <?php endforeach; ?>
  </div>
</div>

<script>
  function filterSublayanan(url_detail) {
    window.location.href = `<?php echo base_url('iklan/detail-iklan-layanan'); ?>/${url_detail}`;
  }
</script>

<?= $this->endSection(); ?>