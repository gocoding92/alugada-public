<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="home-page" style="background-color: #fafafa" class="row-sm padding-bottom-90">
  <?= $form ? $this->include($form) : null; ?>
</div>
<?= $this->endSection(); ?>