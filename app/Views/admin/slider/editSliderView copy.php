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

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <!-- <a href="<?php //echo base_url('tambahlayanan'); ?>" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah-layanan"><i class="fa fa-plus"></i> Tambah Layanan Test</a> -->


                <!-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default" onclick="testcoba(100)">
                  Launch Default Modal
                </button> -->

              </h3>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Gambar 1</th>
                    <th>Gambar 2</th>
                    <th>Gambar 3</th>

                  </tr>
                </thead>
                <tbody>

=                      <td>
                        <!-- <div class="row mb-2"> -->
                          <!-- <div class="col-4">
                            <label for="gambar" class="form-label">Gambar</label>
                          </div> -->
                          <div class="col-12">
                            <div class="margin-bottom-12 padding-right-46 padding-left-16">
                              <img src="<?= base_url('Image/carousel/carouselIklan/'.$slider1['gambar']); ?>" class="img-preview1" style="width:50px" id="img-preview1">
                              <input type="file" class="form-control" id="gambar1" name="gambar1" onchange="previewgambareditslider1()">
                            </div>
                          </div>
                          
                        <!-- </div> -->
                      </td>
                      =                      <td>
                        <!-- <div class="row mb-2"> -->
                          <!-- <div class="col-4">
                            <label for="gambar" class="form-label">Gambar</label>
                          </div> -->
                          <div class="col-12">
                            <div class="margin-bottom-12 padding-right-46 padding-left-16">
                              <img src="<?= base_url('Image/carousel/carouselIklan/'.$slider2['gambar']); ?>" class="img-preview2" style="width:50px" id="img-preview2">
                              <input type="file" class="form-control" id="gambar2" name="gambar2" onchange="previewgambareditslider2()">
                            </div>
                          </div>
                          
                        <!-- </div> -->
                      </td>
                      <td>
                        <!-- <div class="row mb-2"> -->
                          <!-- <div class="col-4">
                            <label for="gambar" class="form-label">Gambar</label>
                          </div> -->
                          <div class="col-12">
                            <div class="margin-bottom-12 padding-right-46 padding-left-16">
                              <img src="<?= base_url('Image/carousel/carouselIklan/'.$slider3['gambar']); ?>" class="img-preview3" style="width:50px" id="img-preview3">
                              <input type="file" class="form-control" id="gambar3" name="gambar3" onchange="previewgambareditslider3()">
                            </div>
                          </div>
                          
                        <!-- </div> -->
                      </td>




                </tbody>
              </table>
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