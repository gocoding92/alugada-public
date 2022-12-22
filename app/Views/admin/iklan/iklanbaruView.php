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
        </div>
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- <h5>Iklan Rumah</h5> -->


      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">User Id</th>
            <th scope="col">No Layanan</th>
            <th scope="col">No Sub Layanan</th>
            <th scope="col">Id Iklan</th>
            <th scope="col">Type Rekomendasi</th>
            <th scope="col">Action</th>

          </tr>
        </thead>

        <tbody>
          <?php foreach ($iklanbaru as $r) : ?>
            <tr>
              <?php if ($r['checked'] == 0 or $r['checked'] == "" or $r['checked'] == NULL) { ?>
                <th scope="row"><?= $r['id_rekomendasi_iklan']; ?></th>
                <td>
                  <p><?= $r['user_id']; ?></p>
                </td>
                <td><?php echo $r['nolayanan'];?></td>
                <td><?php echo $r['nosublayanan']; ?></td>
                <td><?= $r['id_iklan'];?></td>
                <td><?= $r['type_rekomendasi_iklan']; ?></td>
                <td><a href="<?= base_url('detailiklanbaru/' . $r['id_iklan'] . '/' . $r['user_id'] . '/' . $r['id_rekomendasi_iklan'] . '/' .$r['nolayanan'].'/'.$r['nosublayanan']) ?>">Detail</button></td>
              <?php }; ?>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>



    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php echo $this->endSection(); ?>