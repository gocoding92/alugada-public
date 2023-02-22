<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('profil/css/styles');  ?>

<div id="home-page" class="container-profil padding-bottom-90">
  <div class="row-profil display-flex">
    <div class="position-img-profil">
      <img class="img-profil" src="<?= $gambar ? base_url('Image/User/' . $gambar) : base_url('Image/User/img-default.png') ?>" alt="">
      <p class="font-size-10">
        Verified
      </p>
      <a href="<?= base_url('/profil/update-profil'); ?>" class="text-decoration-none textcolor-433e3e font-size-13"> <i class="fa fa-edit"></i> Ubah Profil </a>
    </div>
    <div class="margin-left-12">
      <p class="font-size-14 font-weight-bold"> <?= $nama; ?> </p>
      <p class="font-size-13"> <i class="fa fa-phone"></i> <?= $no_handphone; ?> </p>
      <p class="font-size-12">
        🏡 <?= $alamat ? $alamat : '-'; ?>
      </p>
    </div>
  </div>

  <div class="row-profil-iklan">
    <?php if (count($data_iklan) != 0): ?>
      <h4> Iklan Anda </h4>
    <?php endif; ?>

    <div class="row-card-layanan-profil">
      <?php foreach ($data_iklan as $tbl_rekomendasi_iklan) :
        $image = $tbl_rekomendasi_iklan['image'];
        $nama_iklan = substr($tbl_rekomendasi_iklan['nama_iklan'], 0, 16);
        $nama_iklan_str = strlen($tbl_rekomendasi_iklan['nama_iklan']) > 16 ? '...' : '';
        $description = substr($tbl_rekomendasi_iklan['description'], 0, 95);
        $description_str = strlen($tbl_rekomendasi_iklan['description']) > 95 ? '...' : '';
        $alamat = substr($tbl_rekomendasi_iklan['alamat'], 0, 15);
        $alamat_str = strlen($tbl_rekomendasi_iklan['alamat']) > 15 ? '...' : '';

        $url_detail = $tbl_rekomendasi_iklan['nama_iklan'] . '/' . $tbl_rekomendasi_iklan['id_rekomendasi_iklan'] . '/' . $tbl_rekomendasi_iklan['id_iklan'] . '/' . $tbl_rekomendasi_iklan['type_rekomendasi_iklan'] . '/' . $tbl_rekomendasi_iklan['table_iklan'];
      ?>
        <!-- form hidden id_rekomendasi_iklan id_iklan table_iklan  -->
        <input type="hidden" id="id_rekomendasi_iklan<?= $tbl_rekomendasi_iklan['id_rekomendasi_iklan'] ?>" value="<?= $tbl_rekomendasi_iklan['id_rekomendasi_iklan'] ?>">
        <input type="hidden" id="id_iklan_rekomendasi<?= $tbl_rekomendasi_iklan['id_rekomendasi_iklan'] ?>" value="<?= $tbl_rekomendasi_iklan['id_iklan'] ?>">
        <input type="hidden" id="table_iklan<?= $tbl_rekomendasi_iklan['id_rekomendasi_iklan'] ?>" value="<?= $tbl_rekomendasi_iklan['table_iklan'] ?>">

        <!-- 3 = selain 3 iklan tampil -->
        <?php if ($tbl_rekomendasi_iklan['is_active'] != 3) : ?>
          <div class="card-layanan-list margin-bottom-10" style="height: 470px;">
            <div class="card-layanan" style="height: 470px;">
              <figure class="card-figure-layanan">
                <img src="<?= $image; ?>" class="card-img-layanan">
              </figure>
              <div style="position: absolute; top: 0;">
                <!-- 1 = di suspend -->
                <?php
                if ($tbl_rekomendasi_iklan['suspend'] == 0) :
                  $status = 'Proses Pengecekan';

                  if ($tbl_rekomendasi_iklan['is_active'] == 1) {
                    $status = 'Iklan Aktif';
                  } elseif ($tbl_rekomendasi_iklan['is_active'] == 2) {
                    $status = 'Tidak Aktif Iklan';
                  }
                ?>
                  <button style="width: 166px; font-size: 11px;" onclick="editIklanProfil('<?= $tbl_rekomendasi_iklan['id_rekomendasi_iklan'] ?>', '<?= $tbl_rekomendasi_iklan['is_active'] ?>')" class="btn <?= ($tbl_rekomendasi_iklan['is_active'] == 1) ? 'btn-primary' : 'btn-warning'; ?> textcolor-white margin-top-7 cursor-pointer"><i class="fa fa-edit"></i> <?= $status; ?> </button>
                <?php endif; ?>
                <?php if ($tbl_rekomendasi_iklan['suspend'] == 1) : ?>
                  <button style="width: 110px; font-size: 11px;" class="btn btn-danger textcolor-white margin-top-7 cursor-pointer"><i class="fa fa-ban"></i> Suspend </button>
                <?php endif; ?>
              </div>
              <div class="row-title-layanan">
                <span class="title-layanan"><?= $nama_iklan . $nama_iklan_str; ?></span>
                <span class="title-layanan">Rp. <?= number_format($tbl_rekomendasi_iklan['harga']); ?></span>
                <span class="title-type-layanan-border"><?= $tbl_rekomendasi_iklan['type_rekomendasi_iklan']; ?></span> <br /> <br />
                <span class="title-type-desc"><?= $description . $description_str; ?></span> <br /> <br />
                <div class="text-align-right">
                  <i onclick="detailIklan('<?= $url_detail; ?>');" style="font-size: 18px" class="fa fa-eye cursor-pointer margin-right-10"></i>
                  <i onclick="editIklan('<?= $url_detail; ?>');" style="font-size: 18px" class="fa fa-edit cursor-pointer margin-right-10"></i>
                  <i onclick="deleteIklan('<?= $tbl_rekomendasi_iklan['id_rekomendasi_iklan'] ?>')" style="font-size: 18px" class="fa fa-trash cursor-pointer margin-right-10"></i>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </div>

  <?php if (count($data_iklan) == 0): ?>
    <div class="empty-state-iklan" style="margin-top: 70px;">
      <img style="max-width: 90px;" src="<?= base_url('Image/emptystate.png') ?>" />
      <p class="text-empty-state-iklan"> Iklan Belum Tersedia, Pasang Iklan Gratis! </p>
      <a href="<?= base_url('pasang-iklan'); ?>" class="btn btn-primary width-100-percent text-decoration-none textcolor-white"> Yuk, Pasang Iklan Sekarang </a>
    </div>
  <?php endif; ?>

  <script>
    function detailIklan(url_detail) {
      window.location.href = `<?php echo base_url('iklan/detail-iklan'); ?>/${url_detail}`;
    }

    function editIklan(url_detail) {
      window.location.href = `<?php echo base_url('iklan/edit-iklan'); ?>/${url_detail}`;
    }

    function deleteIklan(id = 0) {

      var id_rekomendasi_iklan = $('#id_rekomendasi_iklan' + id + ' ').val();
      var id_iklan_rekomendasi = $('#id_iklan_rekomendasi' + id + ' ').val();
      var table_iklan = $('#table_iklan' + id + ' ').val();

      $.ajax({
        url: "<?= base_url('profil/delete-iklan'); ?>",
        type: 'POST',
        headers: {
          'X-Requested-With': 'XMLHttpRequest'
        },
        data: {
          id_rekomendasi_iklan: id_rekomendasi_iklan,
          id_iklan: id_iklan_rekomendasi,
          table_iklan: table_iklan,
        },
        success: function(data) {
          var obj = JSON.parse(data);

          if (obj.data[1].status === 200) {
            toastr.success(obj.data[0].message);
          } else {
            toastr.error(obj.data[0].message);
          }

          if (obj.data[1].status === 200) {
            window.setTimeout(function() {
              window.location.href = "<?php echo base_url('/profil'); ?>";
            }, 2500);
          }
        }
      });
    }

    function editIklanProfil(id = 0, isActive = 0) {

      var id_rekomendasi_iklan = $('#id_rekomendasi_iklan' + id + ' ').val();
      var id_iklan_rekomendasi = $('#id_iklan_rekomendasi' + id + ' ').val();
      var table_iklan = $('#table_iklan' + id + ' ').val();
      var is_active = parseInt(isActive) === 1 ? 2 : 1;

      $.ajax({
        url: "<?= base_url('profil/edit-iklan'); ?>",
        type: 'POST',
        headers: {
          'X-Requested-With': 'XMLHttpRequest'
        },
        data: {
          id_rekomendasi_iklan: id_rekomendasi_iklan,
          id_iklan: id_iklan_rekomendasi,
          table_iklan: table_iklan,
          is_active: is_active,
        },
        success: function(data) {

          var obj = JSON.parse(data);

          if (obj.data[1].status === 200) {
            toastr.success(obj.data[0].message);
          } else {
            toastr.error(obj.data[0].message);
          }

          if (obj.data[1].status === 200) {
            window.setTimeout(function() {
              window.location.href = "<?php echo base_url('/profil'); ?>";
            }, 2500);
          }
        }
      });
    }
  </script>

  <?= $this->endSection(); ?>