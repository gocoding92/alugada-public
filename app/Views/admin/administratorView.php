<?php echo $this->extend('admin/layout/template'); ?>

<?php echo $this->section('content-admin'); ?>

<div class="container">
    <div class="row">

        <div class="col-9 col-md-6 rounded-3 mx-auto bg-info mt-5">
            <div class="text-primary">
                <?php if (session()->getFlashdata('register')) { ?>
                    <?= session()->getFlashdata('register'); ?>
                <?php } else { ?>
                    <h3>Login Admin</h3>
                <?php }; ?>
            </div>
            <form method="POST" action="<?= base_url('admin-verifikasilogin'); ?>" enctype="multipart/form-data">

                <div class="row mb-3 mt-3">
                    <label for="nohp" class="col-4 col-form-label">No HP</label>
                    <div class="col-8">
                        <input type="text" class="form-control <?php echo ($validation->hasError('nohp')) ? 'is-invalid' : ''; ?>" id="nohp" name="nohp" placeholder="+6281234xxxx  atau  081234xxxx" value="<?= old('nohp'); ?>">
                        <div class="invalid-feedback">
                            <?php echo $validation->getError('nohp'); ?>
                        </div>
                        <div class="text-danger">
                            <?= session()->getFlashdata('belumterdaftar'); ?>
                        </div>

                    </div>
                </div>
                <div class=" row mb-3">
                    <label for="password" class="col-4 col-form-label">Password</label>
                    <div class="col-8">
                        <input type="password" class="form-control <?php echo ($validation->hasError('password')) ? 'is-invalid' : ''; ?>" id="password" name="password" value="<?= old('password'); ?>" placeholder="Masukkan password anda">
                        <div class="invalid-feedback">
                            <?php echo $validation->getError('password'); ?>
                        </div>
                        <div class="text-danger">
                            <?= session()->getFlashdata('passwordsalah'); ?>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-8">
                        <label><small>Belum Punya Account ? <a class="text-decoration-none" href="register">Register</small></a></label>
                    </div>
                    <div class="col-4 text-end">
                        <label><small><a class="text-decoration-none" href="lupapassword">Lupa Password ?</small></a></label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mb-2">Login</button>
            </form>

        </div>

    </div>
</div>

<?php //echo $this->include("script/login"); 
?>

<?= $this->endSection(); ?>