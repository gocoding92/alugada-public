<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="home-page" class="row-sm">

  <div class="row-categories">
      <?php foreach ($sublayanan as $sl) : ?>

          <?php if($sl['nolayanan'] == $nolayanan && $sl['is_active'] == 1){?>
              <a href="<?= base_url('input-sub-layanan'.'/'.$nolayanan); ?>" class="categories-button text-decoration-none" variant="light">
                <div>
                  <img class="img-categories" src="<?= base_url('Image/Layanan/Sublayanan/' . $sl['gambar']); ?>" alt="semua">
                </div>
                <div class="label-categories">
                  <p class="text-layanan"><?= $sl['sublayanan']; ?></p>
                </div>
              </a>
          <?php };?> 
    <?php endforeach; ?> 

  </div>

</div>
<?= $this->endSection(); ?>