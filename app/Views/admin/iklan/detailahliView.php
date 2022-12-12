<?php echo $this->extend('admin/layout/template'); ?>

<?php echo $this->section('content-admin'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><?= $detailahli['nama_lengkap'];?></h1>
        </div> -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-2">
                <div class="card" style="width: 100%;">
                    <img src="<?= base_url('Image/iklan/tenaga_ahli/'.$detailahli['image_1']);?>" class="card-img-top" alt="...">
                </div>             
            </div>
            <div class="col-2">
                <div class="card" style="width: 100%;">
                    <img src="<?= base_url('Image/iklan/tenaga_ahli/'.$detailahli['image_2']);?>" class="card-img-top" alt="...">
                </div>             
            </div>
            <div class="col-2">
                <div class="card" style="width: 100%;">
                    <img src="<?= base_url('Image/iklan/tenaga_ahli/'.$detailahli['image_3']);?>" class="card-img-top" alt="...">
                </div>             
            </div>
            <div class="col-2">
                <div class="card" style="width: 100%;">
                    <img src="<?= base_url('Image/iklan/tenaga_ahli/'.$detailahli['image_4']);?>" class="card-img-top" alt="...">
                </div>             
            </div>
            <div class="col-2">
                <div class="card" style="width: 100%;">
                    <img src="<?= base_url('Image/iklan/tenaga_ahli/'.$detailahli['image_5']);?>" class="card-img-top" alt="...">
                </div>             
            </div>
            <div class="col-2">
                <div class="card" style="width: 100%;">
                    <img src="<?= base_url('Image/iklan/tenaga_ahli/'.$detailahli['image_6']);?>" class="card-img-top" alt="...">
                </div>             
            </div>

        </div>
        <div class="row">
        <!-- <h5>Iklan Rumah</h5> -->
              <div class="col-3">
                  <div class="card" style="width: 100%;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Nama : <?= $detailahli['nama_lengkap'];?></li>
                        <li class="list-group-item">User Id : <?= $user_id;?></li>
                        <li class="list-group-item">Id Rekom : <?= $id_rekom;?></li>
                    </ul>
                    <div class="card-body">
                      <a href="<?= base_url('acceptiklan'.'/'.$detailahli['id'].'/'.$user_id.'/'.$id_rekom);?>" class="card-link">Accept</a>
                      <a href="<?= base_url('rejectiklan'.'/'.$detailahli['id'].'/'.$user_id.'/'.$id_rekom);?>" class="card-link">Reject</a>
                    </div>
                  </div> 
              </div>
              <div class="col-3">
                  <div class="card" style="width: 100%;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Tgl Lahir : <?php echo $detailahli['tanggal_lahir'];?></li>
                        <li class="list-group-item">Pendidikan : <?php echo $detailahli['pendidikan'];?></li>
                        <li class="list-group-item">Jurusan : <?php echo $detailahli['jurusan'];?></li>
                    </ul>
                  </div> 
              </div>

        <!-- </div>
            <a href="<?php //echo base_url('acceptiklan').'/'.$detailahli['idpengiklan'];?>" class="card-link">Accept</a>
            <a href="<?php //echo base_url('rejectiklan').'/'.$detailahli['idpengiklan'];?>" class="card-link">Reject</a>

        </div> -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php echo $this->endSection(); ?>