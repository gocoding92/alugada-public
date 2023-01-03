<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('iklan/css/styles'); ?>

<div>
  <div class="fade">
    <?php if ($data_iklan['image_1']) : ?>
      <div><img class="img-slider-detail" src="<?= base_url('Image/iklan') ?>/<?= $path_folder; ?>/<?= $data_iklan['image_1']; ?>" /></div>
    <?php endif; ?>
    <?php if ($data_iklan['image_2']) : ?>
      <div><img class="img-slider-detail" src="<?= base_url('Image/iklan') ?>/<?= $path_folder; ?>/<?= $data_iklan['image_2']; ?>" /></div>
    <?php endif; ?>
    <?php if ($data_iklan['image_3']) : ?>
      <div><img class="img-slider-detail" src="<?= base_url('Image/iklan') ?>/<?= $path_folder; ?>/<?= $data_iklan['image_3']; ?>" /></div>
    <?php endif; ?>
    <?php if ($data_iklan['image_4']) : ?>
      <div><img class="img-slider-detail" src="<?= base_url('Image/iklan') ?>/<?= $path_folder; ?>/<?= $data_iklan['image_4']; ?>" /></div>
    <?php endif; ?>
    <?php if ($data_iklan['image_5']) : ?>
      <div><img class="img-slider-detail" src="<?= base_url('Image/iklan') ?>/<?= $path_folder; ?>/<?= $data_iklan['image_5']; ?>" /></div>
    <?php endif; ?>
    <?php if ($data_iklan['image_6']) : ?>
      <div><img class="img-slider-detail" src="<?= base_url('Image/iklan') ?>/<?= $path_folder; ?>/<?= $data_iklan['image_6']; ?>" /></div>
    <?php endif; ?>
  </div>
</div>

<div id="home-page" class="row-sm">
  <?= $component_iklan ? $this->include($component_iklan) : null; ?>
  <div onclick="redirecWhatshap()">
    <img class="icon-wa-detail-iklan" src="<?= base_url('Image/wa.png') ?>" />
  </div>
</div>

<script>
  function redirecWhatshap() {
    var session = <?= $_SESSION['nohp']; ?>

    if (!session) {
      window.location.href = "<?php echo base_url('/login'); ?>";
    }

    if (session) {
        if (confirm("Apakah anda yakin untuk menghubungi via whatshapp ?") == true) {
          $.ajax({
                url: "<?= base_url('iklan/detail/whatshapp'); ?>",
                type: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                data: {nohp: session},
                success: function(data) {

                  console.log('data', data);
                  // toastr.success('Anda berhasil menghubungi pemilik iklan, tunggu balasan dari pemilik iklan!');

                  return;
                }
            });

        }
    }
  }
</script>

<?= $this->endSection(); ?>