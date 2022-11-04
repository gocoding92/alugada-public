<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="home-page" class="row-sm padding-bottom-90">
  <h1 class="margin-left-16"> Kontak Kami </h1>
  <h4 class="margin-left-16"> Kantor Utama PT. Alugada Indonesia </h4>
  <p class="margin-left-16">
    Dipo Tower Level 3 Unit A-B <br />

    Jalan Jenderal Gatot Subroto No. Kav. 51-52, RW.7 <br />

    Kota Jakarta Pusat, Daerah Khusus Ibukota <br />

    Jakarta 10260 <br /> <br />

    Untuk keperluan bisnis, hubungi kami di: <br />

    +62-21-2205-5677 <br />

    hello@alugada.co.id <br />
  </p>

  <div class="margin-left-16 margin-right-16">
    <div class="mapouter">
      <div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=tanah kusir&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://embedmapgenerator.com/">embed google maps in website</a></div>
    </div>
  </div>

  <h4 class="margin-left-16"> Form Kontak </h4>
  <!-- <form action="<?= base_url('kontak_kami/save'); ?>" method="post"> -->
    <div class="row">
      <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="" class="font-size-15">Nama</label>
        <input type="text" name="nama" id="nama" class="form-control margin-top-6" placeholder="" required>
      </div>
      <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="" class="font-size-15">Telepon</label>
        <input type="text" name="telepon" id="telepon" class="form-control margin-top-6" placeholder="" required>
      </div>
      <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="" class="font-size-15">Email</label>
        <input type="text" name="email" id="email" class="form-control margin-top-6" placeholder="" required>
      </div>
      <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="" class="font-size-15">Alamat</label>
        <textarea name="alamat" id="alamat" class="form-control margin-top-6" required></textarea>
      </div>
      <div class="margin-bottom-12 padding-right-46 padding-left-16">
        <label for="" class="font-size-15">Pesan</label>
        <textarea name="pesan" id="pesan" class="form-control margin-top-6" required></textarea>
      </div>
      <div class="margin-bottom-12 padding-right-20 padding-left-16 margin-top-20">
        <button id="submit" class="btn btn-primary width-100-percent textcolor-white"> Submit </button>
      </div>
    </div>
  <!-- </form> -->
</div>

<?= $this->include("script/kontak_kami"); ?>

<?= $this->endSection(); ?>