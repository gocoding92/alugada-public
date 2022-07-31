<header class="header display-flex justify-content-between margin-bottom-2">
    <div class="display-flex">
        <img class="img-logo" src="<?= base_url('Image/logo.jpg'); ?>" alt="semua">
        <a class="text-decoration-none" href="<?= base_url('logout'); ?>">
            <p class="text-logo">Alugada - Logout</p>
        </a>
    </div>
    <div class="display-flex">
        <!-- // validasi. jika sudah login, base url nya / profile (<?= base_url(); ?>/profile) -->
        <?php if($pengunjung['nohp'] == 123){?>
            <a href="<?php echo base_url('login'); ?>">
                <p class="text-header-user"><?= $pengunjung['nama']; ?></p>
                <img class="img-user-header" src="<?= base_url('Image/User/' . $pengunjung['gambar']); ?>" alt="semua">
            </a>            
        <?php }else{?>
            <a href="<?php echo base_url('profile'); ?>">
                <p class="text-header-user"><?= $pengunjung['nama']; ?></p>
                <img class="img-user-header" src="<?= base_url('Image/User/' . $pengunjung['gambar']); ?>" alt="semua">
            </a>            
        <?php };?>
    </div>
</header>