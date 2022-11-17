<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="home-page" class="row-sm padding-bottom-90">
  <p class="margin-left-16 font-size-18 textcolor-303235  font-weight: 600;">Update Password</p>
  <p class="margin-left-16 font-size-13 textcolor-303235 position-relative top-min14"> <i class="fa fa-edit"></i> Ubah Password</p>
  <div class="row">
    <div class="margin-bottom-12 padding-right-46 padding-left-16">
      <label for="password" class="font-size-13">Masukkan Password Lama <span class="textcolor-red"> *</span></label>
      <input type="password" id="password_lama" class="form-control margin-top-6" placeholder="***">
    </div>
    <div class="margin-bottom-12 padding-right-46 padding-left-16">
      <label for="nohp" class="font-size-13">Masukkan Password Baru <span class="textcolor-red"> *</span></label>
      <input type="password" id="password_baru" class="form-control margin-top-6" placeholder="08xxx">
    </div>
    <div class="margin-bottom-12 padding-right-46 padding-left-16">
      <label for="nohp" class="font-size-13">Masukkan Konfirmasi Password Baru <span class="textcolor-red"> *</span></label>
      <input type="password" id="konfirmasi_password" class="form-control margin-top-6" placeholder="08xxx">
    </div>
    <div class="margin-bottom-12 padding-right-20 padding-left-16 margin-top-20">
      <button id="submit" class="btn btn-primary width-100-percent textcolor-white"> Submit </button>
    </div>
    </form>
  </div>

  <p class="margin-left-16 textcolor-303235 font-size-15 margin-top-20">
    Kembali ke Profil ?
    <a class="textcolor-2a960c font-weight-bold" href="<?php echo base_url('/profil'); ?>">
      Sekarang
    </a>
  </p>
</div>

<?= $this->include("script/update_password"); ?>

<?= $this->endSection(); ?>