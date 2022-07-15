<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="home-page" class="row-sm">
  <div class="row-categories">
    <?php foreach ($sublayanan as $sl) : ?>
      <?php if ($sl['nolayanan'] == $nolayanan) { ?>
        <button class="categories-button" variant="light">
          <div>
            <img class="img-categories" src="<?= base_url('Image/Layanan/Sublayanan/' . $sl['gambar']); ?>" alt="semua">
          </div>
          <div class="label-categories">
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
<?= $this->endSection(); ?>