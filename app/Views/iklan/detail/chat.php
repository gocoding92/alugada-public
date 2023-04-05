<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('iklan/css/styles'); ?>

<div id="home-page" class="row-sm">
  <p class="margin-left-16 margin-right-25 font-size-18 textcolor-303235  font-weight: 600;"><?php echo $nama_iklan ? $nama_iklan : '-' ; ?></p>
  <p class="margin-left-16 margin-right-25 font-size-13 textcolor-303235 position-relative">Silahkan isi form pesan anda, tunggu 1x24 Jam untuk pengiklan balas pesan anda!</p>
    <div class="margin-bottom-12 margin-left-16" style="margin-right: 44px;">
        
        <!-- hidden form -->
        <input type="hidden" id="nama_iklan" value="<?php echo $nama_iklan; ?>">
        <input type="hidden" id="id_rekomendasi_iklan" value="<?php echo $id_rekomendasi_iklan; ?>">
        <input type="hidden" id="id_iklan" value="<?php echo $id_iklan; ?>">
        <input type="hidden" id="type_iklan" value="<?php echo $type_iklan; ?>">
        <input type="hidden" id="table" value="<?php echo $table; ?>">
        <input type="hidden" id="nohp" value="<?php echo $nohp; ?>">
        <input type="hidden" id="nama_pengiklan" value="<?php echo $nama_pengiklan; ?>">
        <input type="hidden" id="id_pengiklan" value="<?php echo $id_pengiklan; ?>">

        <textarea id="chat" class="form-control" placeholder="Contoh: Kontrakan masih tersedia ?" style="height: 100px;"></textarea>
    </div>
    <div class="margin-bottom-12 padding-right-20 padding-left-16 margin-top-20">
      <button id="submit" onclick="submitChat()" class="btn btn-primary width-100-percent textcolor-white"> Submit </button>
    </div>
</div>

<script>
  function submitChat() {
      var nama_iklan = $("#nama_iklan").val();
      var id_rekomendasi_iklan = $("#id_rekomendasi_iklan").val();
      var id_iklan = $("#id_iklan").val();
      var type_iklan = $("#type_iklan").val();
      var table = $("#table").val();
      var nohp = $("#nohp").val();
      var nama_pengiklan = $("#nama_pengiklan").val();
      var chat = $("#chat").val();
      var id_pengiklan = $("#id_pengiklan").val();

      $('#submit').html('Loading...');
      $('#submit').prop('disabled', true);

      $.ajax({
          url: "<?= base_url('iklan/detail/submit/chat'); ?>",
          type: 'POST',
          headers: {
              'X-Requested-With': 'XMLHttpRequest'
          },
          data: {
              nama_iklan: nama_iklan,
              id_rekomendasi_iklan: id_rekomendasi_iklan,
              id_iklan: id_iklan,
              type_iklan: type_iklan,
              table: table,
              nohp: nohp,
              nama_pengiklan: nama_pengiklan,
              chat: chat,
              id_pengiklan: id_pengiklan
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
                      window.location.href = "<?php echo base_url('/beranda'); ?>";
                  }, 2000);
              }
          }
      });
    }
</script>

<?= $this->endSection(); ?>