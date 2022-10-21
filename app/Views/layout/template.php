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
    <link rel="stylesheet" href="<?= base_url(); ?>/custom/colors/colors.css">

    <!-- Slick style -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.3.11/slick.css" />
    <!-- Icon style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- SweetAlert CSS-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.3.11/slick.min.js"></script>

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

    <script type="text/javascript" src="<?= base_url(); ?>/home/js/custom.js"></script>
    <?php
    $alert = false;
    if ($_GET) {
        if ($_GET['success_iklan']) {
            $alert = true;
        }
    }
    ?>
    <script>
        $(document).ready(function() {
            <?php if ($alert) : ?>
                swal({
                    icon: "success",
                    title: "Sukses",
                    text: "Pasang Iklan di Alugada..",
                });

                setTimeout(() => {
                    window.location.href = window.location.pathname;
                }, 2800);
            <?php endif; ?>
        });
    </script>

    <script>
        $(function() {

            $(this).parent('.inputTag').hide();

            // Multiple images preview in browser
            var imagesPreview = function(input, placeToInsertImagePreview) {

                $(".gallery").html("");

                if (input.files) {
                    var filesAmount = input.files.length;
                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();
                        reader.onload = function(event) {
                            $($.parseHTML('<img class="upload-img-iklan">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                        }
                        reader.readAsDataURL(input.files[i]);
                    }
                }
            };

            $('#inputTag').on('change', function() {
                imagesPreview(this, 'div.gallery');
            });
        });
    </script>


</body>

</html>