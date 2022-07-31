<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="home-page" class="row-sm padding-bottom-90">
  <h1 class="margin-left-16"> <?= $title;?></h1>
  <!-- <h4 class="margin-left-16"> Silahkan masukkan No. Handphone </h4> -->
  <div class="row">
    <form action="<?= base_url('submit-lupa-password') ?>" method="POST">
    <?php csrf_field();?>
        <input type="text" name="lupapassword" class="form-control margin-top-6" value="1">
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
          <label for="" class="font-size-15">No. Handphone</label>
          <input required type="text" name="nohp" class="form-control margin-top-6">
        </div>

      <div class="margin-bottom-12 padding-right-20 padding-left-16 margin-top-20">
        <!-- <a href="<?php //echo base_url(); 
                      ?>/verify"> -->
        <button class="btn btn-primary width-100-percent textcolor-white"> Verifikasi </button>
        <!-- </a> -->
      </div>
    </form>
  </div>
</div>
<?= $this->endSection(); ?>