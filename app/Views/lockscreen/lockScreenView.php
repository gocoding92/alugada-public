<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lockscreen</title>

  <link rel="stylesheet" href="<?= base_url(); ?>/home/css/styles.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/iklan/css/styles.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/custom/css/global.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/custom/css/component.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/custom/colors/colors.css">

  <!-- Icon style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- SweetAlert CSS-->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>

  <!-- Alert Notif -->
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>

  <style>
    @font-face {
      font-family: myFirstFont;
      src: url(<?= base_url(); ?>/fonts/Poppins-Regular.ttf)
    }
  </style>

</head>

<body style="background-color: #f7f7f7; margin: 0px;">

  <main class="container-sm">
    <header class="header display-flex justify-content-between margin-bottom-2">
      <div class="display-flex">
        <img class="img-logo" src="<?= base_url('Image/logo.jpg'); ?>" alt="semua">
        <a class="text-decoration-none" href="#">
          <p class="text-logo">Alugada</p>
        </a>
      </div>
    </header>
    <div id="home-page" class="row-sm padding-bottom-90">
      <p class="margin-left-16 font-size-18 textcolor-303235  font-weight: 600;">Selamat datang di Alugada!</p>
      <p class="margin-left-16 font-size-13 textcolor-303235 position-relative top-min14"> <i class="fa fa-info"></i> Aplikasi Demo "Pasang Iklan" Alugada</p>
      <div class="row">

          <div class="margin-bottom-12 padding-right-46 padding-left-16">
            <label for="password" class="font-size-13">Masukkan Password <span class="textcolor-red"> *</span></label>
            <input type="password" id="password" class="form-control margin-top-6" placeholder="***">
          </div>
            <div class="margin-bottom-12 padding-right-20 padding-left-16 margin-top-20">
              <button id="submit" class="btn btn-primary width-100-percent textcolor-white"> Submit </button>
            </div>
        </form>
      </div>
    </div>
  </main>

  <?= $this->include("script/lockscreen"); ?>

</body>

</html>