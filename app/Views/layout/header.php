<header class="header display-flex justify-content-between margin-bottom-2">
    <div class="display-flex">
        <img class="img-logo" src="<?= base_url('Image/logo.jpg'); ?>" alt="semua">
        <p class="text-logo">Alugada</p>
    </div>
    <div class="display-flex">
        <p class="text-header-user"><?= $pengunjung['nama']; ?></p>
        <img class="img-user-header" src="<?= base_url('Image/User/' . $pengunjung['profile']); ?>" alt="semua">
    </div>
</header>