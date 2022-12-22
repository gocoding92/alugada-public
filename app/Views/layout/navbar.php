<?php
$url = '/login';
if (!empty($_SESSION['nohp'])) {
  $url = '/pasang-iklan';
}
?>

<div class="footer">
  <div class="row-footer">
    <a href="<?= base_url('/beranda'); ?>" class="text-footer-menu">
      <img alt="Beranda" src="<?= base_url('/'); ?>/Image/beranda.png" class="img-footer-menu"> <br />
      BERANDA
    </a>
  </div>
  <div class="row-footer">
    <a href="<?= base_url('/layanan-kami'); ?>" class="text-footer-menu">
      <img alt="Tentang Kami" src="<?= base_url(''); ?>/Image/tentangkami.png" class="img-footer-menu"> <br />
      LAYANAN KAMI
    </a>
  </div>
  <div class="row-footer">
    <a href="<?= base_url($url); ?>" class="text-footer-menu">
      <img alt="Pasang Iklan" src="<?= base_url(''); ?>/Image/pasangiklan.png" class="img-footer-menu"> <br />
      PASANG IKLAN
    </a>
  </div>
  <div class="row-footer">
    <a href="<?= base_url('/kontak-kami'); ?>" class="text-footer-menu">
      <img alt="Kontak Kami" src="<?= base_url(''); ?>/Image/kontakkami.png" class="img-footer-menu"> <br />
      KONTAK KAMI
    </a>
  </div>
  <!-- <div class="row-footer">
    <a href="<?= base_url('/pesan'); ?>" class="text-footer-menu">
      <img alt="Pesan" src="<?= base_url(''); ?>/Image/pesan.png" class="img-footer-menu"> <br />
      PESAN
    </a>
  </div> -->
</div>