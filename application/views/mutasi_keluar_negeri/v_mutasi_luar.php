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
    
  <link rel="stylesheet" href="<?=base_url()?>assets/admin/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="icon" type="image/png" href="<?=base_url()?>assets/img/kota.png"/>
   
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"> 
    
  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper"> 

    <!-- Preloader -->
    

    <!-- Navbar -->
    <?php $this->load->view('v_menu'); ?>

  

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
                  
                  
                </div>
                <?php 
if ($this->session->flashdata('sukses')) { ?>
   
          <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?php echo $this->session->flashdata('sukses') ?>
                  </div>     
          
            
    
 <?php } elseif($this->session->flashdata('error')) { ?>

    <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?php echo $this->session->flashdata('error') ?>
                  </div>     
  <?php
 }  ?>



                </div>
                <!-- /.card-header -->
                <div class="card-body">
                <table id="example" class="table table-bordered table-striped" >
                    <thead>
                      <tr>
                        <td colspan="10" ><button class="btn btn-primary" data-toggle="modal" data-target="#modal-form">Tambah data</button>
                        <?php if (!empty($mutasi_ln)) { ?>
                          <a href="<?=site_url('Export/LuarNegeriExcel')?>" class="btn btn-success">Ekspor ke Excel</a>
                          <?php } else { ?>
                            <a href="#" class="btn btn-success" disabled>Tidak ada data</a>
                          <?php } ?>
                            
                      </td>
                      
                      </tr>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Nomor Urut</th>
                      <th>No Surat</th>
                      <th>Tanggal Dibuat</th>
                      <th style="white-space: nowrap;">Nama Siswa</th>
               
                      
                      <th>Jenis Kelamin</th>
                      <th>Asal Sekolah</th>
                      <th>Status</th>
                      <th>Tindakan</th>
                      
                      
                    </tr>
                    </thead>
                 
                    <tbody id="myTable">
                    
                   <?php
                      $no=1;
                       if(!empty($mutasi_ln)){
                       foreach ($mutasi_ln as $m) {
                      
                      ?>     
                      <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $m->no_surat ?></td>
                      <td style="white-space: nowrap;" class="convert-date"><?php echo $m->tanggal_dibuat ?></td>
                      <td><?php echo $m->nama_siswa ?></td>
                     
                      <td><?php echo $m->jenis_kelamin ?></td>
                      <td><?php echo $m->asal_sekolah ?></td>
                      <td>
  <?php if ($m->persetujuan == 'Ditolak') { ?>
    <a href="#" data-toggle="modal" data-target="#statusModal" onclick="showStatusModal('<?php echo $m->persetujuan ?>', '<?php echo $m->alasan_penolakan ?>')">
      <?php echo $m->persetujuan ?>
    </a>
  <?php } elseif($m->persetujuan == 'Disetujui') { ?>
    <p style="color: blue"><?php echo $m->persetujuan ?></p>
  <?php } else { ?>
    <p style="color: orange"><?php echo $m->persetujuan ?></p>
    <?php } ?>
</td>  

                     <td style="white-space:nowrap;">
                      
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
   
    Edit
</button>

<?php if ($m->persetujuan == 'Disetujui') { ?>
                  <button class="btn btn-primary" onclick="printdata(<?php echo $m->no ?>)">Print Surat</button>
                <?php } elseif($m->persetujuan == 'Ditolak') { ?>
                  <button class="btn btn-danger" disabled>Surat Ditolak</button>
                <?php } else { ?>
                  <button class="btn btn-warning" disabled>Surat Pending</button>
                  <?php } ?>
                       </td>
                    </tr>

   
                            
<?php }} ?>
                    
                  </tbody>
                  
                   </table>
                   
            
                   <script>

                
function printdata(no) {
      var url = "<?php echo site_url('staf/printSuratKeluar/') ?>" + no + "/cetak";
      window.open(url, "_blank", height="700", width="500", scrollbars="yes");
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
  tanggal_hijriah) {

  $('#editModal').modal('show');
  $('#no').val(no);
  $('#no_surat').val(no_surat);
  $('#tanggal_surat').val(tanggal_surat);
  $('#nama_siswa').val(nama_siswa);
  $('#kelas').val(kelas);
  $('#jenis_kelamin').val(jenis_kelamin);
  $('#nama_wali').val(nama_wali);
  $('#asal_sekolah').val(asal_sekolah);
  $('#alamat_sekolah').val(alamat_sekolah);
  $('#tujuan').val(tujuan);
  $('#tanggalMasehiEdit').val(tanggal_dibuat);
  $('#hasilHijriahEdit').val(tanggal_hijriah);
   
  if ($("#nama_sekolah_baru option[value='" + asal_sekolah + "']").length > 0) {
        $('#nama_sekolah_baru').val(asal_sekolah).change();
    } else {
        $('#nama_sekolah_baru').append(new Option(asal_sekolah, asal_sekolah, true, true)).trigger('change');
    }

}

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

  // Fungsi untuk mengonversi semua tanggal dalam tabel setelah halaman dimuat
  window.onload = function() {
    // Ambil semua elemen dengan class 'convert-date', kecuali untuk tanggal Hijriah
    const dateCells = document.querySelectorAll('.convert-date');

    dateCells.forEach(cell => {
      const dateText = cell.innerText; // Ambil nilai teks dari elemen
      if (dateText) {
        cell.innerText = convertToIndonesianDate(dateText); // Ubah teks elemen dengan format baru
      }
    });
  };

