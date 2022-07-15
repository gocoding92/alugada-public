<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>

  <link rel="stylesheet" href="<?= base_url(); ?>/home/css/styles.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/custom/css/global.css">

</head>

<body style="background-color: #f7f7f7; margin: 0px;">
  <main class="container-sm">
    <header class="header display-flex justify-content-between margin-bottom-2">
      <div class="display-flex">
        <img class="img-categories" src="https://s3-ap-southeast-1.amazonaws.com/assets.segari.id/categories/v3/semua_produk.png" alt="semua">
        <p>Alugada</p>
      </div>
      <div class="display-flex">
        <p>Achmad Rizky</p>
        <img class="img-categories" src="https://s3-ap-southeast-1.amazonaws.com/assets.segari.id/categories/v3/semua_produk.png" alt="semua">
      </div>
    </header>
    <div id="home-page" class="row-sm">
      <div class="row-categories">
        <?php foreach ($sublayanan as $sl) : ?>
          <?php if ($sl['nolayanan'] == $nolayanan) { ?>
            <button class="categories-button" variant="light">
              <div>
                <!-- <img class="img-categories" src="http://localhost:8080/Image/Layanan/ahli.png" alt="semua"> -->
                <img class="img-categories" src="<?= base_url('Image/Layanan/Sublayanan/' . $sl['gambar']); ?>" alt="semua">

              </div>
              <div class="label-categories">
                <!-- <p>Programmer</p> -->
                <p><?= $sl['sublayanan']; ?></p>
              </div>
            </button>
          <?php }; ?>
        <?php endforeach; ?>
      </div>
      <div class="row-card-layanan">
        <div class="card-layanan-list">
          <div class="card-layanan">
            <figure class="card-figure-layanan">
              <img alt="" src="https://apollo-singapore.akamaized.net:443/v1/files/bbhtuz5mby343-ID/image;s=300x0" class="card-img-layanan">
            </figure>
            <div class="row-title-layanan">
              <span class="title-layanan">2016, Daihatsu Ayla</span>
              <span class="title-type-layanan-border">Mobil & Motor dijual</span> <br /> <br />
              <span class="title-type-desc">Warna : Merah, Type Mesin : 120 AC, Ban : Tubless, No Mesin : 9i12311...</span> <br /> <br />
              <div class="text-footer-layanan">
                <span class="">Kebayoran Lama, Jakarta Selatan</span> <br />
                <span class="title-type-layanan">Post : 07-10-2022</span>
              </div>
            </div>
          </div>
        </div>
        <div class="card-layanan-list">
          <div class="card-layanan">
            <figure class="card-figure-layanan">
              <img alt="" src="https://apollo-singapore.akamaized.net:443/v1/files/1o7n5m7vkp482-ID/image;s=272x0" class="card-img-layanan">
            </figure>
            <div class="row-title-layanan">
              <span class="title-layanan">2016, Daihatsu Ayla</span>
              <span class="title-type-layanan-border">Mobil & Motor dijual</span> <br /> <br />
              <span class="title-type-desc">Warna : Merah, Type Mesin : 120 AC, Ban : Tubless, No Mesin : 9i12311...</span> <br /> <br />
              <div class="text-footer-layanan">
                <span class="">Kebayoran Lama, Jakarta Selatan</span> <br />
                <span class="title-type-layanan">Post : 07-10-2022</span>
              </div>
            </div>
          </div>
        </div>
        <div class="card-layanan-list">
          <div class="card-layanan">
            <figure class="card-figure-layanan">
              <img alt="" src="https://apollo-singapore.akamaized.net:443/v1/files/t7czb9junzez2-ID/image;s=272x0" class="card-img-layanan">
            </figure>
            <div class="row-title-layanan">
              <span class="title-layanan">2016, Daihatsu Ayla</span>
              <span class="title-type-layanan-border">Mobil & Motor dijual</span> <br /> <br />
              <span class="title-type-desc">Warna : Merah, Type Mesin : 120 AC, Ban : Tubless, No Mesin : 9i12311...</span> <br /> <br />
              <div class="text-footer-layanan">
                <span class="">Kebayoran Lama, Jakarta Selatan</span> <br />
                <span class="title-type-layanan">Post : 07-10-2022</span>
              </div>
            </div>
          </div>
        </div>
        <div class="card-layanan-list">
          <div class="card-layanan">
            <figure class="card-figure-layanan">
              <img alt="" src="https://apollo-singapore.akamaized.net:443/v1/files/lthufxm6p6yi3-ID/image;s=272x0" class="card-img-layanan">
            </figure>
            <div class="row-title-layanan">
              <span class="title-layanan">2016, Daihatsu Ayla</span>
              <span class="title-type-layanan-border">Mobil & Motor dijual</span> <br /> <br />
              <span class="title-type-desc">Warna : Merah, Type Mesin : 120 AC, Ban : Tubless, No Mesin : 9i12311...</span> <br /> <br />
              <div class="text-footer-layanan">
                <span class="">Kebayoran Lama, Jakarta Selatan</span> <br />
                <span class="title-type-layanan">Post : 07-10-2022</span>
              </div>
            </div>
          </div>
        </div>
        <div class="card-layanan-list">
          <div class="card-layanan">
            <figure class="card-figure-layanan">
              <img alt="" src="https://apollo-singapore.akamaized.net:443/v1/files/njhu5mu48h393-ID/image;s=272x0" class="card-img-layanan">
            </figure>
            <div class="row-title-layanan">
              <span class="title-layanan">2016, Daihatsu Ayla</span>
              <span class="title-type-layanan-border">Mobil & Motor dijual</span> <br /> <br />
              <span class="title-type-desc">Warna : Merah, Type Mesin : 120 AC, Ban : Tubless, No Mesin : 9i12311...</span> <br /> <br />
              <div class="text-footer-layanan">
                <span class="">Kebayoran Lama, Jakarta Selatan</span> <br />
                <span class="title-type-layanan">Post : 07-10-2022</span>
              </div>
            </div>
          </div>
        </div>
        <div class="card-layanan-list">
          <div class="card-layanan">
            <figure class="card-figure-layanan">
              <img alt="" src="https://apollo-singapore.akamaized.net:443/v1/files/6i5j1nbmmcgm3-ID/image;s=300x0" class="card-img-layanan">
            </figure>
            <div class="row-title-layanan">
              <span class="title-layanan">2016, Daihatsu Ayla</span>
              <span class="title-type-layanan-border">Mobil & Motor dijual</span> <br /> <br />
              <span class="title-type-desc">Warna : Merah, Type Mesin : 120 AC, Ban : Tubless, No Mesin : 9i12311...</span> <br /> <br />
              <div class="text-footer-layanan">
                <span class="">Kebayoran Lama, Jakarta Selatan</span> <br />
                <span class="title-type-layanan">Post : 07-10-2022</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="row-footer">
        <img alt="Beranda" src="<?= base_url(''); ?>/Image/beranda.png" class="img-footer-menu"> <br />
        <a href="<?= base_url('/'); ?>" class="text-footer-menu">BERANDA</a>
      </div>
      <div class="row-footer">
        <img alt="Tentang Kami" src="<?= base_url(''); ?>/Image/tentangkami.png" class="img-footer-menu"> <br />
        <a href="<?= base_url('/'); ?>" class="text-footer-menu">TENTANG KAMI</a>
      </div>
      <div class="row-footer">
        <img alt="Pasang Iklan" src="<?= base_url(''); ?>/Image/pasangiklan.png" class="img-footer-menu"> <br />
        <a href="<?= base_url('/pasang-iklan'); ?>" class="text-footer-menu">PASANG IKLAN</a>
      </div>
      <div class="row-footer">
        <img alt="Kontak Kami" src="<?= base_url(''); ?>/Image/kontakkami.png" class="img-footer-menu"> <br />
        <a href="<?= base_url('/'); ?>" class="text-footer-menu">KONTAK KAMI</a>
      </div>
      <div class="row-footer">
        <img alt="Pesan" src="<?= base_url(''); ?>/Image/pesan.png" class="img-footer-menu"> <br />
        <a href="<?= base_url('/'); ?>" class="text-footer-menu">PESAN</a>
      </div>
    </div>
  </main>


  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.3.11/slick.min.js"></script>
  <script type="text/javascript" src="<?= base_url(); ?>/home/js/custom.js"></script>

</body>

</html>