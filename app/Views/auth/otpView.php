<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="home-page" class="row-sm padding-bottom-90">
  <!-- <h1 class="margin-left-16"> Akun </h1> -->
  <h4 class="margin-left-16"> Masukkan OTP </h4>
  <div class="row">

      <form action="<?= base_url('cek-otp');?>" method="post">
          <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <input type="text" name="nohp" class="form-control margin-top-6" value="<?= $nohp;?>">
            <input type="text" name="otp" class="form-control margin-top-6" value="<?= $otp;?>">
          </div>
          <div class="margin-bottom-12 padding-right-20 padding-left-16 margin-top-20">
              <button type="submit" class="btn btn-primary width-100-percent textcolor-white"> Kirim OTP </button>
          </div>
      </form>

  </div>
</div>
<?= $this->endSection(); ?>