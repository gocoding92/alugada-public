<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="home-page" class="row-sm padding-bottom-90">
  <h1 class="margin-left-16"> Akun </h1>
  <h4 class="margin-left-16"> Silahkan masukkan code </h4>
  <div class="row">
    <div class="margin-bottom-12 padding-right-46 padding-left-16">
      <input type="number" name="judul_iklan" class="form-control margin-top-6" placeholder="Code">
    </div>
    <div class="margin-bottom-12 padding-right-20 padding-left-16 margin-top-20">
      <button class="btn btn-primary width-100-percent textcolor-white"> Submit </button>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>