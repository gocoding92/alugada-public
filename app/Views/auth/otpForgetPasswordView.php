<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="home-page" class="row-sm padding-bottom-90">
  <p class="margin-left-16 font-size-18 textcolor-303235  font-weight: 600;"> Masukkan Code OTP</p>
  <p class="margin-left-16 font-size-13 textcolor-303235 position-relative top-min14">Silahkan isi lengkap nomor HP anda, tunggu beberapa saat akan ada code verifikasi via Whatsapp</p>
  <div class="row">
    <div class="margin-bottom-12 padding-right-46 padding-left-16">
      <input type="text" id="otp" placeholder="Masukkan Kode Verifikasi" class="form-control margin-top-6">
    </div>
    <div class="margin-bottom-12 padding-right-20 padding-left-16 margin-top-20">
      <button id="submit" class="btn btn-primary width-100-percent textcolor-white"> Kirim OTP </button>
    </div>
  </div>
</div>

<?= $this->include("script/otp_forget_pasword"); ?>

<?= $this->endSection(); ?>