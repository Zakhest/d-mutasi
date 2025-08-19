<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>D-Mutasi | Data Mutasi</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome --> 
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    
    <!-- iChec
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    
    <!-- summernote -->

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap.min.css">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="<?=base_url()?>assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="icon" type="image/png" href="<?=base_url()?>assets/img/kota.png"/>
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">


  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    

    <!-- Navbar -->
    <?php if($this->session->userdata('logged_in')) {

// Mendapatkan data login dari session
$username = $this->session->userdata('username');


} else {
// Jika pengguna belum login, tampilkan pesan error atau redirect ke halaman login
echo "Anda belum login!";
}
 ?>

    <!-- Main Sidebar Container -->
    <?php $this->load->view('kep/v_menu'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><b>Dashboard</b></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item active">Dashboard </li>
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

                        <!-- Box 1 -->
                        <?php if ($username == 'kasi_kur' || $username == 'kasi_kesis'): ?>
                        <div class="col-lg-4 col-19">
                            <div class="small-box bg-info">
                                <div class="inner" id="count-container-1">
                                    <h3>
                                        <center>Jumlah Mutasi Keluar</center>
                                    </h3>
                                    <h3>
                                        <center><span class="count" data-target="<?= $mutasi_keluar; ?>">0</span> data baru</center>
                                    </h3>
                                </div>
                                <div class="icon">
                                    
                                </div>
                                <a href="<?= site_url('Kep/mutasi') ?>" class="small-box-footer">Cek <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        
                        <?php elseif ($username == 'kabid'): ?>
                        <!-- Box 2 -->
                        <div class="col-lg-4 col-6">
                            <div class="small-box bg-primary">
                                <div class="inner" id="count-container-2">
                                    <h3>
                                        <center>Jumlah Mutasi Masuk</center>
                                    </h3>
                                    <h3>
                                        <center><span class="count" data-target="<?= $mutasi_masuk; ?>">0</span> data baru</center>
                                    </h3>
                                </div>
                                <div class="icon">
                                    
                                </div>
                                <a href="<?= site_url('kep/mutasi_masuk') ?>" class="small-box-footer">Cek <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <?php elseif ($username == 'kadis'): ?>
                        <!-- Box 3 -->
                        <div class="col-lg-4 col-6">
                            <div class="small-box bg-success">
                                <div class="inner" id="count-container-3">
                                    <h3>
                                        <center>Mutasi Keluar Negeri</center>
                                    </h3>
                                    <h3>
                                        <center><span class="count" data-target="<?= $mutasi_keluar_negeri; ?>">0</span> data baru</center>
                                    </h3>
                                </div>
                                <div class="icon">
                                    
                                </div>
                                <a href="<?= site_url('Kep/mutasi_ln') ?>" class="small-box-footer">Cek <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <?php endif; ?>
                        <!-- Box 4 -->
                        
                    </div>
                    <?php foreach ($user as $u) { ?>
                        <marquee direction="left" scrollamount="23">
                            <div style="color:white;">
                                <h1>Selamat Datang, <?php echo $u->nama ?></h1>
                            </div>
                        </marquee>
                    <?php } ?>
                    <style>
                        marquee {
                            background-color: #00b8ff;
                            font-family: Times New Roman;
                            font-size: 25px;
                        }

                        h1 {
                            font-family: Arial, sans-serif;
                        }
                    </style>
                </div>
                <!-- /.row (main row) -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <script>
        // Fungsi untuk melakukan animasi perhitungan
        function countUp(element, target) {
            let current = 0;
            const increment = Math.ceil(target / 200);
            const interval = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(interval);
                }
                element.text(current);
            }, 60);
        }

        $(document).ready(function () {
            $('.count').each(function () {
                const target = +$(this).data('target');
                countUp($(this), target);
            });
        });
    </script>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2023 <a href="http://localhost/Zak">E-Mutasi Dev Team</a> by Zak Enterprise.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> <?php echo $version ?>
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  
<!-- Bootstrap 4 -->
<script src="<?=base_url('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('assets/admin/dist/js/adminlte.min.js')?>"></script>

 <!--   -->
    <script>
    document.getElementById("logout").addEventListener("click", function () {
          window.location.href = "logout"; // Ganti URL_HALAMAN_TUJUAN dengan URL yang sesuai
      });
  </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>



<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

  </body>
  </html>
