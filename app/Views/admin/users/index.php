<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Users / Pengguna</h1>
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
                <a href="<?= base_url(); ?>/users/create" class="btn btn-primary"><i class="fa fa-plus"></i> Add Users</a>
              </h3>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>No Handphone</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>No Rek</th>
                    <th>Gopay</th>
                    <th>Ovo</th>
                    <th>Suspend</th>
                    <th>Is Active</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Pakde Harto</td>
                    <td>2022-07-02</td>
                    <td>Laki-Laki</td>
                    <td>08811501574</td>
                    <td>aman@gmail.com</td>
                    <td>123</td>
                    <td>10</td>
                    <td>.</td>
                    <td>.</td>
                    <td>.</td>
                    <td>0</td>
                    <td>1</td>
                    <td>
                      <a href="<?= base_url(''); ?>/users/update">
                        <span class="right badge badge-primary"><i class="fa fa-edit"></i> Update</span>
                      </a>
                      <a href="">
                        <span class="right badge badge-danger"><i class="fa fa-trash"></i> Delete</span>
                      </a>
                    </td>
                  </tr>
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