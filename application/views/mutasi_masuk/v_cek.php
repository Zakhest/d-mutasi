 <!DOCTYPE html>
  <html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>D-Mutasi | Data Mutasi</title>

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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="icon" type="image/png" href="<?=base_url()?>assets/img/kota.png"/>

  </head>
  <body class="hold-transition sidebar-mini layout-fixed">

     <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Detail Data Mutasi Masuk</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Urut</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $detail['no_urut']?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Hari ini  </label>
                    <input type="text" readonly class="form-control convert-date" id="exampleInputPassword1" placeholder="No Surat Kosong" value="<?php echo $detail['tanggal_hari_ini']?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Hijriah  </label>
                    <input type="text" readonly class="form-control" id="exampleInputPassword1" placeholder="No Surat Kosong" value="<?php echo $detail['tanggal_hijriah']?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Asal Sekolah Kepala SD </label>
                    <input type="text" readonly  class="form-control" value="<?php echo $detail['kepala_sd']?>" id="exampleInputPassword1" placeholder="Tanggal Surat Kosong" >
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Alamat Sekolah </label>
                    <input type="text" readonly  class="form-control" id="exampleInputPassword1" placeholder="Kosong" value="<?php echo $detail['alamat_sekolah']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kecamatan </label>
                    <input type="text" readonly  class="form-control" id="exampleInputPassword1" placeholder="Nama Siswa Kosong" value="<?php echo $detail['kecamatan']?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nomor Surat</label>
                    <input type="text" readonly  class="form-control" id="exampleInputPassword1" placeholder="Kelas Kosong" value="<?php echo $detail['no_surat']?>">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Surat</label>
                    <input type="text" readonly  class="form-control convert-date" placeholder="Tempat Tanggal Lahir Kosong" value="<?php echo $detail['tanggal_surat']?>">
                  </div>

                 
                  
                 
                 
                 
                 
                 
                 

                </div>
                <!-- /.card-body -->

               
              </form>
              <div class="col-sm-12 ">
                <div class="card">
                 <div class="card-header">
              <h3 class="card-title">List Siswa Masuk</h3>
                  


          </div>
              <table id="data-table" class="table table-bordered table-striped" style="justify-content: center;">
                    <thead>
                    
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No</th>
                      <th  style="text-align:center">Nama Siswa</th>

                      <th>Tempat Tanggal Lahir</th>
                      <th colspan="2"style="white-space: nowrap; text-align: center;">Masuk di kelas / tahun </th>
               
                      <th>Asal Sekolah </th>
                      
                      <th>NISN</th>
                      
                      
                    </tr>
                    </thead>
                      
                    <tbody id="myTable">
                     
                     <?php 
                      $no = 1;
                     foreach ($siswa_masuk as $d) {
                      ?>
                     
                    
                      <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $d->nama_siswa  ?></td>
                      <td><?php echo $d->ttl; ?></td>
                      <td style="white-space: nowrap;"><?php echo $d->masuk_kelas  ?></td>
                      <td style="white-space:nowrap;"><?php echo $d->tahun?></td>
                      <td style="white-space:nowrap;"><?php echo $d->asal_sekolah?></td>
              
                    
                     <td style="white-space:nowrap;"><?php echo $d->nisn?></td>
                      
                    </tr>

                  <?php }  ?>
                    
                  </tbody>
                     

                   </table>
                  <div class="form-group">
                  <label for="Status">Status</label>
                   <input type="text" class="form-control" value="<?php echo $detail['persetujuan']?>" readonly>
                 </div>
                 <?php if ($detail['persetujuan'] == 'disetujui') { ?>
                 <div class="form-group">
                  <label for="Status">Tanda Tangan</label>
                  <br> 
                  <?php if ($detail['tanda_tangan'] == null) { ?>
                   <p>Belum Ada Tanda Tangan</p>
                  <?php } else { ?>
                    <img src="<?=base_url()?>assets/ttd/<?php echo $detail['tanda_tangan']?>" alt="TTD" width="100" height="100">
                  <?php } ?>
                 </div>
                  <?php } elseif ($detail['persetujuan'] == 'ditolak') {
                  ?>
                  <div class="form-group">
                  <label for="Status">Alasan Ditolak</label>
                  
                   <input type="text" class="form-control" value="<?php echo $detail['alasan_penolakan']?>" readonly>
                   </div>
                  <?php } ?>


                 </div>

              <div class="card-footer">
              <?php if ($detail['persetujuan'] == 'ditolak') { ?>
                <button class="btn btn-primary" disabled>Surat Belum Disetujui</button>
              <?php } elseif($detail['persetujuan'] == 'disetujui') { ?>
                  <a href="#" onclick="klik(<?php echo $detail['no_urut']?>)"><button type="submit" class="btn btn-primary" ><i class="fas fa-print"></i> Print</button></a>
              <?php } else { ?>
                <button class="btn btn-warning" disabled>Surat Belum Di periksa</button>
              <?php } ?>

                  <button type="submit" class="btn btn-default" data-dismiss="modal" onclick="kembali()">Kembali</button> 
                </div>

            </div>
          </div>

            <script type="text/javascript">
              function kembali(){
                window.close('<?=site_url('Staf/index')?>');
              }
              function klik(no_urut){
                var url = "<?=site_url('Staf/printSuratMasuk/')?>"+no_urut;
                window.location.href = url; 



}
            </script>
            
   

</div>
</div>
           </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    
    
    <script>
  function convertToIndonesianDate(dateString) {
    const monthsIndo = [
      'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 
      'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
    ];

    const date = new Date(dateString); // Mengubah string tanggal menjadi objek Date
    const day = String(date.getDate()).padStart(2, '0'); // Menambahkan leading zero jika perlu
    const month = monthsIndo[date.getMonth()]; // Mendapatkan nama bulan dalam Bahasa Indonesia
    const year = date.getFullYear();

    return `${day} ${month} ${year}`;
  }

  // Fungsi untuk mengonversi semua input tanggal setelah halaman dimuat
  window.onload = function() {
    // Ambil semua elemen input dengan class 'convert-date'
    const dateInputs = document.querySelectorAll('.convert-date');

    dateInputs.forEach(input => {
      const dateValue = input.value; // Ambil nilai dari input
      if (dateValue) {
        input.value = convertToIndonesianDate(dateValue); // Ubah nilai input dengan format baru
      }
    });
  };
</script>


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?=base_url()?>assets/admin/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?=base_url()?>assets/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
     document.getElementById("logout").addEventListener("click", function () {
        window.location.href = "<?=site_url('Dashboard/logout') ?>"; // Ganti URL_HALAMAN_TUJUAN dengan URL yang sesuai
    });
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


