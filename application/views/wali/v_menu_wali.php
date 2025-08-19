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
<style>
  .nav-link.aktif
  {
    border-bottom: 1px solid grey;
    border-top: 1px solid grey;
    color: white;
    font-size: 20px;
   
  }
</style>
  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <?php
function is_active($controller, $functions = ['index']) {
    $current_controller = $this->uri->segment(1); // Get the controller from the URL
    $current_function = $this->uri->segment(2);   // Get the function from the URL (default is 'index')

    return ($current_controller == $controller && in_array($current_function, $functions));
}
?>


    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="" role="button"><i class="fas fa-bars"></i></a>
        </li>
       
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
       


        <!-- Notifications Dropdown Menu -->
        

        <li class="nav-item">
          <button type="submit" onclick="logout()" class="btn btn-danger">Keluar</button>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <script>
      
      function logout() {
        // Mengarahkan pengguna ke halaman login atau logout
        window.location.href = '<?=site_url('login/logout')?>'; // Ganti '/login' dengan URL halaman login atau logout
    }
    </script>

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
$nama_wali = $this->session->userdata('nama_wali');
$id_login = $this->session->userdata('id_login');


} else {
// Jika pengguna belum login, tampilkan pesan error atau redirect ke halaman login
echo "Anda belum login!";
}
 ?>
          </div>
            <div class="info">
              <a href="#" class="d-block" data-toggle="modal" data-target="#profileModal"><?php echo $nama_wali ?></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
     

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="<?=site_url('Wali/Dashboard/index')?>" class="nav-link <?= ($active_menu == 'dashboard') ? 'active' : '' ?>  ">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                
                </p>
              </a>
             
            </li>
            <li class="nav-header nav-link aktif"><p >  Mutasi Keluar</p></li>
           
            <li class="nav-item">
              <a href="<?=site_url('Wali/Mutasi_kel')?>" class="nav-link <?= ($active_menu == 'mutasi_kel_sek') ? 'active' : '' ?>  ">
                <i class="far fa-circle nav-icon"></i>
                <p style="white-space: ;">
                Mutasi Keluar Antarsekolah
                
                </p>
              </a>
              </li>
              <li class="nav-item">
              <a href="<?=site_url('Wali/Mutasi_kel/antarkota')?>" class="nav-link <?= ($active_menu == 'mutasi_kel_kot') ? 'active' : '' ?>  ">
                <i class="far fa-circle nav-icon"></i>
                <p style="white-space: nowrap;">
                Mutasi Keluar Antarkota
                
                </p>
              </a>
              </li>
              <li class="nav-item">
              <a href="<?=site_url('Wali/Mutasi_kel/antarprovinsi')?>" class="nav-link <?= ($active_menu == 'mutasi_kel_prov') ? 'active' : '' ?>  ">
                <i class="far fa-circle nav-icon"></i>
                <p style="white-space: ;">
                Mutasi Keluar Antarprovinsi
                
                </p>
              </a>
              </li>
          
              <li class="nav-header nav-link aktif">Mutasi Masuk</li>
            <li class="nav-item">
              <a href="<?=site_url('Wali/Mutasi_mas/index')?>" class="nav-link <?= ($active_menu == 'mutasi_mas') ? 'active' : '' ?> ">
                <i class="nav-icon fas fa-file"></i>
                <p>
                
                Mutasi Masuk
                </p>
              </a>
             
            </li>
            <li class="nav-header nav-link aktif">Mutasi Keluar Negeri</li>
            <li class="nav-item">
              <a href="<?=site_url('Wali/Mutasi_luar_neg/')?>" class="nav-link <?= ($active_menu == 'mutasi_ln') ? 'active' : '' ?>  ">
                <i class="nav-icon fas fa-file"></i>
                <p>
                Mutasi Keluar Negeri
                
                </p>
              </a>
             
            </li>
           
          </ul>
        </nav>
      



        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <script>
$(document).ready(function() {
    $.ajax({
        url: '<?=site_url('wali/Menu/')?>',
        type: 'GET',
        dataType: 'json',
        success: function(response) {
            if (response.status === 'success') {
                var user = response.user;
                $('#nama_wali').val(user.nama_wali);
                $('#no_telp').val(user.no_telp);
                $('#username').val(user.username);
                $('#password').val(user.password);
            } else {
                alert(response.message);
            }
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
});
</script>
    

<!-- Profile Modal -->
<div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="profileModalLabel">Lihat Profil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="profileForm" action="<?=site_url('Wali/EditData/UpdProfil')?>" method="post">
          <div class="form-group">
            <label for="nama_wali">Nama Wali</label>
            <input type="text" class="form-control" name="nama_wali" id="nama_wali" readonly>
            <input type="hidden" name="id_login" value="<?php echo $id_login ?>">
          </div>
          <div class="form-group">
            <label for="no_telp">No. Telp</label>
            <input type="text" class="form-control" name="no_telp" id="no_telp"  readonly>
          </div>
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" id="username"  readonly>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-control" name="password" id="password"  readonly>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
        <button type="button" class="btn btn-primary" id="editButton">Ubah</button>
        <button type="submit" class="btn btn-success" style="display:none;" id="simpan">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script>
  document.getElementById('editButton').addEventListener('click', function() {
    var inputs = document.querySelectorAll('#profileForm input');
    var submit = document.getElementById('simpan');
    var editButton = document.getElementById('editButton');
    var isReadOnly = inputs[0].readOnly;

    inputs.forEach(function(input) {
      input.readOnly = !input.readOnly;
    });

    if (isReadOnly) {
      submit.style.display = 'block';
      editButton.textContent = 'Batal';
    } else {
      submit.style.display = 'none';
      editButton.textContent = 'Ubah';
    }
  });
</script>






