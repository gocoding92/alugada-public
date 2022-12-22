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
            <li class="breadcrumb-item"><a href="#">Home test</a></li>
            <li class="breadcrumb-item active">Dashboard v1 test</li>
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
            <!-- <div class="card-header">
              <h3 class="card-title">
                <a href="<?php //echo base_url(); 
                          ?>/iklan/create" class="btn btn-primary"><i class="fa fa-plus"></i> Add Iklan</a>
              </h3>
            </div> -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th><a href="#">User</a></th>
                    <th><a href="#">Pengiklan</a></th>
                    <th><a href="#">Total iklan</a></th>
                    <th><a href="#">Iklan Baru</a></th>
                    <th><a href="#">Iklan Aktif</a></th>
                    <th><a href="#">Iklan Tdk Aktif</a></th>
                    <th><a href="#">Iklan Suspend</a></th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?= $jmluser; ?></td>
                    <td><?= $jmlpengiklan; ?></td>
                    <td><?= $jmliklan; ?></td>
                    <td><?= $jmliklanbaru; ?></td>
                    <td><?= $jmliklanaktif; ?></td>
                    <td><?= $jmliklantdkaktif; ?></td>
                    <td><?= $jmliklansuspend; ?></td>
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