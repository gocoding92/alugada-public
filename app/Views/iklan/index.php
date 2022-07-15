<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>

  <link rel="stylesheet" href="<?= base_url(); ?>/iklan/css/styles.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/custom/css/global.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/custom/css/component.css">

  <!-- Slick style -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.3.11/slick.css" />
</head>

<body style="background-color: #f7f7f7; margin: 0px;">
  <main class="container-sm">
    <header class="header display-flex justify-content-between margin-bottom-2">
      <div class="display-flex">
        <img class="img-logo" src="<?= base_url('Image/logo.jpg'); ?>" alt="semua">
        <p class="text-logo">Alugada</p>
      </div>
      <div class="display-flex">
        <p class="text-header-user"><?= $pengunjung['nama']; ?></p>
        <img class="img-user-header" src="<?= base_url('Image/User/' . $pengunjung['profile']); ?>" alt="semua">
      </div>
    </header>
    <div id="home-page" class="row-sm padding-bottom-90">
      <div class="row-categories">
        <?php foreach ($layanan as $l) : ?>
          <a href="<?= base_url('pasang-iklan?layanan=' . $l['layanan']); ?>" class="categories-button text-decoration-none" variant="light">
            <div>
              <img class="img-categories" src="<?= base_url('Image/Layanan/' . $l['gambar']); ?>" alt="semua">
            </div>
            <div class="label-categories">
              <p class="text-layanan"><?= $l['layanan']; ?></p>
            </div>
          </a>
        <?php endforeach; ?>
      </div>

      <?= $this->include('iklan/form/property'); ?>

      <div class="footer">
        <div class="row-footer">
          <img alt="Beranda" src="<?= base_url(''); ?>/Image/beranda.png" class="img-footer-menu"> <br />
          <a href="<?= base_url('/home'); ?>" class="text-footer-menu">BERANDA</a>
        </div>
        <div class="row-footer">
          <img alt="Tentang Kami" src="<?= base_url(''); ?>/Image/tentangkami.png" class="img-footer-menu"> <br />
          <a href="<?= base_url('/'); ?>" class="text-footer-menu">TENTANG KAMI</a>
        </div>
        <div class="row-footer">
          <img alt="Pasang Iklan" src="<?= base_url(''); ?>/Image/pasangiklan.png" class="img-footer-menu"> <br />
          <a href="<?= base_url('/'); ?>" class="text-footer-menu">PASANG IKLAN</a>
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
  <script type="text/javascript" src="<?= base_url(); ?>/home/js/custom.js"></script>

</body>

</html>