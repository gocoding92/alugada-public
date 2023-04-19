<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="home-page" class="row-sm padding-bottom-90">
  <h1 class="margin-left-16"> Riwayat Pesan </h1>
  <p class="margin-left-16 margin-right-16">
    Anda Telah Menghubungi dari pengiklan menggunakan via Whatsapp
  </p>
  <?php foreach ($data_pesan as $value) : ?>
    <a href="<?= base_url('iklan/detail-iklan'); ?>/<?= $value['nama_iklan']; ?>/<?= $value['id_rekomendasi_iklan']; ?>/<?= $value['id_iklan']; ?>/<?= $value['type_rekomendasi_iklan']; ?>/<?= $value['table_iklan']; ?>" class="text-decoration-none color-black">
      <div style="background-color: #fafafa; border-radius: 12px;" class="margin-left-16 margin-right-16 display-flex border-solid-ebe9e9 margin-bottom-10">
        <div style="width: 14%; margin-left: 12px;" class="margin-top-20">
          <img class="width-30-px height-30-px border-radius-30" src="<?=base_url('Image/User/img-default.png'); ?>" />
          <!-- <img class="width-30-px height-30-px border-radius-30" src="<?php // echo //$value['gambar'] ? base_url('Image/User/' . $value['gambar']) : base_url('Image/User/img-default.png') ?>" /> -->
        </div>
        <div style="width: 85%; padding: 12px;">
          <span class="font-size-18"> <?php echo $value['nama']; ?> </span> <br />
          <span class="position-relative" style="color: #5e5e5e; font-size: 10px;"> Iklan yang ditanyakan: </span> <br />
          <span class="position-relative" style="color: #393939; font-size: 18px;"> <?php echo $value['nama_iklan']; ?> </span> <br />
          <span class="title-type-layanan-border"><?php echo $value['type_rekomendasi_iklan']; ?></span> <br />
          <span class="position-relative" style="color: #5e5e5e; font-size: 10px;"> Pesan: </span> <br />
          <span class="position-relative" style="color: #393939; font-size: 12px; font-style: italic;"> <?php echo $value['chat']; ?> </span> <br />
          <span class="font-size-10 color-grey"> <?php echo $value['created_time']; ?> </span>
        </div>
        <div style="width: 5%; flex: 1; align-self: center; margin-right: 10px;" class="margin-top-30">
          <i class="fa fa-chevron-right color-grey color-grey"></i>
        </div>
      </div>
    </a>
  <?php endforeach; ?>
</div>
<?= $this->endSection(); ?>