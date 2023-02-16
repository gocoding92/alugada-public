<?php echo $this->extend('admin/layout/template'); ?>

<?php echo $this->section('content-admin'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><?= $detailmotor['judul_iklan'];?></h1>
        </div>
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
                    <img src="<?= base_url('Image/iklan/motor/'.$detailmotor['image_1']);?>" class="card-img-top" alt="...">
                </div>             
            </div>
            <div class="col-2">
                <div class="card" style="width: 100%;">
                    <img src="<?= base_url('Image/iklan/motor/'.$detailmotor['image_2']);?>" class="card-img-top" alt="...">
                </div>             
            </div>
            <div class="col-2">
                <div class="card" style="width: 100%;">
                    <img src="<?= base_url('Image/iklan/motor/'.$detailmotor['image_3']);?>" class="card-img-top" alt="...">
                </div>             
            </div>
            <div class="col-2">
                <div class="card" style="width: 100%;">
                    <img src="<?= base_url('Image/iklan/motor/'.$detailmotor['image_4']);?>" class="card-img-top" alt="...">
                </div>             
            </div>
            <div class="col-2">
                <div class="card" style="width: 100%;">
                    <img src="<?= base_url('Image/iklan/motor/'.$detailmotor['image_5']);?>" class="card-img-top" alt="...">
                </div>             
            </div>
            <div class="col-2">
                <div class="card" style="width: 100%;">
                    <img src="<?= base_url('Image/iklan/motor/'.$detailmotor['image_6']);?>" class="card-img-top" alt="...">
                </div>             
            </div>

        </div>
        <div class="row">
        <!-- <h5>Iklan motor</h5> -->
              <div class="col-3">
                  <div class="card" style="width: 100%;">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item"><?php echo $detailmotor['deskripsi'];?></li>
                      <li class="list-group-item"><?= $detailmotor['merk'].' / '.$detailmotor['type'].' / '.$detailmotor['tahun'];?></li>
                      <li class="list-group-item"><?= $detailmotor['warna'].' / '.$detailmotor['bahan_bakar'].' / Km : '.$detailmotor['odometer'];?></li>
                      <li class="list-group-item"><?php echo "Harga : ".$detailmotor['harga'];?></li>
                    </ul>
                  </div> 
              </div>

        </div>
        <?php if($detailmotor['checked'] == 0){?>
          <a href="<?= base_url('acceptiklan' . '/' . $detailmotor['id'] . '/' . $user_id . '/' . $id_rekom . '/' . $detailmotor['nolayanan'] . '/' . $detailmotor['nosublayanan'] . '/' . "0"); ?>" class="card-link">Accept</a>
          <a href="<?= base_url('acceptiklan' . '/' . $detailmotor['id'] . '/' . $user_id . '/' . $id_rekom . '/' . $detailmotor['nolayanan'] . '/' . $detailmotor['nosublayanan'] . '/' . "1"); ?>" class="card-link">Reject</a>
        <?php };?>


    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php echo $this->endSection(); ?>