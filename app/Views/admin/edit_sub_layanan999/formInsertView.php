<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Tambah Sub Layanan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

      <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        <a href="<?= base_url('submit-edit-sub-layanan'.'/'.$nolayanan); ?>" class="btn btn-default"><i class="fa fa-chevron-left"></i> Back to Edit SUb Layanan</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('submit-form-insert');?>" method="post" enctype="multipart/form-data">

                        <div class="row">
                          <!-- <div class="col-md-6">
                            <div class="form-group">
                              <label for="id">id</label>
                              <input required readonly type="text" class="form-control"  name="id">
                            </div>
                          </div> -->
                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="nolayanan">No Layanan</label>
                                <input required readonly type="text" class="form-control"  name="nolayanan" value="<?= $nolayanan;?>">
                              </div>
                            </div>
                          
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="nosublayanan">No Sub Layanan</label>
                                <input required readonly type="text" class="form-control" name="nosublayanan" value = "<?= $nosublayanan;?>">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="sublayanan">Sub Layanan</label>
                                <input required type="text" class="form-control" name="sublayanan"  >
                              </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="margin-bottom-12 padding-right-46 padding-left-16">
                                <label for="gambar" class="col-sm-2 col-form-label lbl-gambar" id="lbl-gambar">Gambar</label>
                                <div class="col-sm-2">
                                    <img src="<?php echo base_url('Image/Layanan/Sublayanan/sublayanandefault.png');?>" class="img-preview" style="width:50px" id="img-preview">
                                </div>
                                <div class="col-sm-8">
                                    <input type="file" class="form-control" id="gambar" name="gambar" onchange="previewgambar()">
                                </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="exampleinputemail">Alamat (url)</label>
                                <input required type="text" class="form-control" name="url"  >
                              </div>
                            </div>
                        </div>
                        
                        <!-- <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="">Alamat</label>
                              <textarea name="alamat" class="form-control" id="" cols="10" rows="5"></textarea>
                            </div>
                          </div>
                        </div> -->
                        <div class="row">
                          <div class="col-md-6">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Create</button>
                            <!-- <button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i> Reset</button> -->
                          </div>
                        </div>
                      
                    </form>



                </div>
            </div>
        </div>
      </div>


      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php echo $this->endSection(); ?>