</script>


          <div class="modal fade" id="modal-form">
          <div class="modal-dialog">
            <div class="modal-content">
              <form method="post" action="<?=base_url('Staf/AddDataLuar')?>">
              <div class="modal-header">
                <h4 class="modal-title">Tambah Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
               <label>No surat</label>
                <input type="text" placeholder="Masukan Nomor Surat Mutasi Sekolah asal" required name="no_surat" class="form-control"  >
                 <label>Tanggal Surat</label>
                <input type="date" placeholder="Masukan Nomor Surat Mutasi Sekolah asal" required name="tanggal_surat" class="form-control"  >
                   <input type="hidden" name="status" value="Pending">
                  <label>Nama Siswa </label>
                  <input type="text" required placeholder="Masukan nama Siswa" name="nama_siswa" class="form-control" >
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kelas</label>
                    <select name="kelas" required class="form-control" >
                      
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
                   <option>--Pilih--</option>
                   <option>Laki-laki</option>
                   <option>Perempuan</option>
                 </select>

                 <label>Nama Orangtua/Wali</label>
                 <input type="text" name="nama_wali" class="form-control">
               
                 
                 <div class="form-group" >
                  <label>Nama Sekolah Asal:</label>
                  <select class="form-control select2bs4"  style="height: 40px;" id="nama_sekolah" onchange="isi_sekolah()" name="asal_sekolah">
                    <option>--Pilih---</option>
                     <?php foreach ($sekolah as $m) { ?>
                      <option> <?php echo $m->nama_sekolah ?></option>
                    <?php } ?>
                  </select>
                </div>
       
       
                  
                  <label>Alamat Sekolah Asal:</label>
                  <input type="text" required name="alamat_sekolah" id="alamat" class="form-control" placeholder="Alamat Sekolah asal muncul disini" >
                  <label>Tujuan:</label>
                  <input type="text" required name="tujuan" class="form-control" placeholder="Masukan tujuan" id="tujuan_sekolah" >

                  <label>Tanggal Dibuat:</label>
                  <input type="date" required name="tanggal_dibuat" class="form-control" placeholder="Masukan tujuan" <input type="date" id="tanggalMasehiForm">
                  
                 <div class="form-group">
                  <label>Tanggal Hijriah:</label>
                  <input type="text" required name="tanggal_hijriah" class="form-control" placeholder="Masukan tujuan" id="hasilHijriahForm" >
                 
                  </div>
                 
             
                  

                  <script>

