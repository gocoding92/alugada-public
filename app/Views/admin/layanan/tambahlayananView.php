<?php echo $this->extend('admin/layout/template'); ?>

<?php echo $this->section('content-admin'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
    <h3>Tambah Layanan</h3>

    <form action="<?= base_url('simpantambahlayanan');?>" method="post" enctype="multipart/form-data">
        <div class="row mb-2">
            <div class="col-4">
                <label for="nolayanan" class="form-label">Nomor Layanan</label>
            </div>
            <div class="col-3">
                <input readonly type="text" class="form-control" id="nolayanan" name="nolayanan" value="<?= $nolayananbaru?>">
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-4">
                <label for="Layanan" class="form-label">Layanan</label>
            </div>
            <div class="col-4">
                <input  type="text" class="form-control" id="layanan" name="layanan">
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-4">
                <label for="url" class="form-label">URL</label>
            </div>
            <div class="col-4">
                <input type="text" class="form-control" id="url" name="url" placeholder="Link URL ....">
            </div>
        </div>
        <!-- <div class="row mb-2">
            <div class="col-4">
                <label for="aktifasi" class="form-label">Aktifasi</label>
            </div>
            <div class="col-4">
                <input type="text" class="form-control" id="aktifasi" name="aktifasi" placeholder="1 = Aktif ; 0 = Tidak aktif">
            </div>
        </div> -->
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



        <!-- <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div> -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    </div>
  </section>
  
</div>
<!-- /.content-wrapper -->

<?php echo $this->endSection(); ?>