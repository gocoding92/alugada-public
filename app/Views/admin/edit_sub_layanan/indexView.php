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
                        <a href="<?php echo base_url('edit-layanan');?>" class="btn btn-primary"><i class="fa fa-plus"></i>Edit Layanan</a>
                    </h3>
                </div>
                <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No Layanan</th>
                    <th>Layanan</th>
                    <!-- <th>Detail Layanan</th> -->
                    <th>Gambar</th>
                    <th>Alamat</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach($layanan as $l) :?>
                      <tr>
                          <?php if($l['is_active'] == 1){?>
                            <td><?= $l['nolayanan'];?></td>
                            <td><?= $l['layanan'];?></td>
                            <!-- <td><?php //echo $l['detaillayanan']?></td> -->
                            <td><img src=<?= base_url("Image/Layanan/".$l['gambar']);?> style="width: 60px;"></td>
                            <td><?= $l['url'];?></td>
                            <td>
                                <a href="<?= base_url('submit-edit-sub-layanan'.'/'.$l['nolayanan']);?>">
                                <span class="right badge badge-primary"><i class="fa fa-edit"></i> Edit Sub Layanan</span>
                                </a>
                                <!-- <a href="">
                                <span class="right badge badge-danger"><i class="fa fa-trash"></i> Delete</span>
                                </a> -->
                            </td>
                          <?php };?>
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