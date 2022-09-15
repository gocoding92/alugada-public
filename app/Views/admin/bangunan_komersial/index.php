<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
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
                            </h3>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Iklan</th>
                                        <th>Luas Tanah</th>
                                        <th>Luas Bangunan</th>
                                        <th>Kepemilikan</th>
                                        <th>Jumlah Lantai</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach($bangunan_komersial as $bangunan_komersiall) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $bangunan_komersiall['juduliklan']; ?></td>
                                        <td><?= $bangunan_komersiall['luastanah']; ?></td>
                                        <td><?= $bangunan_komersiall['luasbangunan']; ?></td>
                                        <td><?= $bangunan_komersiall['kepemilikan']; ?></td>
                                        <td><?= $bangunan_komersiall['jumlahlantai']; ?></td>
                                        <td>
                                            <a href="<?= base_url(''); ?>/bangunan_komersial/detail/<?= $bangunan_komersiall['id']; ?>">
                                                <span class="right badge badge-primary"><i class="fa fa-edit"></i> Detail</span>
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

<?php echo $this->endSection(); ?>