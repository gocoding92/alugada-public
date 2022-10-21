<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="home-page" class="row-sm padding-bottom-90">
  <p class="margin-left-16 font-size-18 textcolor-303235  font-weight: 600;"> Lupa Password</p>
  <p class="margin-left-16 font-size-13 textcolor-303235 position-relative top-min14">Silahkan isi lengkap nomor HP anda, tunggu beberapa saat akan ada code verifikasi via Whatsapp</p>
  <div class="row">
    <form action="<?= base_url('submit-lupa-password') ?>" method="POST">
      <?php csrf_field(); ?>
      <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="nohp" class="font-size-13">Masukkan Nomor HP <span class="textcolor-red"> *</span></label>
        <input required type="text" name="nohp" class="form-control margin-top-6" placeholder="08xxx">
      </div>

      <div class="margin-bottom-12 padding-right-20 padding-left-16 margin-top-20">
        <!-- <a href="<?php //echo base_url(); 
                      ?>/verify"> -->
        <button class="btn btn-primary width-100-percent textcolor-white"> Verifikasi </button>
        <!-- </a> -->
      </div>
    </form>

    <p class="margin-left-16 textcolor-303235 font-size-15 margin-top-20">
      Kembali ke halaman ?
      <a class="textcolor-2a960c font-weight-bold" href="<?php echo base_url(); ?>/login">
        Login
      </a>
    </p>

  </div>
</div>
<?= $this->endSection(); ?>