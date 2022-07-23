<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="home-page" class="row-sm padding-bottom-90">
  <h1 class="margin-left-16"> Profile </h1>
  <h4 class="margin-left-16"> Edit Profile </h4>
  <div class="row">
    <div class="margin-bottom-12 padding-right-46 padding-left-16">
      <label for="" class="font-size-15">No. Handphone</label>
      <input type="text" name="judul_iklan" class="form-control margin-top-6" placeholder="">
    </div>
    <div class="margin-bottom-12 padding-right-46 padding-left-16">
      <label for="" class="font-size-15">Password</label>
      <input type="text" name="merk" class="form-control margin-top-6" placeholder="">
    </div>
    <div class="margin-bottom-12 padding-right-20 padding-left-16 margin-top-20">
      <button class="btn btn-primary width-100-percent textcolor-white"> Login </button>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>