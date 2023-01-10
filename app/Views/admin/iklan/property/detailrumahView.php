<?php echo $this->extend('admin/layout/template'); ?>

<?php echo $this->section('content-admin'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><?= $detailrumah['juduliklan']; ?></h1>
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
            <img src="<?= base_url('Image/iklan/rumah/' . $detailrumah['image_1']); ?>" class="card-img-top" alt="...">
          </div>
        </div>
        <div class="col-2">
          <div class="card" style="width: 100%;">
            <img src="<?= base_url('Image/iklan/rumah/' . $detailrumah['image_2']); ?>" class="card-img-top" alt="...">
          </div>
        </div>
        <div class="col-2">
          <div class="card" style="width: 100%;">
            <img src="<?= base_url('Image/iklan/rumah/' . $detailrumah['image_3']); ?>" class="card-img-top" alt="...">
          </div>
        </div>
        <div class="col-2">
          <div class="card" style="width: 100%;">
            <img src="<?= base_url('Image/iklan/rumah/' . $detailrumah['image_4']); ?>" class="card-img-top" alt="...">
          </div>
        </div>
        <div class="col-2">
          <div class="card" style="width: 100%;">
            <img src="<?= base_url('Image/iklan/rumah/' . $detailrumah['image_5']); ?>" class="card-img-top" alt="...">
          </div>
        </div>
        <div class="col-2">
          <div class="card" style="width: 100%;">
            <img src="<?= base_url('Image/iklan/rumah/' . $detailrumah['image_6']); ?>" class="card-img-top" alt="...">
          </div>
        </div>

      </div>
      <div class="row">
        <!-- <h5>Iklan Rumah</h5> -->
        <div class="col-3">
          <div class="card" style="width: 100%;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><?= $detailrumah['deskripsi']; ?></li>
              <li class="list-group-item">LT / LB : <?= $detailrumah['luastanah'] . ' / ' . $detailrumah['luasbangunan'] . ' - ' . $detailrumah['kepemilikan']; ?></li>
              <li class="list-group-item"><?= $detailrumah['listrik'] . ' Watt / ' . $detailrumah['aksesmobil']; ?></li>
              <li class="list-group-item">Kamar tidur : <?= $detailrumah['kamartidur']; ?></li>
              <li class="list-group-item">Kamar mandi : <?= $detailrumah['kamarmandi']; ?></li>
              <li class="list-group-item">Kamar pembantu : <?= $detailrumah['kamarpembantu']; ?></li>
            </ul>
            <!-- <div class="card-body">
                      <a href="#" class="card-link">Accept</a>
                      <a href="#" class="card-link">Reject</a>
                    </div> -->
          </div>
        </div>
        <div class="col-3">
          <div class="card" style="width: 100%;">
            <ul class="list-group list-group-flush">
              <!-- <li class="list-group-item">Dapur : <?php //echo $detailrumah['dapur']; ?></li> -->
              <li class="list-group-item">Ruang tamu : <?= $detailrumah['ruangtamu']; ?></li>
              <li class="list-group-item">Ruang keluarga : <?= $detailrumah['ruangkeluarga']; ?></li>
              <li class="list-group-item">Teras : <?= $detailrumah['teras']; ?></li>
              <li class="list-group-item">Garasi : <?= $detailrumah['garasi'] . ' ' . "Mobil"; ?></li>
              <li class="list-group-item">Carport : <?= $detailrumah['carport'] . ' ' . "Mobil"; ?></li>
            </ul>
          </div>
        </div>
        <div class="col-3">
          <div class="card" style="width: 100%;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Lokasi : <?= $detailrumah['lokasi']; ?></li>
              <li class="list-group-item">Harga (Rp) : <?= $detailrumah['harga']; ?></li>
            </ul>
          </div>
        </div>
      </div>
      <?php if($detailrumah['checked'] == 0){?>
        <a href="<?= base_url('acceptiklan' . '/' . $detailrumah['id'] . '/' . $user_id . '/' . $id_rekom. '/' . $detailrumah['nolayanan']. '/' . $detailrumah['nosublayanan'].'/'."0"); ?>" class="card-link">Accept</a>
        <a href="<?= base_url('acceptiklan' . '/' . $detailrumah['id'] . '/' . $user_id . '/' . $id_rekom. '/' . $detailrumah['nolayanan']. '/' . $detailrumah['nosublayanan'].'/'."1"); ?>" class="card-link">Reject</a>
      <?php };?>


    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php echo $this->endSection(); ?>