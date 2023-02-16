<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-9 col-md-6 rounded-3 mx-auto bg-info mt-5">

            <form method="POST" action="<?= base_url('kirimnohplupapassword'); ?>" enctype="multipart/form-data">
 
                <div class="row mb-3 mt-3">
                    <p class="text-end">Password akan dikirim ke Whatsapp anda</p>
                    <label for="nohp" class="col-sm-2 col-form-label">No HP</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nohp" name="nohp" placeholder="+6281234xxxx  atau  081234xxxx">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <label><small>Sudah Punya Account ? <a class="text-decoration-none" href="login">Login</small></a></label>
                    </div>
                    <div class="col-6 text-end">
                        <label><small>Belum Punya Account ? <a class="text-decoration-none" href="register">Register</small></a></label>
                    </div>

                </div>



                <button type="submit" class="btn btn-primary mb-2">Lupa Password</button>
            </form>

        </div>
    </div>
</div>


<?= $this->endSection(); ?>