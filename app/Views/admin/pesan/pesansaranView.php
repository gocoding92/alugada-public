<?php echo $this->extend('admin/layout/template'); ?>

<?php echo $this->section('content-admin'); ?>


<?php
// var_dump($slider);
?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Pesan / Saran Masuk</h1>
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
                    <th>id</th>
                    <th>Pengirim</th>
                    <!-- <th>Nama</th> -->
                    <th>Pesan</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=0;?>
                  <?php foreach($pesan as $pesan):?>
                      <tr>
                        <td><?= $pesan['id_pesan'];?></td>
                        <td><?= $pesan['id_pemilik'];?></td>
                        <!-- <td><?php //echo $pesan['nama'];?></td> -->
                        <td><?= $pesan['pesan'];?></td>
                        <td><?= $pesan['created_at'];?></td>
                        <td>
                            <a class="btn btn-primary" href="<?= base_url('admin-balas-pesan/'.$pesan['id_pesan'].'/'.$pesan['id_pemilik']);?>">Balas</a> 
                            <a class="btn btn-warning" href="<?= base_url('admin-warning-pesan');?>">Warning</a>  
                            <a class="btn btn-danger" href="<?= base_url('admin-block-pesan');?>">Block</a>
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





<!-- Content Wrapper. Contains page content -->
<!-- <div class="content-wrapper"> -->
  <!-- Content Header (Page header) -->
  <!-- <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Pesan / Saran Masuk</h1>
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
  <!-- <section class="content">
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
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Pesan</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Abdul Rahman</td>
                    <td>085809052137</td>
                    <td>abdulrahman251201@gmailcom</td>
                    <td>Komplek Inkopad Blok 05 No 17</td>
                    <td>Tambahin lagi fiturnya agar proses transaksi lebih mudah makasih.</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>


    </div>
  </section> -->
  <!-- /.content -->
<!-- </div> -->
<!-- /.content-wrapper -->



<?php echo $this->endSection(); ?>