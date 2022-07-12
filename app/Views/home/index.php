<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>

  <link rel="stylesheet" href="<?= base_url(); ?>/home/css/styles.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/custom/css/global.css">

  <!-- Slick style -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.3.11/slick.css" />
</head>

<body style="background-color: #f7f7f7">
  <main class="container-sm">
    <header class="header display-flex justify-content-between margin-bottom-2">
      <div class="display-flex">
        <img class="img-categories" src="<?= base_url('Image/logo.jpg');?>" alt="semua">
        <p>Alugada</p>
      </div>
      <div class="display-flex">
        <p><?= $pengunjung['nama'];?></p>
        <!-- <img class="img-categories" src="https://s3-ap-southeast-1.amazonaws.com/assets.segari.id/categories/v3/semua_produk.png" alt="semua"> -->
        <img class="img-categories" src="<?= base_url('Image/User/'.$pengunjung['profile']);?>" alt="semua">
      </div>
    </header>
    <div id="home-page" class="row-sm">
      <div class="position-relative top10">
        <div class="fade">
          <div><img src="https://s3-ap-southeast-1.amazonaws.com/assets.segari.id/banners/it-1107IkanDori15000-l5fsmppo-l5fsr33t.jpg" /></div>
          <div><img src="https://s3-ap-southeast-1.amazonaws.com/assets.segari.id/banners/it-1107Buahserba15000-l5fsiuxd-l5fsunq2.jpg" /></div>
          <div><img src="https://s3.ap-southeast-1.amazonaws.com/assets.segari.id/customer-to-agent/01-Web+Banner+-+Customer+to+Mitra+Page+(1).jpg" /></div>
        </div>
      </div>

      <div class="row-categories">
        <?php foreach ($layanan as $l) : ?>
          <!-- <a href="<?php //echo base_url(); ?>/home/detail/1" class="categories-button" variant="light"> -->
          <a href="<?= base_url('home/detail/'.$l['nolayanan']);?>" class="categories-button" variant="light">

            <div>
              <img class="img-categories" src="<?= base_url('Image/Layanan/' . $l['gambar']); ?>" alt="semua">
            </div>
            <div class="label-categories">
              <p><?= $l['layanan']; ?></p>
            </div>
          </a>
        <?php endforeach; ?>
      </div>

      <div class="row-card-layanan">
        <div class="card-layanan-list">
          <div class="card-layanan">
            <figure class="card-figure-layanan">
              <img alt="Sedekah Makan Yatim untuk Ratusan Panti Asuhan" src="https://apollo-singapore.akamaized.net:443/v1/files/bbhtuz5mby343-ID/image;s=300x0" class="card-img-layanan">
            </figure>
            <div class="row-title-layanan">
              <span class="title-layanan">2016, Daihatsu Ayla</span>
            </div>
          </div>
        </div>
        <div class="card-layanan-list">
          <div class="card-layanan">
            <figure class="card-figure-layanan">
              <img alt="Sedekah Makan Yatim untuk Ratusan Panti Asuhan" src="https://apollo-singapore.akamaized.net:443/v1/files/n9qzfpcwwkyk3-ID/image;s=300x0" class="card-img-layanan">
            </figure>
            <div class="row-title-layanan">
              <span class="title-layanan">2015, Datsun Go+ Panca</span>
            </div>
          </div>
        </div>
        <div class="card-layanan-list">
          <div class="card-layanan">
            <figure class="card-figure-layanan">
              <img alt="Sedekah Makan Yatim untuk Ratusan Panti Asuhan" src="https://apollo-singapore.akamaized.net:443/v1/files/6i5j1nbmmcgm3-ID/image;s=300x0" class="card-img-layanan">
            </figure>
            <div class="row-title-layanan">
              <span class="title-layanan">2017, Daihatsu Ayla</span>
            </div>
          </div>
        </div>
        <div class="card-layanan-list">
          <div class="card-layanan">
            <figure class="card-figure-layanan">
              <img alt="Sedekah Makan Yatim untuk Ratusan Panti Asuhan" src="https://apollo-singapore.akamaized.net:443/v1/files/6i5j1nbmmcgm3-ID/image;s=300x0" class="card-img-layanan">
            </figure>
            <div class="row-title-layanan">
              <span class="title-layanan">2017, Daihatsu Ayla</span>
            </div>
          </div>
        </div>
        <div class="card-layanan-list">
          <div class="card-layanan">
            <figure class="card-figure-layanan">
              <img alt="Sedekah Makan Yatim untuk Ratusan Panti Asuhan" src="https://apollo-singapore.akamaized.net:443/v1/files/6i5j1nbmmcgm3-ID/image;s=300x0" class="card-img-layanan">
            </figure>
            <div class="row-title-layanan">
              <span class="title-layanan">2017, Daihatsu Ayla</span>
            </div>
          </div>
        </div>
        <div class="card-layanan-list">
          <div class="card-layanan">
            <figure class="card-figure-layanan">
              <img alt="Sedekah Makan Yatim untuk Ratusan Panti Asuhan" src="https://apollo-singapore.akamaized.net:443/v1/files/6i5j1nbmmcgm3-ID/image;s=300x0" class="card-img-layanan">
            </figure>
            <div class="row-title-layanan">
              <span class="title-layanan">2017, Daihatsu Ayla</span>
            </div>
          </div>
        </div>
        <div class="card-layanan-list">
          <div class="card-layanan">
            <figure class="card-figure-layanan">
              <img alt="Sedekah Makan Yatim untuk Ratusan Panti Asuhan" src="https://apollo-singapore.akamaized.net:443/v1/files/6i5j1nbmmcgm3-ID/image;s=300x0" class="card-img-layanan">
            </figure>
            <div class="row-title-layanan">
              <span class="title-layanan">2017, Daihatsu Ayla</span>
            </div>
          </div>
        </div>
        <div class="card-layanan-list">
          <div class="card-layanan">
            <figure class="card-figure-layanan">
              <img alt="Sedekah Makan Yatim untuk Ratusan Panti Asuhan" src="https://apollo-singapore.akamaized.net:443/v1/files/6i5j1nbmmcgm3-ID/image;s=300x0" class="card-img-layanan">
            </figure>
            <div class="row-title-layanan">
              <span class="title-layanan">2017, Daihatsu Ayla</span>
            </div>
          </div>
        </div>
        <div class="card-layanan-list">
          <div class="card-layanan">
            <figure class="card-figure-layanan">
              <img alt="Sedekah Makan Yatim untuk Ratusan Panti Asuhan" src="https://apollo-singapore.akamaized.net:443/v1/files/6i5j1nbmmcgm3-ID/image;s=300x0" class="card-img-layanan">
            </figure>
            <div class="row-title-layanan">
              <span class="title-layanan">2017, Daihatsu Ayla</span>
            </div>
          </div>
        </div>
        <div class="card-layanan-list">
          <div class="card-layanan">
            <figure class="card-figure-layanan">
              <img alt="Sedekah Makan Yatim untuk Ratusan Panti Asuhan" src="https://apollo-singapore.akamaized.net:443/v1/files/6i5j1nbmmcgm3-ID/image;s=300x0" class="card-img-layanan">
            </figure>
            <div class="row-title-layanan">
              <span class="title-layanan">2017, Daihatsu Ayla</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <div class="row-footer">
        <p><a href="<?= base_url('/'); ?>">BERANDA</a></p>
      </div>
      <div class="row-footer">
        <p>TENTANG KAMI</p>
      </div>
      <div class="row-footer">
        <p>PASANG IKLAN</p>
      </div>
      <div class="row-footer">
        <p>KONTAK KAMI</p>
      </div>
      <div class="row-footer">
        <p>PESAN</p>
      </div>
    </div>
  </main>


  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.3.11/slick.min.js"></script>
  <script type="text/javascript" src="<?= base_url(); ?>/home/js/custom.js"></script>

</body>

</html>