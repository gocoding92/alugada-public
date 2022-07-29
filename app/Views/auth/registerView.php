<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="home-page" class="row-sm padding-bottom-90">
  <h1 class="margin-left-16"> <?= $title;?></h1>
  <!-- <h4 class="margin-left-16"> Silahkan masukkan No. Handphone </h4> -->
  <div class="row">
    <form action="<?= base_url('verify') ?>" method="POST">
    <?php csrf_field();?>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
          <label for="" class="font-size-15">Login/register</label>
          <input readonly type="text" name="loginregister" class="form-control margin-top-6" value="0">
        </div>
        <?php if($nohp){?>
          <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">No. Handphone</label>
            <input required type="text" name="nohp" class="form-control margin-top-6" value="<?= $nohp;?>">
          </div>
        <?php }else{?>
          <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="" class="font-size-15">No. Handphone</label>
            <input required type="text" name="nohp" class="form-control margin-top-6">
          </div>
        <?php };?>

      <div class="margin-bottom-12 padding-right-20 padding-left-16 margin-top-20">
        <!-- <a href="<?php //echo base_url(); 
                      ?>/verify"> -->
        <button class="btn btn-primary width-100-percent textcolor-white"> Daftar </button>
        <!-- </a> -->
      </div>
    </form>
    <p class="margin-left-16"><small> Sudah punya Akun ? </small><a href="<?php echo base_url(); ?>/login"><small> Login sekarang</small></a> </p>
  </div>
</div>
<?= $this->endSection(); ?>