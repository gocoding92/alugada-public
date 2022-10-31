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
                <div class="display-flex"">
                    <p class=" text-header-user"><?= $session->get("nama") ? $session->get("nama") : 'Login / Daftar' ?> <i class="fa fa-chevron-down size"></i></p>
                    <img class="img-user-header" src="<?= base_url('Image/default-user.jpeg'); ?>" alt="semua">
                </div>
                <?php if ($session->get("nama")) { ?>
                    <ul class="isi-dropdown">
                        <li><a href="#"><i class="fa fa-user"></i>&nbsp;Profil Saya</a></li>
                        <li><a href="#"><i class="fa fa-edit"></i>&nbsp;Ubah Password</a></li>
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
</script>