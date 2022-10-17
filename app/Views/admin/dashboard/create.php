<?php echo $this->extend('admin/layout/template'); ?>

<?php echo $this->section('content-admin'); ?>

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
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                        <form action="<?= base_url() ?>/administrator-area/dashboard/createSlider" method="post">
                                <div class="form-group">
                                    <label for="exampleinputnama">Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Enter Nama" required>
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleinputemail">Description</label>
                                    <!-- <input type="email" class="form-control" placeholder="Enter Email" required>
                                -->
                                <textarea name="description" class="form-control" id=""></textarea>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <!-- <textarea name="file" class="form-control" id="" cols="10" rows="5"></textarea> -->
                                    <input type="file" name="image" class="form-control">
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Submit</button>
                                <button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i> Reset</button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
      </div>
          <!-- </div> -->
            





      <!-- /.container-fluid -->
  </section>
  <!-- /.content -->

</div>
<!-- /.content-wrapper -->

<?php echo $this->endSection(); ?>