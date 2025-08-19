    <!-- Google Font: Source Sans Pro -->
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/admin/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="icon" type="image/png" href="<?=base_url()?>assets/img/kota.png"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <title>Edit Mutasi Keluar | E-Mutasi</title>
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data Mutasi Keluar Negeri</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="<?=site_url('Mutasi/EditLuar')?>">
                <div class="card-body">
                  <label>No Urut</label>
                <input type="text"  value="<?php echo $detail['no']?>" readonly  name="no" class="form-control" placeholder="Nomor urut surat">
            
               <label>No surat</label>
                <input type="text" value="<?php echo $detail['no_surat']?> "placeholder="Masukan Nomor Surat Mutasi Sekolah asal" required name="no_surat" class="form-control"  >
                 <label>Tanggal Surat</label>
                <input type="text" value="<?php echo $detail['tanggal_surat']?>" placeholder="Masukan Nomor Surat Mutasi Sekolah asal" required name="tanggal_surat" class="form-control"  >
                  
                  <label>Nama Siswa </label>
                  <input type="text" value="<?php echo $detail['nama_siswa']?>" required placeholder="Masukan nama Siswa" name="nama_siswa" class="form-control" >
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kelas</label>
                    <select name="kelas" required class="form-control" >
                      <option><?php echo $detail['kelas']?></option>
                      <option>1 (Satu)</option>
                      <option>2 (Dua)</option>
                      <option>3 (Tiga)</option>
                      <option>4 (Empat)</option>
                      <option>5 (Lima)</option>
                      <option>6 (Enam)</option>
                    </select>
                  </div>
                 
                  
                  <label>Jenis Kelamin: </label>
                 <select class="form-control" name="jenis_kelamin">
                   <option><?php echo $detail['jenis_kelamin']?></option>
                   <option>Laki-laki</option>
                   <option>Perempuan</option>
                 </select>

                 <label>Nama Orangtua/Wali</label>
                 <input type="text" name="nama_wali" class="form-control" value="<?php echo $detail['nama_wali']?>">
               
                 
                 <div class="form-group" >
                  <label>Nama Sekolah Asal:</label>
                  <select class="form-control select2bs4"  style="height: 40px;" id="nama_sekolah" onchange="isi_sekolah()" name="asal_sekolah">
                    <option><?php echo $detail['asal_sekolah']?></option>
                     <?php foreach ($sekolah as $m) { ?>
                      <option> <?php echo $m->nama_sekolah ?></option>
                    <?php } ?>
                  </select>
                </div>
       
       
                  
                  <label>Alamat Sekolah Asal:</label>
                  <input type="text" required name="alamat_sekolah" id="alamat" class="form-control" placeholder="Alamat Sekolah asal muncul disini" value="<?php echo $detail['alamat_sekolah']?>" >
                  <label>Tujuan:</label>
                  <input type="text" required name="tujuan" class="form-control" placeholder="Masukan tujuan" id="tujuan_sekolah" value="<?php echo $detail['tujuan']?>" >

                  <label>Tanggal Dibuat:</label>
                  <input type="text" required name="tanggal_dibuat" class="form-control" placeholder="Masukan tujuan" id="tujuan_sekolah" value="<?php echo $detail['tanggal_dibuat']?>" >
                   <a href="#" data-toggle="modal" data-target="#modal-kon" >Halaman Konversi</a>
                  <div class="form-group">   
                  <label>Tanggal Hijriah:</label>
                  <input type="text" required name="tanggal_hijriah" class="form-control" placeholder="Masukan tujuan" id="tujuan_sekolah" value="<?php echo $detail['tanggal_hijriah']?>">
                </div>
                 
                  
                 
             
                  

                  <script>

                    $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })


     })


                     


    function isi_sekolah() {
    var nama_sekolah = $("#nama_sekolah").val();

  $.get("<?php echo base_url('Mutasi/sekolah'); ?>", { nama_sekolah: nama_sekolah }, function(data) {
        var result = JSON.parse(data);

        if (result) {
            $('#nama_sekolah').val(result.nama_sekolah);
            $('#alamat').val(result.alamat);
           
        } else {
            alert('Data tidak ditemukan');
        }
    });
}



                  </script>
            
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
              <button type="submit" class="btn btn-primary" ><i class="fas fa-save"></i> Simpan </button>
                  <button type="submit" class="btn btn-default" data-dismiss="modal" onclick="kembali()">Kembali</button> 
                </div>
              </form>
            </div>
              <div class="modal fade" id="modal-kon">
             <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
            <iframe src="<?=site_url('Konversi')?>"  height="304px" width="504px"></iframe>
          </div>
        </div>
         <div class="card-footer">
             <button type="button" class="btn btn-primary" data-dismiss="modal">Keluar</button>
           </div>
      </div>
          
           
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
           <script src="<?=base_url()?>assets/admin/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?=base_url()?>assets/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
     // Ganti URL_HALAMAN_TUJUAN dengan URL yang sesuai
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
  <script src="<?=base_url()?>assets/js/warna.js"></script>
  <script src="<?=base_url()?>assets/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="<?=base_url()?>assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="<?=base_url()?>assets/admin/plugins/select2/js/select2.full.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap.min.js"></script>
  <script src="<?=base_url('assets/js/simple-datatable.js')?>"></script>
  <script src="<?=base_url('assets/js/sort.js')?>"></script>
  <script>
      let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    $(function () {
      $("#example1").DataTable({
       
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });

    document.getElementById("logout").addEventListener("click", function () {
          window.location.href = "logout"; // Ganti URL_HALAMAN_TUJUAN dengan URL yang sesuai
      });
  </script>


  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?=base_url()?>assets/admin/dist/js/pages/dashboard.js"></script>
             


         










    