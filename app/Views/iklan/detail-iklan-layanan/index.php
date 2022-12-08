<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div id="home-page" class="row-sm">
  <div style="display: flex; overflow: scroll; width: 150px;">
    <?php foreach ($data_sub_layanan as $val) : ?>
      <div class="cursor-pointer" variant="light" style="width: 30%">
        <div>
          <img class="img-categories" src="<?= base_url('Image/Layanan/Sublayanan/' . $val['gambar']); ?>" alt="semua">
        </div>
        <div class="">
          <p style="font-size: 10px;"><?= $val['sublayanan']; ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<?= $this->endSection(); ?>