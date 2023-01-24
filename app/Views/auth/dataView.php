<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="home-page" class="row-sm padding-bottom-90">
  <p class="margin-left-16 font-size-18 textcolor-303235  font-weight: 600;"> Profil Data</p>
  <p class="margin-left-16 font-size-13 textcolor-303235 position-relative top-min14">Silahkan isi data anda dengan lengkap</p>
  <div class="row">
    <div class="margin-bottom-12 padding-right-46 padding-left-16">
      <label for="nohp" class="font-size-13">Masukkan Nama <span class="textcolor-red"> *</span></label>
      <input type="text" id="name" placeholder="Nama" class="form-control margin-top-6">
    </div>
    <div class="margin-bottom-12 padding-right-46 padding-left-16">
      <label for="nohp" class="font-size-13">Masukkan Password <span class="textcolor-red"> *</span>
        <input type="password" id="password" placeholder="Password" class="form-control margin-top-6">
    </div>
    <p id="show-password" class="show-password cursor-pointer">
      <i class="fa fa-eye" id="icon-show"></i> <span id="text-show"> Tampilkan Password </span>
    </p>
    <div class="margin-bottom-12 padding-right-20 padding-left-16 margin-top-20">
      <button id="submit" class="btn btn-primary width-100-percent textcolor-white"> Submit </button>
    </div>
    </form>

  </div>
</div>

<?= $this->include("script/data"); ?>

<script>
  $("#show-password").click(function() {
    var password = $('#password').attr('type');
    $("#icon-show").removeClass('fa fa-eye-slash').addClass('fa fa-eye');
    var textShow = 'Tampilkan Password';

    var type = 'password';
    if (password === 'password') {
      type = 'text';
      textShow = 'Sembunyikan Password';
      $("#icon-show").removeClass('fa fa-eye').addClass('fa fa-eye-slash');
    }

    $('#password').attr('type', type);
    $('#text-show').text(textShow);
  });
</script>

<?= $this->endSection(); ?>