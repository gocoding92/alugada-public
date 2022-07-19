<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="home-page" class="row-sm padding-bottom-90">
  <div class="row-categories">
    <?php foreach ($layanan as $l) : ?>
      <a href="<?= base_url('pasang-iklan?layanan=' . $l['layanan']); ?>" class="categories-button text-decoration-none" variant="light">
        <div>
          <img class="img-categories" src="<?= base_url('Image/Layanan/' . $l['gambar']); ?>" alt="semua">
        </div>
        <div class="label-categories">
          <p class="text-layanan"><?= $l['layanan']; ?></p>
        </div>
      </a>
    <?php endforeach; ?>
  </div>

  <!-- iklan/form/property -->
  <!-- iklan/form/tenaga_ahli -->
  <!-- iklan/form/tenaga_terampil -->
  <!-- iklan/form/kost_kontrakan -->
  <!-- iklan/form/property_disewakan -->
  <!-- iklan/form/mobil -->
  <!-- iklan/form/motor -->
  
  <?=  $this->include('iklan/form/motor'); ?>
</div>
<?= $this->endSection(); ?>