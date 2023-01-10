<?php echo $this->extend('admin/layout/template'); ?>

<?php echo $this->section('content-admin'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Users / Pengguna</h1>
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


    <div class="row mb-2">
        <div class="col-sm-3">
          <a href="<?php $x='admin-user-baru';?><?= base_url($x).'/'.$x; ?>">
            <h3 class="m-0">user Baru</h3>
            </a>
        </div>
        <div class="col-sm-2">
          <a href="<?php $x='admin-user-aktif';?><?= base_url($x).'/'.$x; ?>">
            <h3 class="m-0">Aktif</h3>
          </a>
        </div>
        <div class="col-sm-3">
          <!-- <a href="<?php //echo base_url('admin-user-tidak-aktif'); ?>"> -->
          <a href="<?php $x='admin-user-tidak-aktif';?><?= base_url($x).'/'.$x; ?>">
            <h3 class="m-0">Tidak Aktif</h3>
          </a>
        </div>
        <div class="col-sm-2">
          <!-- <a href="<?php //echo base_url('admin-user-suspend'); ?>"> -->
          <a href="<?php $x='admin-user-suspend';?><?= base_url($x).'/'.$x; ?>">
            <h3 class="m-0">Suspend</h3>
          </a>
        </div>
        <div class="col-sm-2">
          <!-- <a href="<?php //echo base_url('admin-user-block'); ?>"> -->
          <a href="<?php $x='admin-user-block';?><?= base_url($x).'/'.$x; ?>">
            <h3 class="m-0">Block</h3>
          </a>
        </div>

      </div><!-- /.row -->
   
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <!-- <h3 class="card-title">
                <a href="<?php //echo base_url(); ?>/users/create" class="btn btn-primary"><i class="fa fa-plus"></i> Add Users</a>
              </h3> -->
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>No Hp</th>
                    <!-- <th>Jenis Kelamin</th> -->
                    <!-- <th>No Handphone</th> -->
                    <!-- <th>Email</th> -->
                    <!-- <th>Password</th> -->
                    <th>Checked</th>
                    <!-- <th>No Rek</th> -->
                    <!-- <th>Gopay</th> -->
                    <!-- <th>Ovo</th> -->
                    <th>Suspend</th>
                    <th>Is Active</th>
                    <?php if($multisuspend == "admin-user-baru"){?>
                      <th>Action</th>
                    <?php };?>
                  </tr>
                </thead>
                <tbody>
                    <?php $no=0;?>
                    <?php foreach($user as $user):?>
                        <?php //if($user['checked']==0){?>
                          <tr>
                            <?php $no=$no+1;?>
                            <td><?= $no;?></td>
                            <td><?= $user['nama'];?></td>
                            <td><?= $user['nohp'];?></td>
                            <!-- <td>Laki-Laki</td> -->
                            <!-- <td>08811501574</td> -->
                            <!-- <td>aman@gmail.com</td> -->
                            <td><?= $user['checked'];?></td>
                            <td><?= $user['suspend'];?></td>
                            <td><?= $user['is_active'];?></td>
                            <!-- <td>.</td>
                            <td>.</td>
                            <td>0</td>
                            <td>1</td> -->
                            <?php if($multisuspend == "admin-user-baru"){?>
                              <td>
                                <a href="<?= base_url('admin-user-check').'/'."0".'/'.$user['id'];?>">
                                  <span class="right badge badge-primary"><i class="fa fa-edit"></i> Ok</span>
                                </a>
                                <a href="<?= base_url('admin-user-check').'/'."1".'/'.$user['id'];?>">
                                  <span class="right badge badge-warning"><i class="fa fa-trash"></i> Warning</span>
                                </a>
                                <a href="<?= base_url('admin-user-check').'/'."2".'/'.$user['id'];?>">
                                  <span class="right badge badge-danger"><i class="fa fa-trash"></i> Block</span>
                                </a>
                              </td>
                            <?php };?>
                          </tr>
                        <?php //};?>
                    <?php endforeach;?>
                    
                    <?php if($multisuspend == "admin-user-suspend"){?>
                      <?php foreach($user1 as $user):?>
                        <?php //if($user['checked']==0){?>
                          <tr>
                            <?php $no=$no+1;?>
                            <td><?= $no;?></td>
                            <td><?= $user['nama'];?></td>
                            <td><?= $user['nohp'];?></td>
                            <!-- <td>Laki-Laki</td> -->
                            <!-- <td>08811501574</td> -->
                            <!-- <td>aman@gmail.com</td> -->
                            <td><?= $user['checked'];?></td>
                            <td><?= $user['suspend'];?></td>
                            <td><?= $user['is_active'];?></td>
                            <!-- <td>.</td>
                            <td>.</td>
                            <td>0</td>
                            <td>1</td> -->
                            <?php if($multisuspend == "admin-user-baru"){?>
                                <td>
                                  <a href="<?= base_url('admin-user-check').'/'."0".'/'.$user['id'];?>">
                                    <span class="right badge badge-primary"><i class="fa fa-edit"></i> Ok</span>
                                  </a>
                                  <a href="<?= base_url('admin-user-check').'/'."1".'/'.$user['id'];?>">
                                    <span class="right badge badge-warning"><i class="fa fa-trash"></i> Warning</span>
                                  </a>
                                  <a href="<?= base_url('admin-user-check').'/'."2".'/'.$user['id'];?>">
                                    <span class="right badge badge-danger"><i class="fa fa-trash"></i> Block</span>
                                  </a>
                                </td>
                            <?php };?>
                          </tr>
                        <?php //};?>
                    <?php endforeach;?>
                    <?php };?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>


    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php echo $this->endSection(); ?>