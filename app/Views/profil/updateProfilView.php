<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div id="home-page" class="row-sm padding-bottom-90">
  <p class="margin-left-16 font-size-18 textcolor-303235  font-weight: 600;">Updated Profil Data</p>
  <p class="margin-left-16 font-size-13 textcolor-303235 position-relative top-min14">Silahkan isi data anda dengan lengkap</p>
  <div class="row">
   
    <form method="post" enctype="multipart/form-data">
      <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="nama" class="font-size-13">Nama Lengkap</label>
        <input type="text" id="nama" name="nama" value="<?= $nama; ?>" class="form-control margin-top-6">
      </div>
      <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="email" class="font-size-13">Email</label>
        <input type="email" id="email" name="email" value="<?= $email; ?>" class="form-control margin-top-6" >
      </div>
      <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="alamat" class="font-size-13">Alamat</label>
        <textarea id="alamat" name="alamat" class="form-control margin-top-6"><?= $alamat; ?></textarea>
      </div>
      <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="alamat" class="font-size-13">Avatar</label>
        <!-- // hidden gambar -->
        <input type="hidden" name="image-default" value="<?= $gambar; ?>">

        <input type="file" name="avatar" class="form-control margin-top-6">
      </div>
      <div class="margin-bottom-12 padding-right-20 padding-left-16 margin-top-20">
        <button id="submit" type="submit"  class="btn btn-primary width-100-percent textcolor-white"> Submit </button>
      </div>
    </form>

  </div>

  <p class="margin-left-16 textcolor-303235 font-size-15 margin-top-20">
    Ubah Password ?
    <a class="textcolor-2a960c font-weight-bold" href="<?php echo base_url('/profil/change-password'); ?>">
      Sekarang
    </a>
  </p>
</div>

<?= $this->include("script/update_profil"); ?>

<?= $this->endSection(); ?>