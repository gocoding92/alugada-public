<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="home-page" class="row-sm padding-bottom-90">
  <?= $form ? $this->include($form) : null; ?>
</div>
<?= $this->endSection(); ?>