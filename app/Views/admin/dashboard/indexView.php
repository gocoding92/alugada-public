<?php echo $this->extend('admin/layout/template'); ?>

<?php echo $this->section('content-admin'); ?>

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
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label for="exampleInputEmail1">Start Date</label>
            <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="exampleInputEmail1">End Date</label>
            <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group" style="margin-top: 32px;">
            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>&nbsp; Pencarian</button>
          </div>
        </div>

      </div>

      <hr />

      <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-info"><i class="far fa-user"></i></span>
            <div class="info-box-content">
              <a href="<?php echo base_url('/users') ?>">
                <span class="info-box-text text-dark">Users / Pengguna</span>
                <span class="info-box-number">
                  <?php
                  $x = 0;
                  foreach ($user as $u) {
                    if ($u['role'] > 9) {
                      $x = $x + 1;
                    }
                  }
                  echo $x;; ?>
                </span>
              </a>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>
            <div class="info-box-content">
              <a href="<?php echo base_url('/iklan') ?>">
                <span class="info-box-text text-dark">Pasang Iklan</span>
                <span class="info-box-number">
                  <?php
                  $x = 0;
                  foreach ($iklanproperty as $ip) {
                    $x = $x + 1;
                  }
                  foreach ($iklancarikerja as $ik) {
                    $x = $x + 1;
                  }
                  foreach ($iklanmobilmotor as $im) {
                    $x = $x + 1;
                  }
                  echo $x;; ?>
                </span>
              </a>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>
            <div class="info-box-content">
              <a href="<?php echo base_url('/pesan') ?>">
                <span class="info-box-text text-dark">Pesan / Saran Masuk</span>
                <span class="info-box-number">Belum ada</span>
              </a>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
            <div class="info-box-content">
              <a href="<?php echo base_url('/layanan') ?>">
                <span class="info-box-text text-dark">Kategori Layanan </span>
                <span class="info-box-number">
                  <?php
                  $y = 0;
                  foreach ($layanan as $l) {
                    if ($l['is_active'] == 1) {
                      $y = $y + 1;
                    }
                  }
                  echo $y;; ?>
                </span>
              </a>
            </div>
          </div>
        </div>

      </div>

      <div class="row">
        <?php foreach ($layanan as $l) : ?>

          <?php if ($l['is_active'] == 1) { ?>
            <div class="col-md-4 col-sm-6 col-12">
              <div class="card card-widget widget-user-2 shadow-sm">
                <div class="widget-user-header bg-info">
                  <div class="widget-user-image">
                    <img class="img-circle elevation-2" src="<?= base_url('Image/Layanan' . '/' . $l['gambar']); ?>" alt="User Avatar">
                  </div>
                  <a href="<?= base_url('tenaga_ahli'); ?>">
                    <h3 class="widget-user-username"><?= $l['layanan']; ?></h3>
                    <h5 class="widget-user-desc">Iklan</h5>
                  </a>
                </div>

                <div class="card-footer p-0">
                  <?php foreach ($sublayanan as $sl) : ?>
                    <?php if (($l['nolayanan'] == $sl['nolayanan']) && $sl['is_active'] == 1) { ?>
                      <ul class="nav flex-column">
                        <li class="nav-item">

                          <a href="<?= base_url(); ?>/<?= $sl['url']; ?>/<?= $l['layanan']; ?>/<?= $l['nolayanan']; ?>/<?= $sl['sublayanan']; ?>/<?= $sl['nosublayanan']; ?>" class="nav-link">
                            <?= $sl['sublayanan']; ?> <span class="float-right badge bg-primary">

                              <?php
                              $iklan = 0;
                              foreach ($iklanproperty as $ip) {
                                if ($ip['nosublayanan'] == $sl['nosublayanan'] && $ip['is_active'] == 1) {
                                  $iklan = $iklan + 1;
                                }
                              }
                              if ($iklan > 0) {
                                echo $iklan;
                              }

                              $iklan = 0;
                              foreach ($iklancarikerja as $ik) {
                                if ($ik['nosublayanan'] == $sl['nosublayanan'] && $ik['is_active'] == 1) {
                                  $iklan = $iklan + 1;
                                }
                              }
                              if ($iklan > 0) {
                                echo $iklan;
                              }

                              $iklan = 0;
                              foreach ($iklanmobilmotor as $im) {
                                if ($im['nosublayanan'] == $sl['nosublayanan'] && $im['is_active'] == 1) {
                                  $iklan = $iklan + 1;
                                }
                              }
                              if ($iklan > 0) {
                                echo $iklan;
                              }
                              ?>


                            </span>
                          </a>

                        </li>
                      </ul>
                    <?php }; ?>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          <?php }; ?>

        <?php endforeach; ?>
      </div>


        <a href=" <?php base_url() ?>/administrator-area/dashboard/create">
          <button class="btn btn-primary">Tambah Data</button>
        </a>     
        <div class="row">
            <div class="col-md-12">
              <div class="card">
                <table class="table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Image</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                       <?php $no = 1; ?>
                     <?php foreach($slider as $slide): ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td> <?= $slide['title'] ?></td>
                      <td> <?= $slide['description'] ?></td>
                      <td> <?= $slide['image'] ?></td>
                      <td>
                        <a href="<?= base_url(''); ?>/administrator-area/edit/<?= $slide['id_slider']; ?>">
                          <button class="btn btn-primary">Update</button>
                        </a>
                        <form action="<?= base_url(''); ?>/administrator-area/delete/<?= $slide['id_slider']; ?>" method="post">
                          <input type="hidden" name="id" value=" <?= $slide['id_slider'] ?>">
                          <a href=" <?php  ?>">
                            <button class="btn btn-danger">Hapus</button>
                          </a>
                        </form>
                      </td>
                    </tr>
                  </tbody>
                  <?php endforeach; ?>
                </table>
              </div>
            </div>
          </div>
            





      <!-- /.container-fluid -->
  </section>
  <!-- /.content -->

</div>
<!-- /.content-wrapper -->

<?php echo $this->endSection(); ?>