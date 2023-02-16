<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Layanan</h1>
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
                        <a href="<?= base_url('edit-layanan'); ?>" class="btn btn-default"><i class="fa fa-chevron-left"></i> Back to Edit Layanan</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('submit-form-edit-layanan');?>" method="post" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="id">Id</label>
                                <input required readonly type="text" class="form-control"  name="id" value="<?= $layanan['id'];?>">
                              </div>
                            </div>

                          <div class="col-md-6">
                              <div class="form-group">
                                <label for="nolayanan">No Layanan</label>
                                <input required readonly type="text" class="form-control"  name="nolayanan" value="<?= $nolayanan;?>">
                              </div>
                            </div>
                          
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="layanan">Layanan</label>
                                <input required type="text" class="form-control" name="layanan" value="<?= $layanan['layanan'];?>" >
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="detaillayanan">Detail Layanan</label>
                                <input required type="text" class="form-control" name="detaillayanan" value="<?= $layanan['detaillayanan'];?>" >
                              </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="margin-bottom-12 padding-right-46 padding-left-16">
                                <label for="gambar" class="col-sm-2 col-form-label lbl-gambar" id="lbl-gambar">Gambar</label>
                                <div class="col-sm-2">
                                    <img src="<?php echo base_url('Image/Layanan/'.$layanan['gambar']);?>" class="img-preview" style="width:50px" id="img-preview">
                                </div>
                                <div class="col-sm-8">
                                    <input type="file" class="form-control" id="gambar" name="gambar" onchange="previewgambar()">
                                </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="exampleinputemail">Alamat (url)</label>
                                <input required type="text" class="form-control" name="url" value="<?= $layanan['url'];?>" >
                              </div>
                            </div>
                        </div>
                        
                        <div class="row">
                          <div class="col-md-6">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Update</button>
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