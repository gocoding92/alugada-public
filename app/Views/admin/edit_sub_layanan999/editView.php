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
                <a href="<?php echo base_url('tambah-sub-layanan' . '/' . $nolayanan); ?>" class="btn btn-primary"><i class="fa fa-plus"></i>Tambah Sub Layanan</a>
              </h3>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No Layanan</th>
                    <th>No Sub Layanan</th>
                    <th>Sub Layanan</th>
                    <!-- <th>Detail Layanan</th> -->
                    <th>Gambar</th>
                    <th>Alamat</th>
                    <th>Is_active</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($sublayanan as $sl) : ?>
                    <?php if ($sl['nolayanan'] == $nolayanan) { ?>
                      <tr>
                        <td><?php echo $sl['nolayanan']; ?></td>
                        <td><?php echo $sl['nosublayanan']; ?></td>
                        <td><?= $sl['sublayanan']; ?></td>
                        <!-- <td><?php //echo $sl['detaillayanan']
                                  ?></td> -->
                        <td><img src=<?= base_url("Image/Layanan/Sublayanan/" . $sl['gambar']); ?> style="width: 60px;"></td>
                        <td><?= $sl['url']; ?></td>
                        <td><?= $sl['is_active']; ?></td>
                        <td>
                          <a href="<?= base_url('submit-edit' . '/' . $sl['nosublayanan']); ?>">
                            <?php if ($sl['is_active'] == 1) { ?>
                              <span class="right badge badge-primary"><i class="fa fa-edit"></i> Edit</span>
                            <?php }; ?>
                          </a>

                          <a href="<?= base_url('activate-sub-layanan' . '/' . $sl['nosublayanan'] . '/' . $sl['nolayanan'] . '/' . $sl['id']); ?>">
                            <?php if ($sl['is_active'] == 1) { ?>
                              <span class="right badge badge-danger"><i class="fa fa-trash"></i> Hide</span>
                            <?php } else { ?>
                              <span class="right badge badge-danger"><i class="fa fa-trash"></i> Unhide</span>
                            <?php }; ?>
                          </a>

                        </td>
                      </tr>
                    <?php }; ?>
                  <?php endforeach; ?>

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