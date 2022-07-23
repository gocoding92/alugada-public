<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="home-page" class="row-sm padding-bottom-90">
  <h1 class="margin-left-16"> <i class="fa fa-user"></i>&nbsp; Hello, Achmad Rizky </h1>
  <div class="row">
    <div class="margin-bottom-12 padding-right-46">
      <h4 class="padding-left-16"> <i class="fa fa-list-alt"></i>&nbsp; Iklan Anda</h4>
    </div>
    <hr />
    <div class="margin-bottom-12 padding-right-46">
      <h4 class="padding-left-16"> <i class="fa fa-edit"></i>&nbsp; Edit Profile</h4>
    </div>
    <hr />
    <div class="margin-bottom-12 padding-right-46">
      <h4 class="padding-left-16"> <i class="fa fa-pencil"></i>&nbsp; Edit Password</h4>
    </div>
    <hr />
    <div class="margin-bottom-12 padding-right-46">
      <h4 class="padding-left-16"> <i class="fa fa-sign-out"></i>&nbsp; Logout</h4>
    </div>
    <hr />
  </div>
</div>
<?= $this->endSection(); ?>