<?php echo $this->extend('admin/layout/template'); ?>

<?php echo $this->section('content-admin'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
    <h3>Tambah Layanan</h3>

    <form action="<?= base_url('simpantambahlayanan');?>" method="post" enctype="multipart/form-data">
            <?php foreach($slider as $s):?>

                <div class="row mb-2">
                    <div class="col-4">
                        <label for="title" class="form-label">Title</label>
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-control" id="title" name="title" value="<>">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-4">
                        <label for="description" class="form-label">description</label>
                    </div>
                    <div class="col-4">
                        <input  type="text" class="form-control" id="description" name="description">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-4">
                        <label for="aktifasi" class="form-label">Aktifasi</label>
                    </div>
                    <div class="col-4">
                        <select class="form-select" aria-label="Default select example" name="aktifasi">
                            <option value="1" selected>1 (Aktif)</option>
                            <option value="1">1 (Aktif)</option>
                            <option value="0">0 (Tidak Aktif)</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="col-4">
                        <label for="gambar" class="form-label">Gambar</label>
                    </div>
                    <div class="col-3">
                        <div class="margin-bottom-12 padding-right-46 padding-left-16">
                                <img src="<?php echo base_url('Image/Layanan/default.png');?>" class="img-preview" style="width:50px" id="img-preview">
                                <input type="file" class="form-control" id="gambar" name="gambar" onchange="previewgambar()">
                        </div>
                    </div>
                </div>
            <?php endforeach;?>



        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    </div>
  </section>
  
</div>
<!-- /.content-wrapper -->

<?php echo $this->endSection(); ?>