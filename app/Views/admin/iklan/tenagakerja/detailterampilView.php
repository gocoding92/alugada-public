<?php echo $this->extend('admin/layout/template'); ?>

<?php echo $this->section('content-admin'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"><?= $detailterampil['nama_lengkap'].' ('.$bidang.')'; ?></h1>
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
                        <img src="<?= base_url('Image/iklan/tenaga_terampil/' . $detailterampil['image_1']); ?>" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="width: 100%;">
                        <img src="<?= base_url('Image/iklan/tenaga_terampil/' . $detailterampil['image_2']); ?>" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="width: 100%;">
                        <img src="<?= base_url('Image/iklan/tenaga_terampil/' . $detailterampil['image_3']); ?>" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="width: 100%;">
                        <img src="<?= base_url('Image/iklan/tenaga_terampil/' . $detailterampil['image_4']); ?>" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="width: 100%;">
                        <img src="<?= base_url('Image/iklan/tenaga_terampil/' . $detailterampil['image_5']); ?>" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col-2">
                    <div class="card" style="width: 100%;">
                        <img src="<?= base_url('Image/iklan/tenaga_terampil/' . $detailterampil['image_6']); ?>" class="card-img-top" alt="...">
                    </div>
                </div>

            </div>
            <div class="row">
                <!-- <h5>Iklan Rumah</h5> -->
                <div class="col-3">
                    <div class="card" style="width: 100%;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Nama : <?= $detailterampil['nama_lengkap']; ?></li>
                            <li class="list-group-item">Domisili : <?php echo $detailterampil['domisili']; ?></li>
                            <li class="list-group-item">Tanggal lahir : <?php echo $detailterampil['tanggal_lahir']; ?></li>
                        </ul>
                        <div class="card-body">
                            <a href="<?= base_url('acceptiklan' . '/' . $detailterampil['id'] . '/' . $user_id . '/' . $id_rekom . '/' . $detailterampil['nolayanan'] . '/' . $detailterampil['nosublayanan'] . '/' . "0"); ?>" class="card-link">Accept</a>
                            <a href="<?= base_url('acceptiklan' . '/' . $detailterampil['id'] . '/' . $user_id . '/' . $id_rekom . '/' . $detailterampil['nolayanan'] . '/' . $detailterampil['nosublayanan'] . '/' . "1"); ?>" class="card-link">Reject</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 100%;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Pendidikan : <?php echo $detailterampil['pendidikan']; ?></li>
                            <li class="list-group-item">Profesi : <?php echo $bidang; ?></li>
                            <li class="list-group-item">Pengalaman : <?php echo $detailterampil['pengalaman_kerja']; ?></li>
                        </ul>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 100%;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?php echo $detailterampil['deskripsi']; ?></li>
                            <li class="list-group-item">Gaji : <?php echo $detailterampil['gaji']; ?></li>
                        </ul>
                    </div>
                </div>

                <!-- </div>
            <a href="<?php //echo base_url('acceptiklan').'/'.$detailahli['idpengiklan'];
                        ?>" class="card-link">Accept</a>
            <a href="<?php //echo base_url('rejectiklan').'/'.$detailahli['idpengiklan'];
                        ?>" class="card-link">Reject</a>

        </div> -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php echo $this->endSection(); ?>