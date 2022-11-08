<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('profil/css/styles'); ?>

<div id="home-page" class="container-profil padding-bottom-90">
  <div class="row-profil display-flex">
    <div class="position-img-profil">
      <img class="img-profil" src="https://assets.zoom.us/images/en-us/desktop/generic/virtual-background-green-screen-example.jpg" alt="">
      <p class="textcolor-b0b0b0 font-size-8"> Join 12/January/2022 </p>
      <p class="font-size-10">
        Verified
      </p>
      <a href="" class="text-decoration-none textcolor-433e3e"> <i class="fa fa-edit"></i> Ubah Profil </a>
    </div>
    <div class="margin-left-12">
      <p class="font-size-14 font-weight-bold"> Achmad Rizky </p>
      <p class="font-size-11"> <i class="fa fa-phone"></i> 085894222865 </p>
      <p class="font-size-11"> <i class="fa fa-envelope"></i> Kirim Pesan </p>
      <p class="font-size-11">
        📢 Kami menyediakan barang bagus dan tidak mengecewakan,
        jika ada barang tidak puas dikembalikan
      </p>
      <p class="font-size-12">
        🏡 Ciledug, Kota Tangerang
      </p>
    </div>
  </div>
  <div>
    <h4> Iklan Anda </h4>
    <div class="row-card-layanan">
      <a href="" class="cursor-pointer text-decoration-none">
        <div class="card-layanan-list">
          <div class="card-layanan">
            <figure class="card-figure-layanan">
              <img src="data:image/jpeg;base64,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" class="card-img-layanan">
            </figure>
            <div class="row-title-layanan">
              <span class="title-layanan">Makanan sereral</span>
              <span class="title-type-layanan-border">Makanan</span> <br /> <br />
              <span class="title-type-desc">Makanan Sereral dengan Komposisi yang lengkap membuat tubuh</span> <br /> <br />
              <div class="text-footer-layanan">
                <span class="">Komplek inkopad Blok O5 No 17</span> <br />
                <span class="title-type-layanan">10:30</span>
              </div>
            </div>
          </div>
        </div>
      </a>
      <a href="" class="cursor-pointer text-decoration-none">
        <div class="card-layanan-list">
          <div class="card-layanan">
            <figure class="card-figure-layanan">
              <img src="data:image/jpeg;base64,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" class="card-img-layanan">
            </figure>
            <div class="row-title-layanan">
              <span class="title-layanan">Makanan sereral</span>
              <span class="title-type-layanan-border">Makanan</span> <br /> <br />
              <span class="title-type-desc">Makanan Sereral dengan Komposisi yang lengkap membuat tubuh</span> <br /> <br />
              <div class="text-footer-layanan">
                <span class="">Komplek inkopad Blok O5 No 17</span> <br />
                <span class="title-type-layanan">10:30</span>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>