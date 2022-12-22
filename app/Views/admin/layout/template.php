<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
  <!-- <script
        src="https://code.jquery.com/jquery-3.6.1.slim.min.js"
        integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA="
        crossorigin="anonymous">
    </script> -->




  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url(); ?>/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url(); ?>/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url(); ?>/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url(); ?>/admin/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>/admin/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url(); ?>/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url(); ?>/admin/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url(); ?>/admin/plugins/summernote/summernote-bs4.min.css">

  <link rel="stylesheet" href="<?= base_url(); ?>/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/custom/style.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- // navbar -->
    <?php echo $this->include('admin/layout/navbar'); ?>

    <!-- // content -->
    <?= $this->renderSection('content-admin'); ?>

    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?= base_url(); ?>/admin/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?= base_url(); ?>/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url(); ?>/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="<?= base_url(); ?>/admin/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="<?= base_url(); ?>/admin/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="<?= base_url(); ?>/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="<?= base_url(); ?>/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?= base_url(); ?>/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="<?= base_url(); ?>/admin/plugins/moment/moment.min.js"></script>
  <script src="<?= base_url(); ?>/admin/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="<?= base_url(); ?>/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="<?= base_url(); ?>/admin/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="<?= base_url(); ?>/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url(); ?>/admin/dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url(); ?>/admin/dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?= base_url(); ?>/admin/dist/js/pages/dashboard.js"></script>

  <script src="<?= base_url(); ?>/admin/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url(); ?>/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url(); ?>/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url(); ?>/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="<?= base_url(); ?>/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?= base_url(); ?>/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url(); ?>/admin/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url(); ?>/admin/dist/js/demo.js"></script>
  <!-- Page specific script -->

  <!-- <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.js"></script> -->


  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });

    function previewgambartambahlayanan() {
      const gambar = document.querySelector('#gambar');
      const labelgambar = document.querySelector('.lbl-gambar');
      const imgpreview = document.querySelector('.img-preview');

      const filegambar = new FileReader();
      filegambar.readAsDataURL(gambar.files[0])

      filegambar.onload = function(e) {
        imgpreview.src = e.target.result;
      }
    }

    function previewgambareditlayanan() {
      const gambar = document.querySelector('#gambar');
      const labelgambar = document.querySelector('.lbl-gambar');
      const imgpreview = document.querySelector('.img-preview');

      const filegambar = new FileReader();
      filegambar.readAsDataURL(gambar.files[0])

      filegambar.onload = function(e) {
        imgpreview.src = e.target.result;
      }
    }

    function previewgambartambahlayanan() {
      console.log("Benar");
      const gambar = document.querySelector('#gambartambah');
      const labelgambar = document.querySelector('.lbl-gambar');
      const imgpreview = document.querySelector('.img-preview-tambah');

      const filegambar = new FileReader();
      filegambar.readAsDataURL(gambar.files[0])

      filegambar.onload = function(e) {
        imgpreview.src = e.target.result;
      }
    }

    function edit_layanan(layanan, gambar, url, nolayanan, detaillayanan) {
      $('#editnolayanan').val(nolayanan);
      $('#editlayanan').val(layanan);
      $('#editdetaillayanan').val(detaillayanan);
      $('#editurl').val(url);
      $("#img-preview").attr("src", `<?php echo base_url('Image/Layanan'); ?>/${gambar} `);
    }

    // function editsublayanan(sublayanan){
    //   alert("Klik untuk edit sub layanan " +sublayanan);
    // }


  </script>
</body>

</html>