<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>D-Mutasi | Data Mutasi</title>

<link rel="stylesheet" href="<?=base_url()?>assets/admin/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
  <body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    

    <!-- Navbar -->
   

    <!-- Main Sidebar Container -->
    <?php $this->load->view('v_menu'); ?>

    <div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Data Kepala Pejabat</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Kepala Pejabat  </li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

 <div class="card">
    <div class="card-header">Data Pejabat</div>
      <div class="card-body">
        <div class="row">
          
        <div class="col-md-3">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Kadis</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                <h5>Kepala Dinas Saat ini</h5>
               <form action="<?=base_url('Kepala')?>" method="post">
               <?php if ($kadis): ?>
                <p>Nama: <input type="text" name="nama" id="" class="form-control" value="<?= $kadis->nama?>"></p>
                <p>NIP: <input type="text" name="nip" id="" class="form-control" value="<?=$kadis->nip?>"></p>
                <input type="hidden" name="no_urut" value="<?=$kadis->no_urut?>">
                <input type="hidden" name="id_login" value="<?=$kadis->id_login?>">
                <?php endif;?> 
                <?php if ($kadis_akun): ?>
                <p>Username: <input type="text" name="username" id="" class="form-control" value="<?=$kadis_akun->username?>"></p>
                <p>Password: <input type="text" name="password" id="" class="form-control" value="<?=$kadis_akun->password?>"></p>
                <button type="submit" class="btn btn-success">Edit</button>
                <?php else: ?>
                    <p>Belum ada Data</p>
                <?php endif; ?>
               </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

          <div class="col-md-3">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Kabid</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header --> 
              <div class="card-body" style="display: block;">
                <h5>Kabid Saat ini</h5>
                <form action="<?=site_url('Kepala')?>" method="post">
               <?php if ($kabid): ?>
                <p>Nama: <input type="text" name="nama" id="" class="form-control" value="<?= $kabid->nama ?>"></p>
                <p>NIP: <input type="text" name="nip" id="" class="form-control" value="<?= $kabid->nip?>"></p>
                <input type="hidden" name="no_urut" value="<?= $kabid->no_urut?>">
                <input type="hidden" name="id_login" value="<?= $kabid->id_login?>">
                <?php endif; ?>
                <?php if ($kabid_akun):?>
                <p>Username: <input type="text" name="username" id="" class="form-control" value="<?= $kabid_akun->username?>"></p>
                <p>Password: <input type="text" name="password" id="" class="form-control" value="<?= $kabid_akun->password?>"></p>
                <button type="submit" class="btn btn-success">Edit</button>
                <?php else: ?>
                  <p>Belum ada Data</p>
                <?php endif; ?>
               
               </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

          <div class="col-md-3">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Kasi Kurikulum</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                <h5>Kasi Kurikulum Saat ini</h5>
                <form action="<?=site_url('Kepala')?>" method="post">
                <?php if ($kasi_kur): ?>
                <p>Nama: <input type="text" name="nama" id="" class="form-control" value="<?= $kasi_kur->nama?>"></p>
                <p>NIP: <input type="text" name="nip" id="" class="form-control" value="<?= $kasi_kur->nip?>"></p>
                <input type="hidden" name="no_urut" value="<?= $kasi_kur->no_urut?>">
                <input type="hidden" name="id_login" value="<?= $kasi_kur->id_login?>">
                <?php endif; ?>
                <?php if($kasi_kur_akun):?>
                <p>Username: <input type="text" name="username" id="" class="form-control" value="<?= $kasi_kur_akun->username?>"></p>
                <p>Password: <input type="text" name="password" id="" class="form-control" value="<?= $kasi_kur_akun->password?>"></p>
                <button type="submit" class="btn btn-success">Edit</button>
                <?php else: ?>
                  <p>Belum ada Data</p>
                <?php endif ;?>
               </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

          <div class="col-md-3">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Kasi Kesiswaan</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                <h5>Kasi Kesiswaan Saat ini</h5>
                <form action="<?=site_url('Kepala')?>" method="post">
                <?php if ($kasi_kesis) :?>
                <p>Nama: <input type="text" name="nama" id="" class="form-control" value="<?= $kasi_kesis->nama?>"></p>
                <p>NIP: <input type="text" name="nip" id="" class="form-control" value="<?= $kasi_kesis->nip?>"></p>
                <input type="hidden" name="no_urut" value="<?= $kasi_kesis->no_urut?>">
                <input type="hidden" name="id_login" value="<?= $kasi_kesis->id_login?>">
                <?php endif; ?>
                <?php if ($kasi_kesis_akun): ?>
                <p>Username: <input type="text" name="username" id="" class="form-control" value="<?= $kasi_kesis_akun->username?>"></p>
                <p>Password: <input type="text" name="password" id="" class="form-control" value="<?= $kasi_kesis_akun->password?>"></p>
                <button type="submit" class="btn btn-success">Edit</button>
                <?php else: ?>
                  <p>Belum ada Data</p>
                <?php endif; ?> 
               </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>


</div>
</div>
</div>
<?php if ($this->session->flashdata('sukses')): ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Sukses',
            text: '<?= $this->session->flashdata('sukses') ?>',
        });
    </script>
<?php endif; ?>
<?php if ($this->session->flashdata('error')): ?>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '<?= $this->session->flashdata('error') ?>',
        });
    </script>
<?php endif; ?>

</div>  
<footer class="main-footer">
      <strong>Copyright &copy; <?php echo date("Y")?> <a href="http://localhost/Zak">D-Mutasi Dev Team</a> by Zak Enterprise.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.2.3
      </div>
    </footer>
                </div>
  <!-- jQuery -->
  <script src="<?=base_url('assets/admin/plugins/jquery/jquery.min.js')?>"></script>
  
  <!-- Bootstrap 4 -->
  <script src="<?=base_url('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
  <!-- AdminLTE App -->
  <script src="<?=base_url('assets/admin/dist/js/adminlte.min.js')?>"></script>
  
    <script src="<?=base_url('assets/js/sort.js')?>"></script>
      
  <script src="<?=base_url('assets/admin/plugins/select2/js/select2.full.min.js')?>"></script>

