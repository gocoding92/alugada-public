<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="home-page" class="row-sm padding-bottom-90">
  <!-- <h1 class="margin-left-16"> Profile </h1> -->
  <h4 class="margin-left-16"> Ganti Password </h4>

  <form action="<?= base_url('submit-edit-password');?>" method = "post">
      <div class="row">
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
          <label for="nohp" class="font-size-15">nohp</label>
          <input readonly type="text" name="nohp" class="form-control margin-top-6" value="<?php echo $pengunjung['nohp'];?>">
        </div>

        <div class="margin-bottom-12 padding-right-46 padding-left-16">
          <label for="passwordlama" class="font-size-15">Password Lama</label>
          <input type="text" name="passwordlama" class="form-control margin-top-6" placeholder="Password lama anda .......">
        </div>
        <?php if(session()->getFlashdata('pesanpasswordlama')){?>
          <div class="alert alert-success" role="alert">
            <?php echo session()->getFlashdata('pesanpasswordlama');?>
          </div>
        <?php };?>

        <div class="margin-bottom-12 padding-right-46 padding-left-16">
          <label for="passwordbaru" class="font-size-15">Password Baru</label>
          <input type="text" name="passwordbaru" class="form-control margin-top-6" placeholder="Masukkan password baru .......">
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
          <label for="confirmpasswordbaru" class="font-size-15">Ketik Ulang Password Baru</label>
          <input type="text" name="confirmpasswordbaru" class="form-control margin-top-6" placeholder="Masukkan password baru sekali lagi .......">
        </div>
        <?php if(session()->getFlashdata('pesanpasswordbaru')){?>
          <div class="alert alert-success" role="alert">
            <?php echo session()->getFlashdata('pesanpasswordbaru');?>
          </div>
        <?php };?>
        
        <div class="margin-bottom-12 padding-right-20 padding-left-16 margin-top-20">
          <button class="btn btn-primary width-100-percent textcolor-white"> Ganti Password </button>
        </div>
      </div>
  </form>


</div>
<?= $this->endSection(); ?>