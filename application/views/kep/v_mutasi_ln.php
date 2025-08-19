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
   

    <!-- Main Sidebar Container -->
    <?php $this->load->view('kep/v_menu'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Mutasi Keluar Negeri</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Mutasi Keluar Negeri </li>
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
                  <h3 class="card-title">List Data Mutasi Keluar Negeri</h3>
                  <div class="card-tools">
                  <!--
                  <form method="post" action=""> 
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" id="myInput" class="form-control float-right" placeholder="Cari">
                  </div>
                </form> -->
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
                  <table id="example" class="table table-bordered table-hover" >
                    <thead>
                      <tr>
                       
                        
                    
                      </tr>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Nomor Urut</th>
                      
                      <th style="white-space: nowrap;">Nama Siswa</th>
                      <th style="white-space: nowrap;">Status</th>
               
            
                      <th>Tindakan</th>
                      
                      
                    </tr>
                    </thead>
                   
                   <tbody id="myTable">
    <?php 
    $no = 1;
    if (!empty($mutasi_keluar_negeri)) {
        foreach ($mutasi_keluar_negeri as $m) { ?>   
            <tr>
                <td><?php echo $no++?></td>
                
                <td><?php echo $m->nama_siswa?></td>
                <td><?php echo $m->persetujuan ?></td> 
                <td style="white-space:nowrap;">
                 
                
                    <!-- Tambahkan onclick event untuk memanggil showDetail() -->
             
    
                    <button class="btn btn-success" 
    onclick="openEditModal(
        '<?= $m->no ?>',
        '<?= addslashes($m->no_surat) ?>',
        '<?= addslashes($m->tanggal_dibuat) ?>',
        '<?= addslashes($m->nama_siswa) ?>',
        '<?= addslashes($m->kelas) ?>',
        '<?= addslashes($m->jenis_kelamin) ?>',
        '<?= addslashes($m->nama_wali) ?>',
        '<?= addslashes($m->asal_sekolah) ?>',
        '<?= addslashes($m->alamat_sekolah) ?>',
        '<?= addslashes($m->tujuan) ?>',
        '<?= $m->tanggal_dibuat ?>',
        '<?= addslashes($m->tanggal_hijriah) ?>'
    )">
   
    Periksa
</button>
              
                <?php if ($m->persetujuan == 'Disetujui') { ?>
                  <button class="btn btn-primary" onclick="printdata(<?php echo $m->no ?>)">Cek Surat</button>
                <?php } else { ?>
                  <button class="btn btn-primary" disabled>Surat Belum Disetujui</button>
                <?php } ?>

                
                </td>
            </tr>

            
        <?php }
    }?>
</tbody>

                   </table>
                   

        <script>


                       
   
       



function printdata(no) {
    var url = "<?php echo site_url('kep/mutasi_ln/printSurat/') ?>" + no;
    window.open(url, "_blank", "height=700,width=500,scrollbars=yes");
}

function formatTanggalIndonesia(tanggal) {
    const bulanIndo = [
        "Januari", "Februari", "Maret", "April", "Mei", "Juni",
        "Juli", "Agustus", "September", "Oktober", "November", "Desember"
    ];

    let parts = tanggal.split("-");
    if (parts.length !== 3) return tanggal; // Jika format tidak sesuai, kembalikan aslinya

    let tahun = parts[0];
    let bulan = bulanIndo[parseInt(parts[1], 10) - 1]; // Ambil nama bulan
    let hari = parts[2];

    return `${hari} ${bulan} ${tahun}`;
}
 

    function openEditModal(no, no_surat, tanggal_surat, nama_siswa, kelas, jenis_kelamin, 
  nama_wali, asal_sekolah, alamat_sekolah, tujuan, tanggal_dibuat, 
  tanggal_hijriah, tanda_tangan, persetujuan, alasan_penolakan) {
      $('#editModal').modal('show');
  $('#no').val(no);
  $('#no_surat').val(no_surat);
  $('#tanggal_surat').val(formatTanggalIndonesia(tanggal_surat));
  $('#nama_siswa').val(nama_siswa);
  $('#kelas').val(kelas);
  $('#jenis_kelamin').val(jenis_kelamin);
  $('#nama_wali').val(nama_wali);
  $('#asal_sekolah').val(asal_sekolah);
  $('#alamat_sekolah').val(alamat_sekolah);
  $('#tujuan').val(tujuan);
  $('#tanggal_dibuat').val(formatTanggalIndonesia(tanggal_dibuat));
  $('#hasilHijriah').val(tanggal_hijriah);
        $('#editPersetujuan').val(persetujuan);
        $('#editAlasanPenolakan').val(alasan_penolakan);

        if (tanda_tangan && persetujuan === 'Disetujui') {
            $('#existingTandaTangan').html('<label>Tanda Tangan Saat Ini</label><br><img src="<?=base_url()?>assets/ttd/' + tanda_tangan + '" alt="Tanda Tangan" style="max-width: 100px;">');
        } else {
            $('#existingTandaTangan').html('');
        }

        toggleInputFields(); // Ensure the correct fields are shown based on the current approval status
    }




  $(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
}); 


                               

   

