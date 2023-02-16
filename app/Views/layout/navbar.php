<?php
$url = '/login';
$session = false;
if (! empty($_SESSION['nohp'])) {
  $url = '/pasang-iklan';
  $session = true;
}
?>

<style>

.active-menu {
    color: #489fe4;
    font-weight: bold;
    text-decoration: none;
}

</style>

<div class="footer">
  <div class="row-footer">
    <a href="<?= base_url('/beranda'); ?>" class="<?= $active == 'home' ? 'active-menu' : 'text-footer-menu' ?>">
      <img alt="Beranda" src="<?= base_url(''); ?>/Image/beranda.png" class="img-footer-menu"> <br />
      Beranda
    </a>
  </div>
  <div class="row-footer">
    <a href="<?= base_url('/layanan-kami'); ?>" class="<?= $active == 'layanan_kami' ? 'active-menu' : 'text-footer-menu' ?>">
      <img alt="Tentang Kami" src="<?= base_url(''); ?>/Image/tentangkami.png" class="img-footer-menu"> <br />
      Tentang Kami
    </a>
  </div>
  <div class="row-footer menu-botton-pasang-iklan">
    <a href="<?= base_url($url); ?>" class="<?= $active == 'iklan' ? 'active-menu' : 'text-footer-menu' ?>">
      <img alt="Pasang Iklan" src="<?= base_url(''); ?>/Image/pasangiklan.png" class="img-footer-menu"> <br />
      PASANG IKLAN
    </a>
  </div>
  <div class="row-footer">
    <a href="<?= base_url($session ? 'pesan' : '/login'); ?>" class="<?= $active == 'pesan' ? 'active-menu' : 'text-footer-menu' ?>">
      <img alt="Kontak Kami" src="<?= base_url(''); ?>/Image/pesan.png" class="img-footer-menu"> <br />
      Pesan Saya
    </a>
  </div>
  <div class="row-footer">
    <a href="<?= base_url($session ? 'profil' : '/login'); ?>" class="<?= $active == 'profil' ? 'active-menu' : 'text-footer-menu' ?>">
      <img alt="Kontak Kami" src="<?= base_url(''); ?>/Image/iklan-ku.png" class="img-footer-menu"> <br />
      Iklan Saya
    </a>
  </div>
</div>