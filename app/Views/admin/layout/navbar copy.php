<!-- Preloader -->
  <!-- CSS  -->
  <link rel="stylesheet" href="Admin/css/style.css">


<div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__shake" src="<?= base_url(); ?>/admin/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
</div>












<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <!-- <a href="index3.html" class="nav-link">Dashboard - Logout</a> -->
      <a href="<?= base_url('logout'); ?>" class="nav-link">Dashboard - Logout</a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto menu">

    <!-- Messages Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-comments"></i>
        <span class="badge badge-danger navbar-badge">3</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <img src="<?= base_url(); ?>/admin/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                Brad Diesel
                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
              </h3>
              <p class="text-sm">Call me whenever you can...</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <img src="<?= base_url(); ?>/admin/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                John Pierce
                <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
              </h3>
              <p class="text-sm">I got your message bro</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <!-- Message Start -->
          <div class="media">
            <img src="<?= base_url(); ?>/admin/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
            <div class="media-body">
              <h3 class="dropdown-item-title">
                Nora Silvester
                <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
              </h3>
              <p class="text-sm">The subject goes here</p>
              <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
            </div>
          </div>
          <!-- Message End -->
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
      </div>
    </li>
    <!-- Notifications Dropdown Menu -->
    <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="far fa-bell"></i>
        <span class="badge badge-warning navbar-badge">15</span>
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
        <span class="dropdown-item dropdown-header">15 Notifications</span>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-envelope mr-2"></i> 4 new messages
          <span class="float-right text-muted text-sm">3 mins</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-users mr-2"></i> 8 friend requests
          <span class="float-right text-muted text-sm">12 hours</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item">
          <i class="fas fa-file mr-2"></i> 3 new reports
          <span class="float-right text-muted text-sm">2 days</span>
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>
  </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="<?= base_url(); ?>/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Alugada</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar" onmouseover="tandaaktif()">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo base_url(); ?>/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        <!-- <img src="<?php //echo base_url('Image/User/'.$user['gambar']); 
                        ?>" class="img-circle elevation-2" alt="User Image"> -->
      </div>
      <div class="info">
        <a href="#" class="d-block">Namaku</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="./index.html" class="nav-link active">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard v1</p>
              </a>
            </li>
          </ul>
        </li> -->
        <li class="nav-item">
          <a href="<?php echo base_url('/administrator-area/pesan');?>" class="nav-link" onclick="sideaktif()">
            <i class="nav-icon fas fa-inbox"></i>
            <p class="pesansaran">
              Pesan / Saran Masuk
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('/administrator-area-tentangkami');?>" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p class="tentangkami">
              Tentang kami
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('/administrator-area-hubungikami');?>" class="nav-link" >
            <i class="nav-icon fas fa-user"></i>
            <p class="hubungikami">
              Hubungi kami
            </p>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a href="<?php //echo base_url('/administrator-area-hubungikami');?>" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Hubungi kami
            </p>
          </a>
        </li> -->
        <li class="nav-item">
          <a href="<?php echo base_url('/administrator-area/dashboard')
                    ?>" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p class="laporkanpengguna">
              Laporan Pengguna
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('/administrator-area/iklan') ?>" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p class="iklanbaru">
              Iklan Baru
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?php echo base_url('/admin-slider') ?>" class="nav-link" onclick="edit_slider()">
            <i class="nav-icon fas fa-list"></i>
            <p>
              Slider
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?php echo base_url('/admin-layanan') ?>" class="nav-link">
            <i class="nav-icon fas fa-list"></i>
            <p class="layanan">
              Layanan
            </p>
          </a>
        </li>


      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<script>
  function sideaktif(){
// alert("Klik benar");
    // $('.pesansaran').css('color','red');
  }

  function tandaaktif(){
    // alert("Benar");
    // $('p').css('color','red');
  }
</script>