$(document).ready(function() {
    $('#example').DataTable();
});
</script>
 <!--End AddModal -->
<div class="modal fade" id="editModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Cek Data</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
          <form method="post" action="<?=base_url('Kep/Mutasi_ln/UpdateData')?>" enctype="multipart/form-data">
                <input type="hidden" name="no" id="no">
                <label>No Surat</label>
                <input type="text" id="no_surat" required name="no_surat" class="form-control" readonly>

                <label>Tanggal Dibuat</label>
                <input type="text" id="tanggal_dibuat" required name="tanggal_dibuat" class="form-control" readonly>

                <label>Nama Siswa</label>
                <input type="text" id="nama_siswa" required name="nama_siswa" class="form-control" readonly>

                <label>Jenis Kelamin</label>
                <input type="text" id="jenis_kelamin" required name="jenis_kelamin" class="form-control" readonly>

                <label>Kelas</label>
                <input type="text" id="kelas" required name="kelas" class="form-control" readonly>

                <label>Sekolah Asal</label>
                <input type="text" id="asal_sekolah" required name="sekolah_asal" class="form-control" readonly>

                <label>Alamat Sekolah Asal</label>
                <input type="text" id="alamat_sekolah" required name="alamat_sekolah_asal" class="form-control" readonly>

                <label>Tujuan</label>
                <input type="text" id="tujuan" required name="sekolah_tujuan" class="form-control" readonly>

                <label>Tanggal Hijriah</label>
                <input type="text" id="hasilHijriah" required name="tanggal_hijriah" class="form-control" readonly>

                <label>Tanggal Surat</label>
                <input type="text" id="tanggal_surat" required name="tanggal_surat" class="form-control" readonly>

                <label>Persetujuan</label>
                <select name="persetujuan" class="form-control" id="editPersetujuan" onchange="toggleInputFields()">
                <option value="">--Pilih Persetujuan--</option>    
                <option value="Disetujui">Disetujui</option>
                    <option value="Ditolak">Ditolak</option>
                </select>

                <div class="form-group" id="uploadTandaTangan" style="display: none;">
                    <label>Upload Tanda Tangan</label>
                    <input type="file" name="tanda_tangan" class="form-control">
                </div>

                <div class="form-group" id="alasanPenolakan" style="display: none;">
                    <label>Alasan Penolakan</label>
                    <input type="text" name="alasan_penolakan" class="form-control" id="editAlasanPenolakan">
                </div>

                <div class="form-group" id="existingTandaTangan"></div>

                <script>
                function toggleInputFields() {
                    var persetujuan = document.getElementById('editPersetujuan').value;
                    var uploadTandaTangan = document.getElementById('uploadTandaTangan');
                    var alasanPenolakan = document.getElementById('alasanPenolakan');
                    var existingTandaTangan = document.getElementById('existingTandaTangan');

                    if (persetujuan === 'Disetujui') {
                        uploadTandaTangan.style.display = 'block';
                        alasanPenolakan.style.display = 'none';
                        existingTandaTangan.style.display = 'block';
                        document.querySelector('input[name="tanda_tangan"]').setAttribute('required', 'required');
                        document.querySelector('input[name="alasan_penolakan"]').removeAttribute('required');
                    } else if (persetujuan === 'Ditolak' || persetujuan === 'Pending') {
                        uploadTandaTangan.style.display = 'none';
                        alasanPenolakan.style.display = 'block';
                        existingTandaTangan.style.display = 'none';
                        document.querySelector('input[name="tanda_tangan"]').removeAttribute('required');
                        document.querySelector('input[name="alasan_penolakan"]').setAttribute('required', 'required');
                    } else {
                        uploadTandaTangan.style.display = 'none';
                        alasanPenolakan.style.display = 'none';
                        existingTandaTangan.style.display = 'none';
                        document.querySelector('input[name="tanda_tangan"]').removeAttribute('required');
                        document.querySelector('input[name="alasan_penolakan"]').removeAttribute('required');
                    }
                }

                document.addEventListener('DOMContentLoaded', function() {
                    toggleInputFields(); // Ensure the correct fields are shown on page load
                });
                </script>
               
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
                    
            </form>              

      </div>
    </div> 

            

    </div>
    
</div> <!-- End Edit modal -->
             
                <!-- /.card-body -->





           </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
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
