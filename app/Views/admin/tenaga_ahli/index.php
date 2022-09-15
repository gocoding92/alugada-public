<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">List Tenaga Ahli</h1>
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
              </h3>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Bidang Profesi</th>
                    <th>Nama Lengkap</th>
                    <th>Tanggal Lahir</th>
                    <th>Pendidikan</th>
                    <!-- <th>Url</th> -->
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  <?php foreach ($tenaga as $tenaga_ahli) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $tenaga_ahli['bidang_profesi']; ?></td>
                      <td><?= $tenaga_ahli['nama_lengkap']; ?></td>
                      <td><?= $tenaga_ahli['tanggal_lahir']; ?></td>
                      <td><?= $tenaga_ahli['pendidikan']; ?></td>
                      <td>
                        <a href="<?= base_url(''); ?>/tenaga_ahli/detail/<?= $tenaga_ahli['id']; ?>">
                          <span class="right badge badge-primary"><i class="fa fa-edit"></i> Detail</span>
                        </a>
                      </td>
                    </tr>
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