<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="home-page" class="row-sm padding-bottom-90">
  <h1 class="margin-left-16"> Data User </h1>
  <!-- <h4 class="margin-left-16"> Silahkan masukkan data anda dengan lengkap </h4> -->

    <form action="<?= base_url('simpan-new-user')?>" method="post">
      <div class="row">
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
          <label for="nama" class="font-size-15">Nama</label>
          <input required type="text" name="nama" class="form-control margin-top-6" placeholder="Silahkan masukkan nama anda .....">
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
          <label for="password" class="font-size-15">Password</label>
          <input required type="text" name="password" class="form-control margin-top-6" placeholder="Masukkan password 6 digit">
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
          <label for="confirmpassword" class="font-size-15">Confirm Password</label>
          <input required type="text" name="confirmpassword" class="form-control margin-top-6" placeholder="Masukkan password sekali lagi ....">
        </div>

        <?php //if(session()->getFlashdata('pesan')){?>
            <?php //echo "Benar"; die;?>
        <?php //};?>


        <?php if(session()->getFlashdata('pesan')){?>
            <div class="alert alert-success" role="alert">
                <?php echo session()->getFlashdata('pesan');?>
            </div>
        <?php };?>

        <div class="margin-bottom-12 padding-right-46 padding-left-16">
          <input hidden type="text" name="nohp" class="form-control margin-top-6" value="<?= $nohp;?>">
        </div>
        <div class="margin-bottom-12 padding-right-20 padding-left-16 margin-top-20">
          <a href="<?= base_url(); ?>/verify">
            <button type="submit" class="btn btn-primary width-100-percent textcolor-white"> Kirim </button>
          </a>
        </div>
      </div>
    </form>


</div>
<?= $this->endSection(); ?>