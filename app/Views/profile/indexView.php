<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="home-page" class="row-sm padding-bottom-90">
  <!-- <h1 class="margin-left-16"> <i class="fa fa-user"></i>&nbsp; <?php //echo $pengunjung['nama'];?> </h1> -->
  <div class="row">
    <hr />
    <?php if($pengunjung['role'] == 1){?>
        <div class="margin-bottom-12 padding-right-46">
            <a class="text-decoration-none textcolor-433e3e" href="<?= base_url('index-layanan'); ?>">
              <p1 class="padding-left-16"> <i class="fa fa-list-alt"></i>&nbsp; Tambah Sublayanan</p1>
            </a>
        </div>
    <?php };?>
    <hr />
    <div class="margin-bottom-12 padding-right-46">
      <a class="text-decoration-none textcolor-433e3e" href="<?= base_url('data-iklan'); ?>">
        <p1 class="padding-left-16"> <i class="fa fa-list-alt"></i>&nbsp; Iklan Anda</p1>
      </a>
    </div>
    <hr />
    <div class="margin-bottom-12 padding-right-46">
      <a class="text-decoration-none textcolor-433e3e" href="<?= base_url('edit-profile'); ?>">
        <p1 class="padding-left-16"> <i class="fa fa-edit"></i>&nbsp; Edit Profile</p1>
      </a>
    </div>
    <hr />
    <div class="margin-bottom-12 padding-right-46">
      <a class="text-decoration-none textcolor-433e3e" href="<?= base_url('edit-password'); ?>">
        <p1 class="padding-left-16"> <i class="fa fa-pencil"></i>&nbsp; Edit Password</p1>
      </a>
    </div>
    <hr />
    <div class="margin-bottom-12 padding-right-46">
      <a class="text-decoration-none textcolor-433e3e" href="<?= base_url('/'); ?>">
        <p1 class="padding-left-16"> <i class="fa fa-pencil"></i>&nbsp; Kembali</p1>
      </a>
    </div>
    <hr />
    <div class="margin-bottom-12 padding-right-46">
      <a class="text-decoration-none textcolor-433e3e" href="#">
        <p1 class="padding-left-16" data-bs-toggle="modal" data-bs-target="#modal-logout"> <i class="fa fa-sign-out"></i>&nbsp; Logout</p1>
      </a>
    </div>
    <hr />
  </div>
</div>



<!-- Modal Logout ----------- Modal ketiga -->
<div class="modal" id="modal-logout">
    <div class="modal-dialog">
        <div class="modal-content bg-info">

            <!-- Modal Header -->
            <div class="modal-header">
                <h6 class="modal-title">Logout</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="row mb-3">

                    <p1>Benar ingin Keluar ?</p1>

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <a href="<?= base_url('logout'); ?>" class="btn btn-primary">Logout</a>

                </div>
            </div>
            <!-- Batas Modal Body -->

        </div>
    </div>
</div>
<!-- Batas Modal Logout -->




<?= $this->endSection(); ?>