<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- bootstrap -->

    <link rel="stylesheet" href="<?= base_url(); ?>/home/css/styles.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/iklan/css/styles.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/custom/css/global.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/custom/css/component.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/custom/colors/colors.css">

    <!-- Slick style -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.3.11/slick.css" />
    <!-- Icon style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        @font-face {
            font-family: myFirstFont;
            src: url(<?= base_url(); ?>/fonts/Poppins-Regular.ttf)
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

    <!-- Bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- Bootstrap -->

    <script>
        function previewgambar() {
            const gambar = document.querySelector('#gambar');
            const labelgambar = document.querySelector('.lbl-gambar');
            const imgpreview = document.querySelector('.img-preview');

            const filegambar = new FileReader();
            filegambar.readAsDataURL(gambar.files[0])

            filegambar.onload = function(e) {
                imgpreview.src = e.target.result;
            }
        }

        function previewgambar2() {
            const gambar = document.querySelector('#gambar2');
            const labelgambar = document.querySelector('.lbl-gambar2');
            const imgpreview = document.querySelector('.img-preview2');
            const filegambar = new FileReader();
            filegambar.readAsDataURL(gambar.files[0])

            filegambar.onload = function(e) {
                imgpreview.src = e.target.result;
            }
        }

        function previewgambar3() {
            const gambar = document.querySelector('#gambar3');
            const labelgambar = document.querySelector('.lbl-gambar3');
            const imgpreview = document.querySelector('.img-preview3');
            const filegambar = new FileReader();
            filegambar.readAsDataURL(gambar.files[0])

            filegambar.onload = function(e) {
                imgpreview.src = e.target.result;
            }
        }

        function previewgambar4() {
            const gambar = document.querySelector('#gambar4');
            const labelgambar = document.querySelector('.lbl-gambar4');
            const imgpreview = document.querySelector('.img-preview4');
            const filegambar = new FileReader();
            filegambar.readAsDataURL(gambar.files[0])

            filegambar.onload = function(e) {
                imgpreview.src = e.target.result;
            }
            console.log('gambar');
        }

        function previewgambar5() {
            const gambar = document.querySelector('#gambar5');
            const labelgambar = document.querySelector('.lbl-gambar5');
            const imgpreview = document.querySelector('.img-preview5');
            const filegambar = new FileReader();
            filegambar.readAsDataURL(gambar.files[0])

            filegambar.onload = function(e) {
                imgpreview.src = e.target.result;
            }
        }

        function previewgambar6() {
            const gambar = document.querySelector('#gambar6');
            const labelgambar = document.querySelector('.lbl-gambar6');
            const imgpreview = document.querySelector('.img-preview6');
            const filegambar = new FileReader();
            filegambar.readAsDataURL(gambar.files[0])

            filegambar.onload = function(e) {
                imgpreview.src = e.target.result;
            }
        }
    </script>


</body>

</html>