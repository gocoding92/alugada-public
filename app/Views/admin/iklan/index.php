<?php echo $this->extend('admin/layout/template'); ?>

<?php echo $this->section('content-admin'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Iklan Baru</h1>
        </div> -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">

      <div class="row">
        <!-- <h5>Iklan Rumah</h5> -->

          <?php foreach($rumah as $r) :?>
              <?php if($r['checked'] == 0 or $r['checked'] == "" or $r['checked'] == NULL ){?>
                <div class="col">
                    <div class="card" style="width: 100%;">
                      <img src="<?= base_url('Image/iklan/rumah/'.$r['image_1']);?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title"><?= $r['juduliklan'];?></h5>
                      </div>
                      <div class="card-body">
                        <a href="<?= base_url('detailiklanrumahbaru').'/'.$r['id'];?>" class="card-link">Detail</a>
                      </div>
                    </div> 
                </div>
              <?php };?>

          <?php endforeach;?>

      </div>

    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php echo $this->endSection(); ?>