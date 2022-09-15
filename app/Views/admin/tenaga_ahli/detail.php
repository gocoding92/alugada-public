<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Tenaga Ahli</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <a href="<?= base_url(); ?>/tenaga_ahli" class="btn btn-default"><i class="fa fa-chevron-left"></i> Back to Tenaga Ahli</a>
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleinputnama">Bidang Profesi</label>
                                        <p><?= $tenaga['bidang_profesi']; ?></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleinputemail">Nama Lengkap</label>
                                        <p><?= $tenaga['nama_lengkap']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Tanggal Lahir</label>
                                        <p><?= $tenaga['tanggal_lahir']; ?></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Pedidikan</label>
                                        <p><?= $tenaga['pendidikan']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Jurusan</label>
                                        <p><?= $tenaga['jurusan']; ?></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Pengalaman Kerja</label>
                                        <p><?= $tenaga['pengalaman_kerja']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Domisili</label>
                                        <p><?= $tenaga['domisili']; ?></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Kecamatan</label>
                                        <p><?= $tenaga['kecamatan']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Kabupaten</label>
                                        <p><?= $tenaga['kabupaten']; ?></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Propinsi</label>
                                        <p><?= $tenaga['provinsi']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Deskripsi</label>
                                        <p><?= $tenaga['deskripsi']; ?></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Gaji</label>
                                        <p><?= $tenaga['gaji']; ?></p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Image</label>
                                        <div class="row mb-3">
                                            <div class="col-md-4">
                                                <img src="<?= base_url('Image/logo.jpg'); ?>" alt="aman">
                                            </div>
                                            <div class="col-md-4">
                                                <img src="<?= base_url('Image/logo.jpg'); ?>" alt="aman">
                                            </div>
                                            <div class="col-md-4">
                                                <img src="<?= base_url('Image/logo.jpg'); ?>" alt="aman">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="<?= base_url('Image/logo.jpg'); ?>" alt="aman">
                                            </div>
                                            <div class="col-md-4">
                                                <img src="<?= base_url('Image/logo.jpg'); ?>" alt="aman">
                                            </div>
                                            <div class="col-md-4">
                                                <img src="<?= base_url('Image/logo.jpg'); ?>" alt="aman">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php echo $this->endSection(); ?>