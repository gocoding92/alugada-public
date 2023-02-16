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
                <a href="<?php echo base_url('tambahlayanan'); ?>" class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah-layanan"><i class="fa fa-plus"></i> Tambah Layanan Test</a>


                <!-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default" onclick="testcoba(100)">
                  Launch Default Modal
                </button> -->

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

                  <?php foreach ($layanan as $l) : ?>
                    <tr>
                      <td><?= $l['nolayanan']; ?></td>
                      <td><a href="<?= "admin-sub-layanan".'/'.$l['nolayanan'];?>"><?= $l['layanan'];?></a></td>
                      <td>
                        <img style="width:50px" src="<?= base_url('Image/Layanan/' . $l['gambar']); ?>" alt="">
                      </td>
                      <td><?= $l['url']; ?></td>
                      <td><?= $l['is_active']; ?></td>
                      <td>
                        <!-- <a href="<?php //echo base_url('editlayanan' . '/' . $l['nolayanan']);
                                      ?>">
                                <span class="right badge badge-primary" ><i class="fa fa-edit"></i> Edit</span>
                            </a> -->
                        <a href="#" data-toggle="modal" data-target="#modal-edit-layanan" onclick="edit_layanan('<?= $l['layanan']; ?>','<?= $l['gambar']; ?>','<?= $l['url']; ?>','<?= $l['nolayanan']; ?>','<?= $l['detaillayanan']; ?>')">
                          <span class="right badge badge-primary"><i class="fa fa-edit"></i> Edit</span>
                        </a>

                        <?php if ($l['is_active']) { ?>
                          <a href="<?= base_url('aktifasilayanan' . '/' . $l['nolayanan']); ?>" class="right badge badge-danger"><i class="fa fa-trash"></i> Take Down</a>
                        <?php } else { ?>
                          <a href="<?= base_url('aktifasilayanan' . '/' . $l['nolayanan']); ?>" class="right badge badge-danger"><i class="fa fa-trash"></i> Aktifkan</a>
                        <?php }; ?>
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


<!-- Modal Tambah Layanan -->

<div class="modal fade" id="modal-tambah-layanan">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Layanan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- <p>One fine body&hellip;</p> -->

        <form method="post" action="<?= base_url('admin-tambah-layanan'); ?>" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="tambahnolayanan" class="form-label">No Layanan</label>
            <input readonly type="text" class="form-control" id="tambahnolayanan" name="tambahnolayanan" value="<?= $l['nolayanan'] + 100; ?>">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
          </div>

          <div class="mb-3">
            <label for="tambahlayanan" class="form-label">Layanan</label>
            <input type="text" class="form-control" id="tambahlayanan" name="tambahlayanan" placeholder="Tulis layanan ...">
          </div>
          <div class="mb-3">
            <label for="tambahdetaillayanan" class="form-label">Detail Layanan</label>
            <input type="text" class="form-control" id="tambahdetaillayanan" name="tambahdetaillayanan" placeholder="Tulis Detail Layanan ...">
          </div>
          <div class="mb-3">
            <label for="tambahturl" class="form-label">Url</label>
            <input type="text" class="form-control" id="tambahurl" name="tambahurl" placeholder="Tulis url ...">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
          </div>

          <div class="row mb-2">
            <div class="col-4">
              <label for="tambahgambar" class="form-label">Gambar</label>
            </div>
            <div class="col-3">
              <div class="margin-bottom-12 padding-right-46 padding-left-16">
                <img src="<?php echo base_url('Image/Layanan/default.png'); ?>" class="img-preview-tambah" style="width:50px" id="img-preview-tambah">
                <input type="file" class="form-control" id="gambartambah" name="gambartambah" onchange="previewgambartambahlayanan()">
              </div>
            </div>
          </div>

          <!-- <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div> -->

          <!-- <div class="modal-footer justify-content-between"> -->
          <div class="modal-footer justify-end">
            <button type="button" class="btn btn-success" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Tambah Layanan</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>

<!-- Modal Edit Layanan -->

<div class="modal fade" id="modal-edit-layanan">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Edit Layanan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- <p>One fine body&hellip;</p> -->

        <form method="post" action="<?= base_url('admin-edit-layanan'); ?>" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="noeditlayanan" class="form-label">No Layanan</label>
            <input type="text" class="form-control" id="editnolayanan" name="editnolayanan">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
          </div>
          <div class="mb-3">
            <label for="editlayanan" class="form-label">Layanan</label>
            <input type="text" class="form-control" id="editlayanan" name="editlayanan">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
          </div>
          <div class="mb-3">
            <label for="editdetaillayanan" class="form-label">Detail Layanan</label>
            <input type="text" class="form-control" id="editdetaillayanan" name="editdetaillayanan">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
          </div>
          <div class="mb-3">
            <label for="editurl" class="form-label">Url</label>
            <input type="text" class="form-control" id="editurl" name="editurl">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
          </div>

          <div class="row mb-2">
            <div class="col-4">
              <label for="gambar" class="form-label">Gambar</label>
            </div>
            <div class="col-3">
              <div class="margin-bottom-12 padding-right-46 padding-left-16">
                <img class="img-preview" style="width:50px" id="img-preview">
                <input type="file" class="form-control" id="gambar" name="gambar" onchange="previewgambareditlayanan()">
              </div>
            </div>
          </div>

          <!-- <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div> -->

          <div class="modal-footer justify-content-between">
            <!-- <div class="modal-footer justify-end"> -->
            <button type="button" class="btn btn-success" data-dismiss="modal">Batal</button>
            <!-- <button type="submit" class="btn btn-primary">Edit Layanan</button> -->
            <button type="submit" class="btn btn-primary">Edit Layanan</button>

          </div>
        </form>

      </div>
    </div>
  </div>
</div>

<?php echo $this->endSection(); ?>