<!DOCTYPE html>
  <html lang="en">
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/admin/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="icon" type="image/png" href="<?=base_url()?>assets/img/kota.png"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"> 

  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    

    <!-- Navbar -->
   

    <!-- Main Sidebar Container -->
    <?php $this->load->view('v_menu'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Arsip Mutasi</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Arsip Mutasi </li>
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

          <div class="card">
                <div class="card-header">
                  <h3 class="card-title">List Arsip Mutasi</h3>
                  <div class="card-tools">
                  
                </div>
              <?php 
if ($this->session->flashdata('sukses')) { ?>
   
          <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?php echo $this->session->flashdata('sukses') ?>
                  </div>     
          
            
    
 <?php }  ?>

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example" class="table table-bordered table-striped" >
                    <thead>
                      <tr>
                        
                        
                    
                      </tr>
                    <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Nama Wali</th>
                    <th>Jenis Mutasi</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Tindakan</th>
                      
                      
                    </tr>
                    </thead>
                   
                   <tbody id="myTable">
    <?php 
    $no = 1;
       foreach ($permintaan as $m) { ?>   
            <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $m->nama_siswa?></td>
                <td style="white-space: nowrap;"><?php  echo $m->nama_wali ?></td>
                <td><?php echo $m->jenis_mutasi?></td>
                <td class="tanggalDisurat"><?php echo $m->tanggal_disurat; ?></td>
                <td><?php  echo $m->status?></td>
               
                <td style="white-space:nowrap;">
                    <!-- Tambahkan onclick event untuk memanggil showDetail() -->
             
             
                <button class="btn btn-success" onclick="openEditModal(<?php echo $m->no ?>,'<?php echo $m->nama_siswa ?>','<?php echo $m->nama_wali?>', '<?php echo $m->jenis_mutasi?>', '<?php echo $m->status?>', '<?php echo $m->surat_permohonan_pindah?>', '<?php echo $m->surat_pindah_sekolah_asal?>', '<?php echo $m->fotokopi_buku_rapor?>', '<?php echo $m->fotokopi_kartu_nisn?>', '<?php echo $m->bukti_dikeluarkan_dapodik?>', '<?php echo $m->tanggal_disurat?>')">Cek</button>

                

                </td>
            </tr>

            
        <?php }
    ?>
</tbody>

                   </table>
                   

        <script>

function formatTanggal(dateString) {
    const months = [
        "Januari", "Februari", "Maret", "April", "Mei", "Juni",
        "Juli", "Agustus", "September", "Oktober", "November", "Desember"
    ];
    const date = new Date(dateString);
    const day = date.getDate();
    const month = months[date.getMonth()];
    const year = date.getFullYear();
    return `${day} ${month} ${year}`; // Hapus day yang berulang
}

const tanggalDisuratElements = document.querySelectorAll(".tanggalDisurat");

// Iterasi untuk memformat setiap tanggal
tanggalDisuratElements.forEach((element) => {
    const originalTanggal = element.textContent.trim(); // Ambil nilai asli
    const formattedTanggal = formatTanggal(originalTanggal); // Format tanggal
    element.textContent = formattedTanggal; // Perbarui isi elemen
});
                       
   
       
  function printdata(no) {
        var url = "<?php echo site_url('Mutasi/print_mutasi/') ?>" + no + "/print";
        window.open(url, "_blank", height="700", width="500", scrollbars="yes");
    }

 

    function openEditModal( no, nama_siswa, nama_wali, jenis_mutasi, status, surat_permohonan_pindah, surat_pindah_sekolah_asal, fotokopi_buku_rapor, fotokopi_kartu_nisn, bukti_dikeluarkan_dapodik, tanggal_disurat) {
        $('#editModal').modal('show');
        $('#editNo').val(no);
        $('#editNamaSiswa').val(nama_siswa);
        $('#nama_wali').val(nama_wali);
        $('#mutasi').val(jenis_mutasi);
        $('#status').val(status);
        $('#surat_permohonan_pindah').val(surat_permohonan_pindah);
        $('#surat_pindah_sekolah_asal').val(surat_pindah_sekolah_asal);
        $('#fotokopi_buku_rapor').val(fotokopi_buku_rapor);
        $('#fotokopi_kartu_nisn').val(fotokopi_kartu_nisn);
        $('#bukti_dikeluarkan_dapodik').val(bukti_dikeluarkan_dapodik);
        $('#tanggal_disurat').val(formatDate(tanggal_disurat));
    
        $('#surat_permohonan_pindah_link').attr('href', '<?=base_url('assets/uploads/')?>' + surat_permohonan_pindah);
        $('#surat_pindah_sekolah_asal_link').attr('href', '<?=base_url('assets/uploads/')?>' + surat_pindah_sekolah_asal);
        $('#fotokopi_buku_rapor_link').attr('href', '<?=base_url('assets/uploads/')?>' + fotokopi_buku_rapor);
        $('#fotokopi_kartu_nisn_link').attr('href', '<?=base_url('assets/uploads/')?>' + fotokopi_kartu_nisn);
        $('#bukti_dikeluarkan_dapodik_link').attr('href', '<?=base_url('assets/uploads/')?>' + bukti_dikeluarkan_dapodik);
    }
    function formatTanggal(dateString) {
                        const months = [
                            "Januari", "Februari", "Maret", "April", "Mei", "Juni",
                            "Juli", "Agustus", "September", "Oktober", "November", "Desember"
                        ];
                        const date = new Date(dateString);
                        const day = date.getDate();
                        const month = months[date.getMonth()];
                        const year = date.getFullYear();
                        return `${day} ${month} ${year}`;
     }



  $(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
}); 


   
</script>

