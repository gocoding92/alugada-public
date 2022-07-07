<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>

<style>
.max-w-screen-sm {
    max-width: 480px!important;
    background-color: #fff;
    padding: 16px 16px 80px;
}
.mx-auto {
    margin-left: auto!important;
    margin-right: auto!important;
}
.min-h-full {
    min-height: 100%!important;
}
</style>


<main class="max-w-screen-sm mx-auto min-h-full">
    <center>    
        <h3> Hello, Alugada.co.id </h3>
    </center>
</main>

<?php echo $this->endSection(); ?>