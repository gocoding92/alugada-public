<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>

    <link rel="stylesheet" href="<?= base_url(); ?>/home/css/styles.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/iklan/css/styles.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/custom/css/global.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/custom/css/component.css">

    <!-- Slick style -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.3.11/slick.css" />

    <style>
        @font-face {
            font-family: myFirstFont;
            src: url(<?= base_url(); ?>/fonts/Poppins-Regular.ttf);
        }

        div {
            font-family: myFirstFont;
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

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.3.11/slick.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>/home/js/custom.js"></script>

</body>

</html>