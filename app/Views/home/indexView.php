<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="home-page" class="row-sm">
  <div class="position-relative top10">
    <div class="fade">
      <div><img src="https://i.ytimg.com/vi/f_fC54rC9hc/maxresdefault.jpg" /></div>
      <div><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkihA1QQqZxNnO83gFHJB3FJdZVOxC-hsYZA&usqp=CAU" /></div>
      <div><img src="https://i.ytimg.com/vi/vql_cCL-YLE/maxresdefault.jpg" /></div>
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
    <?php foreach ($rekomendasi_iklan as $tbl_rekomendasi_iklan) : ?>
      <div class="card-layanan-list">
        <div class="card-layanan">
          <figure class="card-figure-layanan">
            <img alt="" src="https://apollo-singapore.akamaized.net:443/v1/files/bbhtuz5mby343-ID/image;s=300x0" class="card-img-layanan">
          </figure>
          <div class="row-title-layanan">
            <span class="title-layanan"><?= $tbl_rekomendasi_iklan['nama_iklan']; ?></span>
            <span class="title-type-layanan-border"><?= $tbl_rekomendasi_iklan['type_rekomendasi_iklan']; ?></span> <br /> <br />
            <span class="title-type-desc"><?= $tbl_rekomendasi_iklan['description']; ?></span> <br /> <br />
            <div class="text-footer-layanan">
              <span class=""><?= $tbl_rekomendasi_iklan['alamat']; ?></span> <br />
              <span class="title-type-layanan"><?= $tbl_rekomendasi_iklan['create_at']; ?></span>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
</div>
<?= $this->endSection(); ?>