<div class="modal fade" id="editModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Cek Data</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <form action="<?=base_url('Staf/EditPermintaan')?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="no">No</label>
                    <input type="text" name="no" id="editNo" class="form-control" readonly>
                  </div>
                  <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="text" name="tanggal" id="tanggal_disurat" class="form-control" readonly>
                  </div>
                  <div class="form-group">
                    <label for="no">Nama Siswa</label>
                    <input type="text" name="nama_siswa" id="editNamaSiswa" class="form-control" readonly>
                  </div>
                  <div class="form-group">
                    <label for="no">Nama Wali</label>
                    <input type="text" name="nama_walu" id="nama_wali" class="form-control" readonly>
                  </div>
                  <div class="form-group">
                    <label for="no">Jenis Mutasi</label>
                    <input type="text" name="jenis_mutasi" id="mutasi" class="form-control" readonly>
                  <div class="form-group">
                                            <label for="surat_permohonan_pindah">Surat Permohonan Pindah</label>
                                            <input type="text" name="surat_permohonan_pindah" id="surat_permohonan_pindah" class="form-control" readonly>
                                            <a id="surat_permohonan_pindah_link" href="#" target="_blank">Lihat file</a>
                                        </div>
                                        <div class="form-group">
                                            <label for="surat_pindah_sekolah_asal">Surat Pindah Sekolah Asal</label>
                                            <input type="text" name="surat_pindah_sekolah_asal" id="surat_pindah_sekolah_asal" class="form-control" readonly>
                                            <a id="surat_pindah_sekolah_asal_link" href="#" target="_blank">Lihat file</a>
                                        </div>
                                        <div class="form-group">
                                            <label for="fotokopi_buku_rapor">Fotokopi Buku Rapor</label>
                                            <input type="text" name="fotokopi_buku_rapor" id="fotokopi_buku_rapor" class="form-control" readonly>
                                            <a id="fotokopi_buku_rapor_link" href="#" target="_blank">Lihat file</a>
                                        </div>
                                        <div class="form-group">
                                            <label for="fotokopi_kartu_nisn">Fotokopi Kartu NISN</label>
                                            <input type="text" name="fotokopi_kartu_nisn" id="fotokopi_kartu_nisn" class="form-control" readonly>
                                            <a id="fotokopi_kartu_nisn_link" href="#" target="_blank">Lihat file</a>
                                        </div>
                                        <div class="form-group">
                                            <label for="bukti_dikeluarkan_dapodik">Bukti Dikeluarkan dari DAPODIK</label>
                                            <input type="text" name="bukti_dikeluarkan_dapodik" id="bukti_dikeluarkan_dapodik" class="form-control" readonly>
                                            <a id="bukti_dikeluarkan_dapodik_link" href="#" target="_blank">Lihat file</a>
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select name="status" id="status" class="form-control" onchange="toggleFields()">
                                                <option value="Pending">Pending</option>
                                                <option value="Verifikasi">Verifikasi</option>
                                                <option value="Disetujui">Disetujui</option>
                                                <option value="Selesai">Selesai</option>
                                                <option value="Ditolak">Ditolak</option>
                                            </select>
                                        </div>
                                        <div class="form-group" id="alasan_penolakan_group" style="display: none;">
                                            <label for="alasan_penolakan">Alasan Penolakan</label>
                                            <input type="text" name="alasan_penolakan" id="alasan_penolakan" class="form-control">
                                        </div>
                                        <div class="form-group" id="file_upload_group" style="display: none;">
                                            <label for="file_upload">Upload File</label>
                                            <input type="file" name="file_upload" id="file_upload" class="form-control">
                                        </div>
                </div>
                <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                                        
                                    </div>
              </form>
