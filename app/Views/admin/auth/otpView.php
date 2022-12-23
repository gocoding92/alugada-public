<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-9 col-md-6 rounded-3 mx-auto bg-info mt-5">

            <form method="POST" action="<?= base_url('verifikasiotp'); ?>" enctype="multipart/form-data">
                <!-- <div class="row mb-3 mt-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div> -->
                <div class="row mb-3 mt-3">
                    <label for="nohp" class="col-sm-2 col-form-label">No Hp</label>
                    <div class="col-sm-10">
                        <input readonly type="text" class="form-control" id="nohp" name="nohp" value="<?= $nohpregister;?>">
                    </div>
                </div>
 
                <div class="row mb-3 mt-3">
                    <label for="otp" class="col-sm-2 col-form-label">OTP</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('otp')) ? 'is-invalid' : '';?>" id="otp" name="otp" value="<?= old('otp')?>" placeholder="<?= $otp;?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('otp');?>
                        </div>
                        <div class="text-danger">
                            <?= session()->getFlashdata('otpsalah');?>
                        </div>
                        <div class="text-danger">
                            <?= session()->getFlashdata('inputotp');?>
                        </div>

                    </div>


                </div>
                <div class="row mb-3">
                    <div>
                        <label><small>OTP belum diterima ?<a class="text-decoration-none" href="<?= base_url('register');?>">Register ulang ?</small></a></label>
                    </div>
                </div>



                <button type="submit" class="btn btn-primary mb-2">Kirim OTP</button>
            </form>

        </div>
    </div>
</div>


<?= $this->endSection(); ?>