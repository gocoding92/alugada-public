<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="home-page" class="row-sm padding-bottom-90">
  <!-- <h1 class="margin-left-16"> Profile </h1> -->
  <h4 class="margin-left-16"> Edit Profile </h4>
    <form action="<?= base_url('submit-edit-profile');?>" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
          <label for="nama" class="font-size-15">Nama Lengkap</label>
          <input type="text" name="nama" class="form-control margin-top-6" value="<?= $pengunjung['nama'];?>">
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
          <label for="tgllahir" class="font-size-15">Tanggal Lahir</label>
          <input type="date" name="tgllahir" class="form-control margin-top-6" value="<?= $pengunjung['tgllahir'];?>">
        </div>
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
          <label for="perusahaan" class="font-size-15">Perusahaan / Institusi</label>
          <input type="text" name="perusahaan" class="form-control margin-top-6" value="<?= $pengunjung['perusahaan'];?>">
        </div>
      
        <div class="margin-bottom-12 padding-right-46 padding-left-16">
          <!-- <label hidden for="nohp" class="font-size-15">No. Handphone</label> -->
          <input type="hidden" name="nohp" class="form-control margin-top-6" value="<?= $pengunjung['nohp']?>">
        </div>

        <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="gambar" class="font-size-15">Profile</label>
            <div class="col-sm-2">
                <!-- <img src="/Image/user/pengunjung.png" class="img-thumbnail img-preview" style="width:50px" id="img-preview"> -->
                <img src="<?= base_url('Image/User/'.$pengunjung['gambar']);?>" class="img-thumbnail img-preview" style="width:50px" id="img-preview">
            </div>
            <div class="col-sm-8">
                <input type="file" class="form-control margin-top-6" id="gambar" name="gambar" onchange="previewgambar()">
            </div>
        </div>

        <div class="margin-bottom-12 padding-right-20 padding-left-16 margin-top-20">
          <button type="submit" class="btn btn-primary width-100-percent textcolor-white"> Update </button>
        </div>
      </div>
    </form>
</div>
<?= $this->endSection(); ?>