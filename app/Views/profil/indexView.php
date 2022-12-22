<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('profil/css/styles');  ?>

<div id="home-page" class="container-profil padding-bottom-90">
  <div class="row-profil display-flex">
    <div class="position-img-profil">
      <img class="img-profil" src="<?= $gambar ? base_url('Image/user/' . $gambar) : base_url('Image/user/img-default.png') ?>" alt="">
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
    <h4> Iklan Anda </h4>
    <div class="row-card-layanan">
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

        <!-- 1 = active iklan -->
        <?php if ($tbl_rekomendasi_iklan['is_active'] == 1) : ?>
          <div class="card-layanan-list" style="height: 490px;">
            <div class="card-layanan">
              <figure class="card-figure-layanan">
                <img src="<?= base_url(); ?>/Image/iklan/<?= $tbl_rekomendasi_iklan['type_rekomendasi_iklan']; ?>/<?= $image; ?>" class="card-img-layanan">
              </figure>
              <button style="width: 110px;" class="btn btn-danger textcolor-white margin-top-7 cursor-pointer"> Suspend </button>
              <div class="row-title-layanan">
                <span class="title-layanan"><?= $nama_iklan . $nama_iklan_str; ?></span>
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

  <script>
    function detailIklan(url_detail) {
      window.location.href = `<?php echo base_url('iklan/detail-iklan'); ?>/${url_detail}`;
    }

    function editIklan(url_detail) {
      window.location.href = `<?php echo base_url('iklan/edit-iklan'); ?>/${url_detail}`;
    }

    function deleteIklan(id = 0){
      
      // $('#submit').html('Loading...');
      // $('#submit').prop('disabled', true);
      
      var id_rekomendasi_iklan = $('#id_rekomendasi_iklan'+id+' ').val();
      var id_iklan_rekomendasi = $('#id_iklan_rekomendasi'+id+' ').val();
      var table_iklan = $('#table_iklan'+id+' ').val();
  
      $.ajax({
          url: "<?= base_url('delete-iklan'); ?>",
          type: 'POST',
          headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
          data: {
            id_rekomendasi_iklan : id_rekomendasi_iklan,
            id_iklan : id_iklan_rekomendasi,
            table_iklan : table_iklan,
          },
          success: function(data) {
              console.log(data);
              return;
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

  