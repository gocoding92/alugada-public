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
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#tambahtentangkami"><i class="fa fa-plus"></i> Tambah Tentang Kami</a>


                <!-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default" onclick="testcoba(100)">
                  Launch Default Modal
                </button> -->

              </h3>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Versi</th>
                    <th>Isi</th>
                    <th>Aktifasi</th>
                    <th>Action</th>

                  </tr>
                </thead>
                <tbody>

                  <?php foreach ($tentangkami as $l) : ?>
                    <tr>
                      <td><?= $l['versi'];?></a></td>
                      <td><?= $l['isi']; ?></td>
                      <td><?= $l['is_active']; ?></td>
                      <td>
                          <a href="<?= base_url('edit-tentang-kami'.'/'.$l['id']);?>">
                            <span class="right badge badge-primary"><i class="fa fa-edit"></i> Edit</span>
                          </a>

                          <a href="<?= base_url('aktifasi-tentangkami/'.$l['id'].'/'.$l['is_active']);?>">
                              <?php if($l['is_active']==0){?>
                                  <span class="right badge badge-danger"><i class="fa fa-edit"></i> Aktifkan</span>
                              <?php }elseif ($l['is_active']==1){?>
                                  <span class="right badge badge-danger"><i class="fa fa-edit"></i> Takedown</span>
                              <?php };?>
                          </a>

                      </td>
                    </tr>
                  <?php endforeach; ?>

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

<!-- Modal Tambah Tentang kami -->
<div class="modal fade" id="tambahtentangkami" tabindex="-1" aria-labelledby="tentangkamiLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="tentangkamiLabel">Tentang Kami</h1>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

          <form action="<?= base_url('tambah-tentang-kami');?>" method="post">

            <div class="row mb-1 mt-1">
                  <label for="versi" class="col-4 col-sm-3 col-form-label">Versi</label>
                  <div class="col-8 col-sm-10">
                      <input readonly name="versi" id="versi" value="<?= $l['versi']+1;?>">
                  </div>
              </div>
          
              <div class="row mb-1 mt-1">
                  <label for="isi" class="col-4 col-sm-3 col-form-label">Tentang Kami</label>
                  <div class="col-8 col-sm-10">
                      <textarea name="isi" id="isi" cols="50" rows="5" placeholder="Tulis isi tentang kami ............"></textarea>
                  </div>
              </div>
              <!-- <button type="submit" class="btn btn-primary">Tambah</button> -->
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
          </form>        

      </div>
    </div>
  </div>
</div>



<?php echo $this->endSection(); ?>