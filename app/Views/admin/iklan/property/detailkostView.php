<?php echo $this->extend('admin/layout/template'); ?>

<?php echo $this->section('content-admin'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><?= $detailkost['judul_iklan'];?></h1>
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
                    <img src="<?= base_url('Image/iklan/kost&kontrakan/'.$detailkost['image_1']);?>" class="card-img-top" alt="...">
                </div>             
            </div>
            <div class="col-2">
                <div class="card" style="width: 100%;">
                    <img src="<?= base_url('Image/iklan/kost&kontrakan/'.$detailkost['image_2']);?>" class="card-img-top" alt="...">
                </div>             
            </div>
            <div class="col-2">
                <div class="card" style="width: 100%;">
                    <img src="<?= base_url('Image/iklan/kost&kontrakan/'.$detailkost['image_3']);?>" class="card-img-top" alt="...">
                </div>             
            </div>
            <div class="col-2">
                <div class="card" style="width: 100%;">
                    <img src="<?= base_url('Image/iklan/kost&kontrakan/'.$detailkost['image_4']);?>" class="card-img-top" alt="...">
                </div>             
            </div>
            <div class="col-2">
                <div class="card" style="width: 100%;">
                    <img src="<?= base_url('Image/iklan/kost&kontrakan/'.$detailkost['image_5']);?>" class="card-img-top" alt="...">
                </div>             
            </div>
            <div class="col-2">
                <div class="card" style="width: 100%;">
                    <img src="<?= base_url('Image/iklan/kost&kontrakan/'.$detailkost['image_6']);?>" class="card-img-top" alt="...">
                </div>             
            </div>

        </div>
        <div class="row">
        <!-- <h5>Iklan kost</h5> -->
              <div class="col-3">
                  <div class="card" style="width: 100%;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?php echo $detailkost['deskripsi'];?></li>
                        <li class="list-group-item"><?php echo "Lokasi : ".$detailkost['alamat_lokasi'];?></li>
                        <li class="list-group-item"><?php echo "Kamar kosong : ".$detailkost['kamar_kosong'];?></li>
                      </ul>
                    </div> 
                  </div>
                  <div class="col-3">
                    <div class="card" style="width: 100%;">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">AC : <?php echo $detailkost['ac'];?></li>
                        <li class="list-group-item">Tempat tidur : <?php echo $detailkost['tempat_tidur'];?></li>
                        <li class="list-group-item">Meja-Kursi : <?php echo $detailkost['meja_kursi'];?></li>
                        <li class="list-group-item">Almari : <?php echo $detailkost['almari'];?></li>
                      </ul>
                    </div> 
                  </div>
                  <div class="col-3">
                    <div class="card" style="width: 100%;">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">Kamar mandi : <?= $detailkost['kamar_mandi'];?></li>
                        <li class="list-group-item">Air panas : <?= $detailkost['water_heater'];?></li>
                        <li class="list-group-item">Harga : <?= $detailkost['harga'].' '.$detailkost['unitharga'];?></li>
                        <!-- <li class="list-group-item">Kamar mandi : <?php //echo $detailkost['kamarmandi'];?></li> -->
                    </ul>
                  </div> 
              </div>

        </div>
        <?php if($detailkost['checked'] == 0){?>
          <a href="<?= base_url('acceptiklan' . '/' . $detailkost['id'] . '/' . $user_id . '/' . $id_rekom . '/' . $detailkost['nolayanan'] . '/' . $detailkost['nosublayanan'] . '/' . "0"); ?>" class="card-link">Accept</a>
          <a href="<?= base_url('acceptiklan' . '/' . $detailkost['id'] . '/' . $user_id . '/' . $id_rekom . '/' . $detailkost['nolayanan'] . '/' . $detailkost['nosublayanan'] . '/' . "1"); ?>" class="card-link">Reject</a>
        <?php };?>


    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php echo $this->endSection(); ?>