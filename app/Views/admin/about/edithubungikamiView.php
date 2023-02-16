<?php echo $this->extend('admin/layout/template'); ?>

<?php echo $this->section('content-admin'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <!-- <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Pasang Iklan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div>
      </div>
    </div>
  </div> -->
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
      <form action="<?= base_url('update-hubungi-kami');?>" method="post">
        <div class="row mb-1 mt-1">
              <label for="id" class="col-4 col-sm-2 col-form-label">Id</label>
              <div class="col-8 col-sm-10">
                  <input readonly type="text" id="id"  name="id" value="<?= $id?>">
              </div>
          </div>
          <div class="row mb-1 mt-1">
              <label for="isi" class="col-4 col-sm-2 col-form-label">Tentang Kami</label>
              <div class="col-8 col-sm-10">
                  <textarea name="isi" id="isi" cols="60" rows="5"><?= $isi;?></textarea>
              </div>
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
      </form>        
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->





<?php echo $this->endSection(); ?>