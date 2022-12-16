<?php echo $this->extend('admin/layout/template'); ?>

<?php echo $this->section('content-admin'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><?= $detailkomersial['juduliklan'];?></h1>
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
                    <img src="<?= base_url('Image/iklan/bangunan_komersial/'.$detailkomersial['image_1']);?>" class="card-img-top" alt="...">
                </div>             
            </div>
            <div class="col-2">
                <div class="card" style="width: 100%;">
                    <img src="<?= base_url('Image/iklan/komersial/'.$detailkomersial['image_2']);?>" class="card-img-top" alt="...">
                </div>             
            </div>
            <div class="col-2">
                <div class="card" style="width: 100%;">
                    <img src="<?= base_url('Image/iklan/komersial/'.$detailkomersial['image_3']);?>" class="card-img-top" alt="...">
                </div>             
            </div>
            <div class="col-2">
                <div class="card" style="width: 100%;">
                    <img src="<?= base_url('Image/iklan/komersial/'.$detailkomersial['image_4']);?>" class="card-img-top" alt="...">
                </div>             
            </div>
            <div class="col-2">
                <div class="card" style="width: 100%;">
                    <img src="<?= base_url('Image/iklan/komersial/'.$detailkomersial['image_5']);?>" class="card-img-top" alt="...">
                </div>             
            </div>
            <div class="col-2">
                <div class="card" style="width: 100%;">
                    <img src="<?= base_url('Image/iklan/komersial/'.$detailkomersial['image_6']);?>" class="card-img-top" alt="...">
                </div>             
            </div>

        </div>
        <div class="row">
        <!-- <h5>Iklan komersial</h5> -->
              <div class="col-3">
                  <div class="card" style="width: 100%;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><?= $detailkomersial['deskripsi'];?></li>
                        <li class="list-group-item">LT / LB : <?= $detailkomersial['luastanah'].' / '.$detailkomersial['luasbangunan'].' - '.$detailkomersial['kepemilikan'];?></li>
                    </ul>
                  </div> 
              </div>
              <div class="col-3">
                  <div class="card" style="width: 100%;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Listrik : <?php echo $detailkomersial['listrik'].' Watt';?></li>
                        <li class="list-group-item">Telephone : <?php echo $detailkomersial['telephone'].' Line';?></li>
                        <li class="list-group-item">Harga (Rp) : <?php echo $detailkomersial['harga'];?></li>
                    </ul>
                  </div> 
              </div>

        </div>
        <a href="<?= base_url('acceptiklan' . '/' . $detailkomersial['id'] . '/' . $user_id . '/' . $id_rekom . '/' . $detailkomersial['nolayanan'] . '/' . $detailkomersial['nosublayanan'] . '/' . "0"); ?>" class="card-link">Accept</a>
        <a href="<?= base_url('acceptiklan' . '/' . $detailkomersial['id'] . '/' . $user_id . '/' . $id_rekom . '/' . $detailkomersial['nolayanan'] . '/' . $detailkomersial['nosublayanan'] . '/' . "1"); ?>" class="card-link">Reject</a>

    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php echo $this->endSection(); ?>