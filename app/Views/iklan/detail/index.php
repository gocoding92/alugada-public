<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('iklan/css/styles'); ?>

<div>
  <div class="fade">
    <?php if ($data_iklan['image_1']) : ?>
      <div><img class="img-slider-detail" src="<?= $data_iklan['image_1']; ?>" /></div>
    <?php endif; ?>
    <?php if ($data_iklan['image_2']) : ?>
      <div><img class="img-slider-detail" src="<?= $data_iklan['image_2']; ?>" /></div>
    <?php endif; ?>
    <?php if ($data_iklan['image_3']) : ?>
      <div><img class="img-slider-detail" src="<?= $data_iklan['image_3']; ?>" /></div>
    <?php endif; ?>
    <?php if ($data_iklan['image_4']) : ?>
      <div><img class="img-slider-detail" src="<?= $data_iklan['image_4']; ?>" /></div>
    <?php endif; ?>
  </div>
</div>

<div id="home-page" class="row-sm">
  <?= $component_iklan ? $this->include($component_iklan) : null; ?>
  <div onclick="redirecWhatshap()">
    <img class="icon-wa-detail-iklan" src="<?= base_url('Image/pesan.png') ?>" />
  </div>
</div>

<script>
  function redirecWhatshap() {
    var session = "<?= (! empty($_SESSION['nohp']) ? $_SESSION['nohp'] : '0' ); ?>";

    if (!session) {
      window.location.href = "<?php echo base_url('/login'); ?>";

      return;
    }

    window.location.href = "<?php echo base_url('/iklan/detail-chat/'.$nama_iklan.'/'.$id_rekomendasi_iklan.'/'.$id_iklan.'/'.$type_iklan.'/'.$table.'/'.$data_pengiklan['nohp'].'/'.$data_pengiklan['nama'].'/'.$data_pengiklan['id'].' '); ?>";
  }
</script>

<?= $this->endSection(); ?>