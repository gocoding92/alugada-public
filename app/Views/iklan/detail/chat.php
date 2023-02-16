<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('iklan/css/styles'); ?>

<div id="home-page" class="row-sm">
  <p class="margin-left-16 margin-right-25 font-size-18 textcolor-303235  font-weight: 600;">Kontrakan 2 Bintaro</p>
  <p class="margin-left-16 margin-right-25 font-size-13 textcolor-303235 position-relative">Silahkan isi form pesan anda, tunggu 1x24 Jam untuk pengiklan balas pesan anda!</p>
    <div class="margin-bottom-12 margin-left-16" style="margin-right: 44px;">
        <textarea id="chat" class="form-control" placeholder="Contoh: Kontrakan masih tersedia ?" style="height: 100px;"></textarea>
    </div>
    <div class="margin-bottom-12 padding-right-20 padding-left-16 margin-top-20">
      <button id="submit" onclick="submitChat()" class="btn btn-primary width-100-percent textcolor-white"> Submit </button>
    </div>
</div>

<script>
  function submitChat() {
      var chat = $("#chat").val();

      $('#submit').html('Loading...');
      $('#submit').prop('disabled', true);

      $.ajax({
          url: "<?= base_url('iklan/detail/submit/chat'); ?>",
          type: 'POST',
          headers: {
              'X-Requested-With': 'XMLHttpRequest'
          },
          data: {chat: chat},
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