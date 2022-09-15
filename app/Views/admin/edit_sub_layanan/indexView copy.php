<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
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
                        <a href="<?= base_url(); ?>/sample/create" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Sub Layanan</a>
                    </h3>
                </div>
                <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No Layanan</th>
                    <th>No Sub Layanan</th>
                    <th>Sub Layanan</th>
                    <th>Gambar</th>
                    <th>Alamat</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($sublayanan as $sl) :?>
                      <tr>
                          <td><?= $sl['nolayanan'];?></td>
                          <td>Internet
                            Explorer 4.0
                          </td>
                          <td>Win 95+</td>
                          <td> 4</td>
                          <td> 10</td>
                          <td>
                              <a href="<?= base_url('');?>/sample/update">
                              <span class="right badge badge-primary"><i class="fa fa-edit"></i> Update</span>
                              </a>
                              <a href="">
                              <span class="right badge badge-danger"><i class="fa fa-trash"></i> Delete</span>
                              </a>
                          </td>
                      </tr>
                    <?php endforeach;?>
                      
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