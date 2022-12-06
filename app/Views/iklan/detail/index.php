<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div>
  <div class="fade">
    <div><img src="https://i.ytimg.com/vi/f_fC54rC9hc/maxresdefault.jpg" /></div>
    <div><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkihA1QQqZxNnO83gFHJB3FJdZVOxC-hsYZA&usqp=CAU" /></div>
    <div><img src="https://i.ytimg.com/vi/vql_cCL-YLE/maxresdefault.jpg" /></div>
  </div>
</div>

<div id="home-page" class="row-sm">
  <?= $detail_iklan ? $this->include($detail_iklan) : null; ?>
</div>

<?= $this->endSection(); ?>