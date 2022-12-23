<?php echo $this->extend('admin/layout/template'); ?>
<?php echo $this->section('content-admin'); ?>

<div class="container">
    <div class="row">
        <div class="col-9 col-md-6 rounded-3 mx-auto bg-info mt-5">
            <h3>Register</h3>
<?php //echo $validation->listErrors();?>
            <form method="POST" action="<?= base_url('verifikasiregister'); ?>" enctype="multipart/form-data">
                <!-- <div class="row mb-3 mt-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div> -->
 
                <div class="row mb-3 mt-3">
                    <label for="nohp" class="col-sm-2 col-form-label">No HP</label>
                    <div class="col-sm-10">
                        <input value ="<?= old('nohp') ;?>" type="text" class="form-control <?= ($validation->hasError('nohp')) ? 'is-invalid' : '';?>" id="nohp" name="nohp" placeholder="+6281234xxxx  atau  081234xxxx">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nohp');?>
                        </div>
                        <div class="text-danger">
                            <?= session()->getFlashdata('belumterdaftar');?>
                        </div>
                    </div>

                </div>
                <div class="row mb-3">
                    <div class="ml-2">
                        <label><small>Sudah Punya Account ? </small><a class="text-decoration-none ml-2" style="color:blue" href="login">Login</a></label>
                    </div>
                </div>



                <button type="submit" class="btn btn-primary mb-2">Register</button>
            </form>

        </div>
    </div>
</div>


<?php echo $this->endSection(); ?>