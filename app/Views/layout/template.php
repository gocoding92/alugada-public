<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>

    <link rel="stylesheet" href="<?= base_url(); ?>/home/css/styles.css?v=<?=rand(1,1000)?>">
    <link rel="stylesheet" href="<?= base_url(); ?>/iklan/css/styles.css?v=<?=rand(1,1000)?>">
    <link rel="stylesheet" href="<?= base_url(); ?>/custom/css/global.css?v=<?=rand(1,1000)?>">
    <link rel="stylesheet" href="<?= base_url(); ?>/custom/css/component.css?v=<?=rand(1,1000)?>">
    <link rel="stylesheet" href="<?= base_url(); ?>/custom/colors/colors.css">

    <!-- Slick style -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.3.11/slick.css" />
    <!-- Icon style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- SweetAlert CSS-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Alert Notif -->
    <!-- <link rel="stylesheet" href="library/notif/js-snackbar.css?v=1.3" /> -->

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.3.11/slick.min.js"></script>

    <!-- Alert Notif -->
    <!-- <script src="library/notif/js-snackbar.js?v=1.4"></script> -->
    <!-- <script src="library/notif/site.js?v=1.0.0"></script> -->

    <!-- Alert Notif -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.2/js/toastr.min.js"></script>

    <style>
        @font-face {
            font-family: myFirstFont;
            src: url(<?= base_url(); ?>/fonts/Poppins-Regular.ttf)
        }

        .upload-img-iklan {
            width: 80px;
            border-radius: 4px;
            margin-left: 6px;
            height: 70px;
        }
    </style>

</head>

<body style="background-color: #f7f7f7; margin: 0px;">

    <main class="container-sm">
        <!-- // content -->
        <?php echo $this->include('layout/header'); ?>

        <!-- // content -->
        <?= $this->renderSection('content'); ?>

        <!-- // navbar bottom -->
        <?php echo $this->include('layout/navbar'); ?>
    </main>

    <script type="text/javascript" src="<?= base_url(); ?>/home/js/custom.js?v=<?=rand(1,1000)?>"></script>

</body>

</html>