<?php

$session = \Config\Services::session();

$redirect = '#';
if ($session) {
    $redirect = '' . base_url('/login') . '';
}

?>

<header class="header display-flex justify-content-between margin-bottom-2">
    <div class="display-flex">
        <img class="img-logo" src="<?= base_url('Image/logo.jpg'); ?>" alt="semua">
        <a class="text-decoration-none" href="<?= base_url('logout'); ?>">
            <p class="text-logo">Alugada</p>
        </a>
    </div>
    <div class="menu">
        <ul>
            <li class="dropdown">
                <?php if (!$session->get("nama")) { ?>
                    <div class="display-flex cursor-pointer margin-right-10" id="login">
                        <p class=" text-header-user">
                            Login / Daftar <i class="fa fa-sign-in"></i>
                        </p>
                    </div>
                <?php } ?>
                <?php if ($session->get("nama")) { ?>
                    <div class="display-flex cursor-pointer">
                        <p class=" text-header-user"><?= $session->get("nama"); ?>
                            <i class="fa fa-chevron-down size"></i>
                        </p>
                        <img class="img-user-header" src="<?= base_url('Image/default-user.jpeg'); ?>" alt="semua">
                    </div>
                    <ul class="isi-dropdown">
                        <li id="profil"><a href="#"><i class="fa fa-user"></i>&nbsp;Profil</a></li>
                        <!-- <li><a href="#"><i class="fa fa-edit"></i>&nbsp;Password</a></li> -->
                        <li onclick="myFunction()"><a href="#"><i class="fa fa-sign-out"></i>&nbsp;Logout</a></li>
                    </ul>
                <?php } ?>
            </li>
        </ul>
    </div>
</header>

<script>
    function myFunction() {
        if (confirm("Apakah anda yakin untuk logout!") == true) {
            window.location.href = "<?php echo base_url('logout'); ?>";
        }
    }

    $('#login').click(function() {
        window.location.href = "<?php echo base_url('login'); ?>";
    });

    $('#profil').click(function() {
        window.location.href = "<?php echo base_url('profil'); ?>";
    });
</script>