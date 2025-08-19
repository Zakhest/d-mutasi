<link rel="stylesheet" href="<?=base_url()?>assets/admin/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
      <link rel="icon" type="image/png" href="<?=base_url()?>assets/img/kota.png"/>
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
    <title>Detail Mutasi Keluar Negeri | E-Mutasi</title>
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Detail Data Mutasi Keluar Negeri</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">No</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" value="<?php echo $detail['no']?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No Surat</label>
                    <input type="text" readonly value="<?php echo $detail['no_surat']?>" class="form-control" id="exampleInputPassword1" placeholder="No Surat Kosong">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Surat</label>
                    <input type="text" readonly value="<?php echo $detail['tanggal_surat']?>" class="form-control" id="exampleInputPassword1" placeholder="Tanggal Surat Kosong" >
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Nama Siswa</label>
                    <input type="text" readonly value="<?php echo $detail['nama_siswa']?>" class="form-control" id="exampleInputPassword1" placeholder="Nama Siswa Kosong">
                  </div>

                  <div class="form-group">
                    <label>Nama Orangtua/Wali</label>
                    <input type="text" readonly value="<?php echo $detail['nama_wali'] ?>" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kelas</label>
                    <input type="text" readonly value="<?php echo $detail['kelas']?>" class="form-control" id="exampleInputPassword1" placeholder="Kelas Kosong">
                  </div>

            
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Kelamin</label>
                    <input type="text" readonly value="<?php echo $detail['jenis_kelamin']?>" class="form-control" id="exampleInputPassword1" placeholder="Jenis Kelamin Kosong">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Nama Sekolah Asal</label>
                    <input type="text" readonly value="<?php echo $detail['asal_sekolah']?>" class="form-control" id="exampleInputPassword1" placeholder="Sekolah Asal Kosong">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat Sekolah Asal</label>
                    <input type="text" readonly value="<?php echo $detail['alamat_sekolah']?>" class="form-control" id="exampleInputPassword1" placeholder="Alamat Sekolah Asal Kosong">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tujuan</label>
                    <input type="text" readonly value="<?php echo $detail['tujuan']?>" class="form-control" id="exampleInputPassword1" placeholder="Sekolah Tujuan kosong">
                  </div>
                 
                 
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Dibuat</label>
                    <input type="text" readonly value="<?php echo $detail['tanggal_dibuat']?>" class="form-control" id="exampleInputPassword1" placeholder="Tanggal Dibuat kosong">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Hijriah</label>
                    <input type="text" readonly value="<?php echo $detail['tanggal_hijriah']?>" class="form-control" id="exampleInputPassword1" placeholder="Tanggal Dibuat kosong">
                  </div>
                  
                 
                 
                 
                 
                 
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <a href="#" onclick="klik()"><button type="submit" class="btn btn-primary" ><i class="fas fa-print"></i> Print</button></a>
                  <button type="submit" class="btn btn-default" data-dismiss="modal" onclick="kembali()">Kembali</button> 
                </div>
              </form>
            </div>
            
            <!-- /.card -->
            <!-- Horizontal Form -->
            <script type="text/javascript">
              function kembali(){
                window.close('<?=site_url('Mutasi/index')?>')
              }

function klik() {

 window.open("<?=site_url('Mutasi/cetak_luar/'.$detail['no'].'/cetak')?>",height="700", width="500", scrollbars="yes");

}
            </script>
              
              
            <!-- /.card -->

          </div>
            </


         










    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    

  <!-- jQuery -->
  <script src="<?=base_url()?>assets/admin/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?=base_url()?>assets/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="<?=base_url()?>assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="<?=base_url()?>assets/admin/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="<?=base_url()?>assets/admin/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="<?=base_url()?>assets/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="<?=base_url()?>assets/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?=base_url()?>assets/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="<?=base_url()?>assets/admin/plugins/moment/moment.min.js"></script>
  <script src="<?=base_url()?>assets/admin/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="<?=base_url()?>assets/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="<?=base_url()?>assets/admin/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="<?=base_url()?>assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?=base_url()?>assets/admin/dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?=base_url()?>assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?=base_url()?>assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?=base_url()?>assets/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?=base_url()?>assets/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="<?=base_url()?>assets/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?=base_url()?>assets/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="<?=base_url()?>assets/admin/plugins/jszip/jszip.min.js"></script>
  <script src="<?=base_url()?>assets/admin/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="<?=base_url()?>assets/admin/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="<?=base_url()?>assets/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="<?=base_url()?>assets/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="<?=base_url()?>assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>