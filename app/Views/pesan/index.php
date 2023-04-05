<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="home-page" class="row-sm padding-bottom-90">
  <h1 class="margin-left-16"> Pesan Masuk </h1>
  <p class="margin-left-16 margin-right-16">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
  </p>
  <?php foreach ($data_pesan as $value) : ?>
    <a href="<?= base_url('/pesan/detail/100'); ?>" class="text-decoration-none color-black">
      <div class="margin-left-16 margin-right-16 display-flex border-solid-ebe9e9 margin-bottom-10">
        <div style="width: 10%" class="margin-top-20">
          <img class="width-30-px height-30-px border-radius-30" src="<?= base_url(); ?>/Image/default-user.jpeg">
        </div>
        <div style="width: 85%">
          <p> <?php echo $value['nama']; ?> </p>
          <span class="position-relative top-21 font-size-10 color-grey"> 17 Jan 2022 </span>
        </div>
        <div style="width: 5%" class="margin-top-30">
          <i class="fa fa-chevron-right color-grey color-grey"></i>
        </div>
      </div>
    </a>
  <?php endforeach; ?>
</div>
<?= $this->endSection(); ?>