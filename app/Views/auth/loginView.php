<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="home-page" class="row-sm padding-bottom-90">
  <!-- <h1 class="margin-left-16">Login</h1> -->
  <!-- <h4 class="margin-left-16"> Silahkan masuk / <a href="<?php //echo base_url(); ?>/register"> Daftar Sekarang </a> </h4> -->

  <div class="row">
    <form action="<?= base_url();?>/verify" method="POST">
    <?php csrf_field();?>
      <!-- <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="" class="font-size-15">No. Handphone</label> -->
        <!-- <input required type="text" name="nohp" class="form-control margin-top-6" placeholder="Masukkan nomor Handphone anda ..... (08123456789)"> -->
      <!-- </div> -->
      <?php if(session()->getFlashdata('pesan')){?>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
          <label for="" class="font-size-15">No. Handphone</label>
          <input required type="text" name="nohp" class="form-control margin-top-6" value="<?= $nohp;?>">
        </div>
        <div class="alert alert-success" role="alert">
          <?php echo "Nomor anda sudah terdaftar. Silahkan Login" ;?>
          <?php //echo $session->getFlashdata('pesan');?>
        </div>
      <?php }else{?>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
          <label for="" class="font-size-15">No. Handphone</label>
          <input required type="text" name="nohp" class="form-control margin-top-6" placeholder="Masukkan nomor Handphone anda ..... (08123456789)">
        </div>
      <?php };?>


      <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="" class="font-size-15">Password</label>
        <input required type="password" name="password" class="form-control margin-top-6" placeholder="Masukkan Password anda .....">
        <input hidden type="text" name="loginregister" class="form-control margin-top-6" value="1">
      </div>
      <div class="margin-bottom-12 padding-right-20 padding-left-16 margin-top-20">
        <button type="submit" class="btn btn-primary width-100-percent textcolor-white"> Login </button>
      </div>
    </form>
  </div>


  <p class="margin-left-16"><small> Belum punya Akun ?  </small><a href="<?php echo base_url(); ?>/register"><small> Daftar Sekarang</small></a> </p>

  <?php if($pengunjung['nohp'] == 123){?>
    <p class="margin-left-16"><a href="<?php echo base_url('lupa-password');?>"><small> Lupa Password ?<?= $pengunjung['nohp'];?></small></a> </p>
  <?php };?>

</div>
<?= $this->endSection(); ?>