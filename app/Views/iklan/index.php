<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="home-page" class="row-sm">
  <h2 class="margin-left-16">Pilih Layanan </h2>
  <?php foreach ($layanan as $l) : ?>
    <div class="display-flex margin-left-16">
      <div class="display-flex width-95-percent">
        <img class="width-30-px height-30-px border-radius-30" src="<?= base_url('Image/Layanan/' . $l['gambar']); ?>">
        <p class="margin-top-1 margin-left-12 font-size-18"> <?php echo $l['layanan']; ?> </p>
      </div>
    </div>
    <hr class="margin-top-min8 margin-bottom-12 border-solid-eeeeee margin-right-14 margin-bottom-20 margin-left-16" />
    <?php foreach ($sublayanan as $d) : ?>
      <?php if ($l['nolayanan'] == $d['nolayanan']) : ?>
        <div class="margin-top-min10 margin-left-16">
          <div class="display-flex margin-bottom-25 align-items-center margin-bottom-18">
            <img class="width-30-px height-30-px border-radius-30" src="<?= base_url('Image/Layanan/Sublayanan/' . $d['gambar']); ?>">
            <a href="" class="text-decoration-none width-85-percent textcolor-747474 margin-top-min5 margin-left-16 position-relative top9 font-size-14"> <?php echo $d['sublayanan']; ?> </a>
            <!-- http://localhost:8080/pasang-iklan/detail/tenagaahli/1/finance/100 -->
            <i class="fa fa-chevron-right textcolor-747474 font-size-14"></i>
          </div>
        </div>
      <?php endif; ?>
    <?php endforeach; ?>
  <?php endforeach; ?>
  <?= $this->endSection(); ?>