<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="home-page" class="row-sm padding-bottom-90">
  <p class="margin-left-16 font-size-18 textcolor-303235  font-weight: 600;">Selamat datang di Alugada!</p>
  <p class="margin-left-16 font-size-13 textcolor-303235 position-relative top-min14"> <i class="fa fa-user"></i> Silahkan masuk / Daftar</p>
  <div class="row">
    <form action="<?= base_url('submit-login'); ?>" method="POST">
      <?php csrf_field(); ?>

      <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="nohp" class="font-size-13">Masukkan Nomor HP <span class="textcolor-red"> *</span></label>
        <input required type="text" name="nohp" class="form-control margin-top-6" placeholder="08xxx">
      </div>

      <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="" class="font-size-13">Masukkan Password <span class="textcolor-red"> *</span></label>
        <input required type="password" name="password" class="form-control margin-top-6" placeholder="***">
      </div>

      <?php if ($pengunjung['nohp'] == 123) { ?>
        <p class="margin-left-16 margin-right-18 text-align-right">
          <a class="textcolor-303235 font-size-14 text-decoration-none" href="<?php echo base_url('lupa-password'); ?>">Lupa Password ?</a>
        </p>
      <?php }; ?>

      <div class="margin-bottom-12 padding-right-20 padding-left-16 margin-top-20">
        <button type="submit" class="btn btn-primary width-100-percent textcolor-white"> Login </button>
      </div>
    </form>
  </div>

  <p class="margin-left-16 textcolor-303235 font-size-15 margin-top-20">
    Belum punya Akun ?
    <a class="textcolor-2a960c font-weight-bold" href="<?php echo base_url(); ?>/register">
      Daftar Sekarang
    </a>
  </p>

</div>
<?= $this->endSection(); ?>