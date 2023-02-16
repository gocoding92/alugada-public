<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('iklan/css/styles'); ?>

<div id="home-page" class="row-sm">
  <?= $component_iklan ? $this->include($component_iklan) : null; ?>
</div>

<?= $this->endSection(); ?>