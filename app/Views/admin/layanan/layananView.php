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
                <a href="<?= base_url('tambahlayanan'); ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Layanan</a>
              </h3>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No Layanan</th>
                    <th>Layanan</th>
                    <th>Gambar</th>
                    <th>Url</th>
                    <th>Aktifasi</th>
                    <th>Action</th>

                  </tr>
                </thead>
                <tbody>

                    <?php foreach($layanan as $l):?>
                        <tr>
                            <td><?= $l['nolayanan'];?></td>
                            <td><?= $l['layanan'];?></td>
                            <td>
                                <img style="width:50px" src="<?= base_url('Image/Layanan/'.$l['gambar']);?>" alt="">
                            </td>
                            <td><?= $l['url'];?></td>
                            <td><?= $l['is_active'];?></td>
                            <td>
                            <a href="<?= base_url(''); ?>/iklan/update">
                                <span class="right badge badge-primary"><i class="fa fa-edit"></i> Edit</span>
                            </a>
                            <?php if($l['is_active']){?>
                                <a href="<?= base_url('aktifasilayanan'.'/'.$l['nolayanan']);?>" class="right badge badge-danger"><i class="fa fa-trash"></i> Take Down</a>
                            <?php }else{?>
                                <a href="<?= base_url('aktifasilayanan'.'/'.$l['nolayanan']);?>" class="right badge badge-danger"><i class="fa fa-trash"></i> Aktifkan</a>
                            <?php };?>
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