<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="home-page" class="row-sm padding-bottom-90">
  <div class="row-categories">
    <?php foreach ($layanan as $l) : ?>
      <!-- <a href="<?= base_url('pasang-iklan/' . $l['layanan']); ?>" class="categories-button text-decoration-none" variant="light">
        <div>
          <img class="img-categories" src="<?= base_url('Image/Layanan/' . $l['gambar']); ?>" alt="semua">
        </div>
        <div class="label-categories">
          <p class="text-layanan"><?= $l['layanan']; ?></p>
        </div> -->
      </a>
    <?php endforeach; ?>
  </div>

  <?= $form ? $this->include($form) : null; ?>

</div>
<?= $this->endSection(); ?>