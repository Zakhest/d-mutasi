<!DOCTYPE html>
  <html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>D-Mutasi | Data Mutasi</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="<?=base_url()?>https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?=base_url()?>https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="icon" type="image/png" href="<?=base_url()?>assets/img/kota.png"/>

  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
   

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
       
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
             
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
        
            
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
           
              <!-- Message Start -->
              
              <!-- Message End -->
            </a>
           
        </li>
        <!-- Notifications Dropdown Menu -->
        

        <li class="nav-item">
         <a href="<?=base_url('login/logout')?>" class="btn btn-danger">Keluar</a>
        </li>
       
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="#" class="brand-link">
         <img src="<?=base_url()?>assets/img/kota.png" class="brand-image " style="opacity: .8">
        
        <span class="brand-text font-weight-light">D-Mutasi</span>
      
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
          <?php if($this->session->userdata('logged_in')) {

// Mendapatkan data login dari session
$username = $this->session->userdata('username');
$id_login = $this->session->userdata('id_login');


// Menampilkan data login ke halaman


} else {
// Jika pengguna belum login, tampilkan pesan error atau redirect ke halaman login
echo "Anda belum login!";
}
 ?>
          </div>
          <div class="info">
          <?php foreach ($user as $u) { ?>
            <a href="#" class="d-block"><?php echo $u->nama?></a>
            <?php } ?>
        </div>
        </div>

        <!-- SidebarSearch Form -->
     

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="<?=site_url('kep')?>" class="nav-link <?= ($active_menu == 'dashboard') ? 'active' : '' ?> ">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                
                </p>
              </a>
             
            </li>
            <?php if ($username == 'kadis'): ?>
              <li class="nav-item">
                <a href="<?=site_url('Kep/mutasi_ln')?>" class="nav-link <?= ($active_menu == 'mutasi_ln') ? 'active' : '' ?> ">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Mutasi Keluar Negeri</p>
                </a>
              </li>
            <?php elseif ($username == 'kabid'): ?>
              <li class="nav-item">
                <a href="<?=site_url('Kep/Mutasi_masuk')?>" class="nav-link <?= ($active_menu == 'mutasi_masuk') ? 'active' : '' ?>">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Data Mutasi Masuk</p>
                </a>
              </li>
            <?php elseif ($username == 'kasi_kur' || $username == 'kasi_kesis'): ?>
              <li class="nav-item">
                <a href="<?=site_url('Kep/mutasi')?>" class="nav-link <?= ($active_menu == 'index') ? 'active' : '' ?>">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Data Mutasi Keluar</p>
                </a>
              </li>
            <?php endif; ?>
          </ul>
          
          
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <script>
          document.getElementById('logout').addEventListener('click', function() {
            window.location.href = '<?=base_url('login/logout')?>';
          });
        </script>




