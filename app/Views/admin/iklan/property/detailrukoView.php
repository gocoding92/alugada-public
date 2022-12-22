<?php echo $this->extend('admin/layout/template'); ?>

<?php echo $this->section('content-admin'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><?= $detailruko['juduliklan']; ?></h1>
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
            <img src="<?= base_url('Image/iklan/ruko/' . $detailruko['image_1']); ?>" class="card-img-top" alt="...">
          </div>
        </div>
        <div class="col-2">
          <div class="card" style="width: 100%;">
            <img src="<?= base_url('Image/iklan/ruko/' . $detailruko['image_2']); ?>" class="card-img-top" alt="...">
          </div>
        </div>
        <div class="col-2">
          <div class="card" style="width: 100%;">
            <img src="<?= base_url('Image/iklan/ruko/' . $detailruko['image_3']); ?>" class="card-img-top" alt="...">
          </div>
        </div>
        <div class="col-2">
          <div class="card" style="width: 100%;">
            <img src="<?= base_url('Image/iklan/ruko/' . $detailruko['image_4']); ?>" class="card-img-top" alt="...">
          </div>
        </div>
        <div class="col-2">
          <div class="card" style="width: 100%;">
            <img src="<?= base_url('Image/iklan/ruko/' . $detailruko['image_5']); ?>" class="card-img-top" alt="...">
          </div>
        </div>
        <div class="col-2">
          <div class="card" style="width: 100%;">
            <img src="<?= base_url('Image/iklan/ruko/' . $detailruko['image_6']); ?>" class="card-img-top" alt="...">
          </div>
        </div>

      </div>
      <div class="row">
        <!-- <h5>Iklan ruko</h5> -->
        <div class="col-3">
          <div class="card" style="width: 100%;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><?= $detailruko['deskripsi']; ?></li>
              <!-- <li class="list-group-item">LT/LB : <?php //echo $detailruko['luasruko'].'/'.$detailruko['luasbangunan'];
                                                        ?></li> -->
              <li class="list-group-item">LT/LB : <?= $detailruko['luastanah'] . ' / ' . $detailruko['luasbangunan'] . ' - ' . $detailruko['kepemilikan']; ?></li>
            </ul>
          </div>
        </div>
        <div class="col-3">
          <div class="card" style="width: 100%;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Jumlah lantai : <?= $detailruko['jumlahlantai']; ?></li>
              <li class="list-group-item">Kamar mandi : <?= $detailruko['kamarmandi']; ?></li>
              <li class="list-group-item">Carport : <?= $detailruko['carport']; ?></li>
            </ul>
          </div>
        </div>
        <div class="col-3">
          <div class="card" style="width: 100%;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Listrik : <?= $detailruko['listrik']; ?> Watt</li>
              <li class="list-group-item">Telephone : <?= $detailruko['telephone']; ?> Line</li>
              <li class="list-group-item">Harga (Rp) : <?= $detailruko['harga']; ?></li>
            </ul>
          </div>
        </div>

      </div>
      <a href="<?= base_url('acceptiklan' . '/' . $detailruko['id'] . '/' . $user_id . '/' . $id_rekom . '/' . $detailruko['nolayanan'] . '/' . $detailruko['nosublayanan'] . '/' . "0"); ?>" class="card-link">Accept</a>
      <a href="<?= base_url('acceptiklan' . '/' . $detailruko['id'] . '/' . $user_id . '/' . $id_rekom . '/' . $detailruko['nolayanan'] . '/' . $detailruko['nosublayanan'] . '/' . "1"); ?>" class="card-link">Reject</a>

    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php echo $this->endSection(); ?>