</div>
</div>
</div>
</div>

<script>
                    function toggleFields() {
                        const status = document.getElementById('status').value;
                        const alasanPenolakanGroup = document.getElementById('alasan_penolakan_group');
                        const fileUploadGroup = document.getElementById('file_upload_group');

                        if (status === 'Ditolak') {
                            alasanPenolakanGroup.style.display = 'block';
                        } else {
                            alasanPenolakanGroup.style.display = 'none';
                        }

                        if (status === 'Selesai') {
                            fileUploadGroup.style.display = 'block';
                        } else {
                            fileUploadGroup.style.display = 'none';
                        }
                    }

                    function openEditModal(no, nama_siswa, nama_wali, jenis_mutasi, status, surat_permohonan_pindah, surat_pindah_sekolah_asal, fotokopi_buku_rapor, fotokopi_kartu_nisn, bukti_dikeluarkan_dapodik, tanggal_disurat) {
                        $('#editModal').modal('show');
                        $('#editNo').val(no);
                        $('#editNamaSiswa').val(nama_siswa);
                        $('#nama_wali').val(nama_wali);
                        $('#mutasi').val(jenis_mutasi);
                        $('#status').val(status);
                        $('#surat_permohonan_pindah').val(surat_permohonan_pindah);
                        $('#surat_pindah_sekolah_asal').val(surat_pindah_sekolah_asal);
                        $('#fotokopi_buku_rapor').val(fotokopi_buku_rapor);
                        $('#fotokopi_kartu_nisn').val(fotokopi_kartu_nisn);
                        $('#bukti_dikeluarkan_dapodik').val(bukti_dikeluarkan_dapodik);
                        $('#tanggal_disurat').val(formatDate(tanggal_disurat));

                        $('#surat_permohonan_pindah_link').attr('href', '<?=base_url('assets/uploads/')?>' + surat_permohonan_pindah);
                        $('#surat_pindah_sekolah_asal_link').attr('href', '<?=base_url('assets/uploads/')?>' + surat_pindah_sekolah_asal);
                        $('#fotokopi_buku_rapor_link').attr('href', '<?=base_url('assets/uploads/')?>' + fotokopi_buku_rapor);
                        $('#fotokopi_kartu_nisn_link').attr('href', '<?=base_url('assets/uploads/')?>' + fotokopi_kartu_nisn);
                        $('#bukti_dikeluarkan_dapodik_link').attr('href', '<?=base_url('assets/uploads/')?>' + bukti_dikeluarkan_dapodik);
                    }

                    function formatDate(dateString) {
                        const months = [
                            "Januari", "Februari", "Maret", "April", "Mei", "Juni",
                            "Juli", "Agustus", "September", "Oktober", "November", "Desember"
                        ];
                        const date = new Date(dateString);
                        const day = date.getDate();
                        const month = months[date.getMonth()];
                        const year = date.getFullYear();
                        return `${day} ${month} ${year}`;
                    }

                 
                </script>

  



           </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; <?php echo date('Y')?> <a href="http://localhost/Zak">D-Mutasi Dev Team</a> by Zak Enterprise.</strong>
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
  <script src="<?=base_url('assets/admin/plugins/jquery/jquery.min.js')?>"></script>
  
<!-- Bootstrap 4 -->
<script src="<?=base_url('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('assets/admin/dist/js/adminlte.min.js')?>"></script>

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
<script src="<?=base_url('assets/admin/plugins/select2/js/select2.full.min.js')?>"></script>

<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
});
</script>

  </body>
  </html>
