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
              <h1 class="m-0">Data Format Surat</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Format Surat  </li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

<div class="card">
    <div class="card-header">Data Format Surat</div>
<div class="card-body">
    <div class="row">
<div class="col-md-3">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">No Surat Mutasi Keluar</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
                <h5>Format Nomor Surat saat ini</h5>
               <form action="<?=base_url('Staf/edit_format')?>" method="post">
               <?php if ($keluar): ?>
                <input type="hidden" name="no_urut" value="<?= $keluar->no_urut?>">
                <p>Format: <input type="text" name="format" id="" class="form-control" value="<?= $keluar->format?>"></p>
                <button type="submit" class="btn btn-success">Edit</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#preview-keluar">Preview</button>
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
                <h3 class="card-title">No Surat Mutasi Masuk</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
              <h5>Format Nomor Surat saat ini</h5>
               <form action="<?=base_url('Staf/edit_format')?>" method="post">
               <?php if ($masuk): ?>
                <input type="hidden" name="no_urut" value="<?= $masuk->no_urut?>">
                <p>Format: <input type="text" name="format" class="form-control" value="<?= $masuk->format?>"></p>
                <button type="submit" class="btn btn-success">Edit</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#preview-masuk">Preview</button>
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
                <h3 class="card-title">No Surat Mutasi Keluar Negeri</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="display: block;">
              <h5>Format Nomor Surat saat ini</h5>
               <form action="<?=base_url('Staf/edit_format')?>" method="post">
               <?php if ($luar_negeri): ?>
                <input type="hidden" name="no_urut" value="<?= $luar_negeri->no_urut?>">
                <p>Format: <input type="text" name="format" id="" class="form-control" value="<?= $luar_negeri->format?>"></p>
                <button type="submit" class="btn btn-success">Edit</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#preview-luarneg">Preview</button>
                <?php else: ?>
                    <p>Belum ada Data</p>
                <?php endif; ?>
               </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

          <div class="modal fade" id="preview-keluar">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"> 
                <h4 class="modal-title">Preview Format Surat Mutasi keluar</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
          
            <iframe src="<?=site_url('Staf/preview_keluar')?>" frameborder="20" width="800" height="600"></iframe>


          </div>
         </div>
    </div>


</div>

<div class="modal fade" id="preview-masuk">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"> 
                <h4 class="modal-title">Preview Format Surat Mutasi masuk</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
          
            <iframe src="<?=site_url('Staf/preview_masuk')?>" frameborder="20" width="800" height="600"></iframe>


          </div>
         </div>
    </div>


</div>

<div class="modal fade" id="preview-luarneg">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"> 
                <h4 class="modal-title">Preview Format Surat Mutasi keluar negeri</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
          
            <iframe src="<?=site_url('Staf/preview_keluar_negeri')?>" frameborder="20" width="800" height="600"></iframe>


          </div>
         </div>
    </div>


</div>

</div>
</div>
</div>
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
<script>
$(document).ready(function() {
    $('form').on('submit', function(e) {
        e.preventDefault();
        
        Swal.fire({
            title: 'Konfirmasi',
            text: 'Apakah Anda yakin ingin mengubah format surat?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, ubah!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                var form = $(this);
                $.ajax({
                    url: form.attr('action'),
                    type: 'POST',
                    data: form.serialize(),
                    success: function(response) {
                        Swal.fire(
                            'Berhasil!',
                            'Format surat berhasil diubah.',
                            'success'
                        ).then(() => {
                            location.reload();
                        });
                    },
                    error: function() {
                        Swal.fire(
                            'Error!',
                            'Terjadi kesalahan saat mengubah format surat.',
                            'error'
                        );
                    }
                });
            }
        });
    });
});
</script>
      </div>
    </div>
</div>
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
  
  