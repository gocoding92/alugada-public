<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div>
  <div class="fade">
    <?php if ($data_iklan['image_1']) : ?>
      <div><img style="width: 100%; height: 300px; object-fit: cover;" src="<?= base_url('Image/iklan') ?>/<?= $path_folder; ?>/<?= $data_iklan['image_1']; ?>" /></div>
    <?php endif; ?>
    <?php if ($data_iklan['image_2']) : ?>
      <div><img style="width: 100%; height: 300px; object-fit: cover;" src="<?= base_url('Image/iklan') ?>/<?= $path_folder; ?>/<?= $data_iklan['image_2']; ?>" /></div>
    <?php endif; ?>
    <?php if ($data_iklan['image_3']) : ?>
      <div><img style="width: 100%; height: 300px; object-fit: cover;" src="<?= base_url('Image/iklan') ?>/<?= $path_folder; ?>/<?= $data_iklan['image_3']; ?>" /></div>
    <?php endif; ?>
    <?php if ($data_iklan['image_4']) : ?>
      <div><img style="width: 100%; height: 300px; object-fit: cover;" src="<?= base_url('Image/iklan') ?>/<?= $path_folder; ?>/<?= $data_iklan['image_4']; ?>" /></div>
    <?php endif; ?>
    <?php if ($data_iklan['image_5']) : ?>
      <div><img style="width: 100%; height: 300px; object-fit: cover;" src="<?= base_url('Image/iklan') ?>/<?= $path_folder; ?>/<?= $data_iklan['image_5']; ?>" /></div>
    <?php endif; ?>
    <?php if ($data_iklan['image_6']) : ?>
      <div><img style="width: 100%; height: 300px; object-fit: cover;" src="<?= base_url('Image/iklan') ?>/<?= $path_folder; ?>/<?= $data_iklan['image_6']; ?>" /></div>
    <?php endif; ?>
  </div>
</div>

<div id="home-page" class="row-sm">
  <?= $component_iklan ? $this->include($component_iklan) : null; ?>
  <div>
    <img style="width: 120px; position: absolute; bottom: 0px; right: 9px; top: 15px; cursor: pointer;" src="<?= base_url('Image/wa.png') ?>" />
  </div>
</div>

<?= $this->endSection(); ?>