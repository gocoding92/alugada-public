<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1> 
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label for="exampleInputEmail1">Start Date</label>
            <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="exampleInputEmail1">End Date</label>
            <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group" style="margin-top: 32px;">
            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>&nbsp; Pencarian</button>
          </div>
        </div>

      </div>

      <hr />

      <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-info"><i class="far fa-user"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Users / Pengguna</span>
              <span class="info-box-number">1,410</span>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Pasang Iklan</span>
              <span class="info-box-number">13,648</span>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Pesan / Saran Masuk</span>
              <span class="info-box-number">93,139</span>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-6 col-12">
          <div class="info-box">
            <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">Kategori Layanan / Sub Layanan </span>
              <span class="info-box-number">410 / 120</span>
            </div>
          </div>
        </div>

      </div>

      <div class="row">
        <div class="col-md-4 col-sm-6 col-12">
          <div class="card card-widget widget-user-2 shadow-sm">
            <div class="widget-user-header bg-info">
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
              </div>
              <h3 class="widget-user-username">Tenaga Ahli</h3>
              <h5 class="widget-user-desc">Iklan</h5>
            </div>
            <div class="card-footer p-0">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Engineering <span class="float-right badge bg-primary">1</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Production <span class="float-right badge bg-primary">3</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Construction <span class="float-right badge bg-primary">5</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Marketing <span class="float-right badge bg-danger">0</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Finance <span class="float-right badge bg-danger">0</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Computer & Programming <span class="float-right badge bg-danger">0</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12">
          <div class="card card-widget widget-user-2 shadow-sm">
            <div class="widget-user-header bg-info">
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
              </div>
              <h3 class="widget-user-username">Tenaga Terampil</h3>
              <h5 class="widget-user-desc">Iklan</h5>
            </div>
            <div class="card-footer p-0">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Driver <span class="float-right badge bg-primary">1</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Sales Promotion Girl / Boy <span class="float-right badge bg-primary">3</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Babysitter <span class="float-right badge bg-primary">5</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Perawat Lansia <span class="float-right badge bg-danger">0</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Asisten Rumah Tangga <span class="float-right badge bg-danger">0</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Office Boy / Girl <span class="float-right badge bg-danger">0</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12">
          <div class="card card-widget widget-user-2 shadow-sm">
            <div class="widget-user-header bg-info">
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
              </div>
              <h3 class="widget-user-username">Kost & Kontrak</h3>
              <h5 class="widget-user-desc">Iklan</h5>
            </div>
            <div class="card-footer p-0">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Kost <span class="float-right badge bg-primary">1</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Kontrakan <span class="float-right badge bg-danger">0</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>

      <div class="row">
        <div class="col-md-4 col-sm-6 col-12">
          <div class="card card-widget widget-user-2 shadow-sm">
            <div class="widget-user-header bg-info">
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
              </div>
              <h3 class="widget-user-username">Property</h3>
              <h5 class="widget-user-desc">Iklan</h5>
            </div>
            <div class="card-footer p-0">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Rumah <span class="float-right badge bg-primary">1</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Tanah <span class="float-right badge bg-primary">10</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Apartemen <span class="float-right badge bg-primary">20</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Ruko <span class="float-right badge bg-danger">0</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Bangunan Komersial <span class="float-right badge bg-danger">0</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12">
          <div class="card card-widget widget-user-2 shadow-sm">
            <div class="widget-user-header bg-info">
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
              </div>
              <h3 class="widget-user-username">Mobil</h3>
              <h5 class="widget-user-desc">Iklan</h5>
            </div>
            <div class="card-footer p-0">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Mobil <span class="float-right badge bg-primary">1</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12">
          <div class="card card-widget widget-user-2 shadow-sm">
            <div class="widget-user-header bg-info">
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
              </div>
              <h3 class="widget-user-username">Motor</h3>
              <h5 class="widget-user-desc">Iklan</h5>
            </div>
            <div class="card-footer p-0">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Motor <span class="float-right badge bg-primary">1</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>








      <!-- /.container-fluid -->
  </section>
  <!-- /.content -->

</div>
<!-- /.content-wrapper -->

<?php echo $this->endSection(); ?>