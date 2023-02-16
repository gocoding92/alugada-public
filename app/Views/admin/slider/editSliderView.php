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
    <div class="container-fluid">
        <H3>Edit Slider</H3>

        <form action="<?= base_url('admin-edit-slider');?>" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-12 col-md-4">
              <div class="">
                <img src="<?= base_url('Image/carousel/carouselIklan/' . $slider1['gambar']); ?>" class="img-preview1" id="img-preview1" style="width:100%">
              </div>
              <div class="">
                <input type="file" class="form-control" id="gambar1" name="gambar1" onchange="previewgambareditslider1()">
              </div>
            </div>
            <div class="col-12 col-md-4">
              <div class="">
                <img src="<?= base_url('Image/carousel/carouselIklan/' . $slider2['gambar']); ?>" class="img-preview2" id="img-preview2" style="width:100%">
              </div>
              <div class="">
                <input type="file" class="form-control" id="gambar2" name="gambar2" onchange="previewgambareditslider2()">
              </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="">
                    <img src="<?= base_url('Image/carousel/carouselIklan/'.$slider3['gambar']); ?>" class="img-preview3" id="img-preview3" style="width:100%">
                </div>
                <div class="">
                    <input type="file" class="form-control" id="gambar3" name="gambar3" onchange="previewgambareditslider3()">
                </div>
            </div>
          </div>

          <div>
            <button type="submit" class="btn btn-primary">Edit Slider</button>
          </div>
        </form>


    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->




<?php echo $this->endSection(); ?>