$(function () {
    // Inisialisasi Select2
    $('.select2bs4').select2();

    // Pastikan OverlayScrollbars diaktifkan
  
});



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
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

        <div class="modal fade" id="editModal">
          <div class="modal-dialog">
            <div class="modal-content">
              <form method="post" action="<?=base_url('Staf/EditLuar')?>">
              <div class="modal-header">
                <h4 class="modal-title">Edit Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
               
                <input type="hidden"  name="no" id="no" class="form-control" placeholder="Nomor urut surat">
            
               <label>No surat</label>
                <input type="text" placeholder="Masukan Nomor Surat Mutasi Sekolah asal" required name="no_surat" class="form-control" id="no_surat"  >
                 <label>Tanggal Surat</label>
                <input type="date" placeholder="Masukan Nomor Surat Mutasi Sekolah asal" required name="tanggal_surat" class="form-control" id="tanggal_surat" >
                  
                  <label>Nama Siswa </label>
                  <input type="text" required placeholder="Masukan nama Siswa" name="nama_siswa" class="form-control" id="nama_siswa" >
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kelas</label>
                    <select name="kelas" required class="form-control" id="kelas">
                      <option value="">--Pilih--</option>
                      <option>1 (Satu)</option>
                      <option>2 (Dua)</option>
                      <option>3 (Tiga)</option>
                      <option>4 (Empat)</option>
                      <option>5 (Lima)</option>
                      <option>6 (Enam)</option>
                    </select>
                  </div>
                 
                  
                  <label>Jenis Kelamin: </label>
                 <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                   <option>--Pilih--</option>
                   <option>Laki-laki</option>
                   <option>Perempuan</option>
                 </select>

                 <label>Nama Orangtua/Wali</label>
                 <input type="text" name="nama_wali" class="form-control" id="nama_wali">
               
                 
                 <div class="form-group" >
                  

                  <label>Nama Sekolah Asal:</label>
                  <select class="form-control select2bs4"  style="height: 40px;" id="nama_sekolah_baru" onchange="fill_sekolah()" name="asal_sekolah" >
                    <option>--Pilih---</option>
                     <?php foreach ($sekolah as $m) { ?>
                      <option> <?php echo $m->nama_sekolah ?></option>
                    <?php } ?>
                  </select>
                </div>
       
                  
                  <label>Alamat Sekolah Asal:</label>
                  <input type="text" required name="alamat_sekolah" id="alamat_baru" class="form-control" placeholder="Alamat Sekolah asal muncul disini" >
                  <label>Tujuan:</label>
                  <input type="text" required name="tujuan" class="form-control" placeholder="Masukan tujuan" id="tujuan" >

                  <label>Tanggal Dibuat:</label>
                  <input type="date" required name="tanggal_dibuat" class="form-control" placeholder="Masukan tujuan"  id="tanggalMasehiEdit" >
                 <div class="form-group">
                  <label>Tanggal Hijriah:</label>
                  <input type="text" required name="tanggal_hijriah" class="form-control" placeholder="Masukan tujuan" id="hasilHijriahEdit" >
                 
             
                  

                  <script>

                    


                     


    function fill_sekolah() {
    var nama_sekolah = $("#nama_sekolah_baru").val();

  $.get("<?php echo base_url('Staf/sekolah'); ?>", { nama_sekolah: nama_sekolah }, function(data) {
        var result = JSON.parse(data);

        if (result) {
            $('#nama_sekolah').val(result.nama_sekolah);
            $('#alamat_baru').val(result.alamat);
           
        } else {
            alert('Data tidak ditemukan');
        }
    });
}



                  </script>
            
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>


       

        
             
                <!-- /.card-body -->
            



           </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; <?php echo date("Y")?> <a href="<?=base_url('localhost/Zak')?>">D-Mutasi Dev Team</a> by Zak Enterprise.</strong>
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

   <script src="<?=base_url()?>assets/admin/plugins/select2/js/select2.full.min.js"></script>

  <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap.min.js"></script>
  <script src="<?=base_url('assets/js/simple-datatable.js')?>"></script>
 
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  
<script>
$(document).ready(function() {
    $('#example').DataTable();
});
</script>
  <script>
     

    document.getElementById("logout").addEventListener("click", function () {
          window.location.href = "logout"; // Ganti URL_HALAMAN_TUJUAN dengan URL yang sesuai
      });


  </script>

  <script>
    function convertToHijri(inputId, outputId) {
    let inputDate = document.getElementById(inputId).value;
    if (!inputDate) {
        document.getElementById(outputId).value = "";
        return;
    }

    let date = new Date(inputDate);
    let y = date.getFullYear();
    let m = date.getMonth() + 1;
    let d = date.getDate();

    if (m < 3) {
        y -= 1;
        m += 12;
    }

    let A = Math.floor(y / 100);
    let B = 2 - A + Math.floor(A / 4);
    let JD = Math.floor(365.25 * (y + 4716)) + Math.floor(30.6001 * (m + 1)) + d + B - 1524.5;

    let HijriEpoch = 1948439.5;
    let daysSinceEpoch = JD - HijriEpoch;
    let hijriYear = Math.floor((daysSinceEpoch - 1) / 354.367) + 1;
    let hijriMonth, hijriDay;

    let startOfYearJD = HijriEpoch + Math.floor((hijriYear - 1) * 354.367);
    let dayOfYear = Math.floor(JD - startOfYearJD);

    let hijriMonths = [30, 29, 30, 29, 30, 29, 30, 29, 30, 29, 30, 29];
    if (((11 * hijriYear + 14) % 30) < 11) {
        hijriMonths[11] = 30;
    }

    for (let i = 0; i < 12; i++) {
        if (dayOfYear < hijriMonths[i]) {
            hijriMonth = i + 1;
            hijriDay = dayOfYear + 1;
            break;
        }
        dayOfYear -= hijriMonths[i];
    }

    let bulanHijriah = ["Muharram", "Safar", "Rabi'ul Awwal", "Rabi'ul Akhir", "Jumadil Awwal", "Jumadil Akhir", "Rajab", "Sya'ban", "Ramadhan", "Syawal", "Dzulqaidah", "Dzulhijjah"];
    let hijriFormatted = `${hijriDay} ${bulanHijriah[hijriMonth - 1]} ${hijriYear} H`;
    document.getElementById(outputId).value = hijriFormatted;
}

document.getElementById("tanggalMasehiForm").addEventListener("input", function() {
    convertToHijri("tanggalMasehiForm", "hasilHijriahForm");
});

document.getElementById("tanggalMasehiEdit").addEventListener("input", function() {
    convertToHijri("tanggalMasehiEdit", "hasilHijriahEdit");
});

document.addEventListener("touchmove", function(event) {
    event.preventDefault();
}, { passive: false });


  </script>
  <script>
function showStatusModal(persetujuan, alasan_penolakan) {
  document.getElementById('statusPersetujuan').innerText = persetujuan;
  document.getElementById('statusAlasanPenolakan').innerText = alasan_penolakan;
}
</script>

<!-- Status Modal -->
<div class="modal fade" id="statusModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Status Persetujuan</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p><strong>Persetujuan:</strong> <span id="statusPersetujuan"></span></p>
        <p><strong>Alasan Penolakan:</strong> <span id="statusAlasanPenolakan"></span></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>






  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
 
  </body>
  </html>
