<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="home-page" class="row-sm">
  <div class="position-relative top10">
    <div class="fade">
      <?php foreach ($slider as $slider) : ?>
        <div><img src="<?= $slider['image']; ?>" alt=""></div>
      <?php endforeach; ?>
      <!-- <div><img src="https://i.ytimg.com/vi/f_fC54rC9hc/maxresdefault.jpg" /></div>
      <div><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkihA1QQqZxNnO83gFHJB3FJdZVOxC-hsYZA&usqp=CAU" /></div>
      <div><img src="https://i.ytimg.com/vi/vql_cCL-YLE/maxresdefault.jpg" /></div> -->
    </div>
  </div>

  <div class="row-categories">
    <?php foreach ($layanan as $l) : ?>
      <a href="<?= base_url('home/detail/' . $l['nolayanan']); ?>" class="categories-button text-decoration-none" variant="light">
        <div>
          <img class="img-categories" src="<?= base_url('Image/Layanan/' . $l['gambar']); ?>" alt="semua">
        </div>
        <div class="label-categories">
          <p class="text-layanan"><?= $l['layanan']; ?></p>
        </div>
      </a>
    <?php endforeach; ?>
  </div>

  <div class="row-card-layanan">
    <?php foreach ($rekomendasi_iklan as $tbl_rekomendasi_iklan) :
      $image = json_decode($tbl_rekomendasi_iklan['image']);
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