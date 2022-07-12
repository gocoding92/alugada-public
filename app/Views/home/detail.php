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

<body style="background-color: #f7f7f7">
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
        <button class="categories-button" variant="light">
          <div>
            <img class="img-categories" src="http://localhost:8080/Image/Layanan/ahli.png" alt="semua">
          </div>
          <div class="label-categories">
            <p>Programmer</p>
          </div>
        </button>
      </div>
    </div>
    <div class="footer">
      <div class="row-footer">
        <p>BERANDA</p>
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