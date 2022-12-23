<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        
        <div class="col-9 col-md-6 rounded-3 mx-auto bg-info mt-5">
            <!-- <div class="alert alert-info" role="alert">
                <?php //echo  session()->get('otpbenar');?>
            </div> -->
            <div class="alert alert-info mt-3 text-primary" role="alert">
                <?=  session()->getFlashdata('inputdataregister');?>
            </div>

            <form method="POST" action="<?= base_url('simpandataregister'); ?>" enctype="multipart/form-data">
 
                <div class="row mb-2 mt-3">
                    <label for="nohp" class="col-3 col-form-label">No HP</label>
                    <div class="col-9">
                        <input readonly type="text" class="form-control" id="nohp" name="nohp" value="<?= $nohpregister;?>" placeholder="+6281234xxxx  atau  081234xxxx">
                    </div>
                </div>
                <div class=" row mb-2">
                    <label for="nama" class="col-3 col-form-label">Nama</label>
                    <div class="col-9">
                        <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '';?>" id="nama" name="nama" value="<?= old('nama')?>" placeholder="Tulis nama anda" >
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama');?>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <label for="email" class="col-3 col-form-label">Email (opsional)</label>
                    <div class="col-9">
                        <input type="text" class="form-control" id="email" name="email" value="<?= (old('email'));?>" placeholder="Tulis email anda (Tidak wajib diisi)">
                    </div>
                </div>
                <div class=" row mb-2">
                    <label for="password" class="col-3 col-form-label">Password</label>
                    <div class="col-9">
                        <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : '';?>" id="password" name="password" value="<?= (old('password'));?>" placeholder="Tulis password anda (minimal 4 karakter)">
                        <div class="invalid-feedback">
                            <?= $validation->getError('password');?>
                        </div>

                    </div>
                </div>
                <div class=" row mb-2">
                    <label for="confirmpassword" class="col-3 col-form-label">Confirm Password</label>
                    <div class="col-9">
                        <input type="password" class="form-control <?= ($validation->hasError('confirmpassword')) ? 'is-invalid' : '';?>" id="confirmpassword" name="confirmpassword" value="<?= (old('confirmpassword'));?>" placeholder="Tulis password anda sekali lagi">
                        <div class="invalid-feedback">
                            <?php //echo $validation->getError('matches[password]');?>
                            <?= "Password harus sama";?>
                        </div>

                    </div>
                </div>

                <!-- <div class="row mb-3">
                    <label for="gambar" class="col-sm-2 col-form-label lbl-gambar" id="lbl-gambar">Gambar</label>
                    <div class="col-sm-2">
                        <img src="<?php //echo base_url('image/layanan/sublayanan/default.jpg'); 
                                    ?>" class="img-thumbnail img-preview" id="img-preview" onchange="previewgambar()">
                    </div>
                    <div class="col-sm-8">
                        <input type="file" class="form-control" id="gambar" name="gambar" required>
                    </div>
                </div> -->

                <!-- <div class="row mb-3">
                    <label for="url" class="col-sm-2 col-form-label">url</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="url" name="url" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="aktif" class="col-sm-2 col-form-label">Aktif ?</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="aktif" name="aktif" required>
                    </div>
                </div> -->
                <!-- <div class="row mb-3">
                    <div>
                        <label><small>Sudah Punya Account ? <a class="text-decoration-none" href="login">Login</small></a></label>
                    </div>
                </div> -->



                <button type="submit" class="btn btn-primary mb-2">Register</button>
            </form>

        </div>
    </div>
</div>


<?= $this->endSection(); ?>