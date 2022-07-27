<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="home-page" class="row-sm">
  <div class="position-relative top10">
    <div class="fade">
      <div><img src="https://i.ytimg.com/vi/f_fC54rC9hc/maxresdefault.jpg" /></div>
      <div><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkihA1QQqZxNnO83gFHJB3FJdZVOxC-hsYZA&usqp=CAU" /></div>
      <div><img src="https://i.ytimg.com/vi/vql_cCL-YLE/maxresdefault.jpg" /></div>
    </div>
  </div>

  <div class="row-categories">
    <?php foreach ($layanan as $l) : ?>
      <a href="<?= base_url('home/detail/' . $l['nolayanan']); ?>" class="categories-button text-decoration-none" variant="light">
        <div>
          <img class="img-categories" src="<?= base_url('Image/Layanan/' . $l['gambar']); ?>" alt="semua">
        </div>
        <div class="label-categories">
          <p class="text-layanan"><?= $l['layanan']; ?></p>
        </div>
      </a>
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