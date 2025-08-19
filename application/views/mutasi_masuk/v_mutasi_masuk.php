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
    
  <link rel="stylesheet" href="<?=base_url()?>assets/admin/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="icon" type="image/png" href="<?=base_url()?>assets/img/kota.png"/>
    <script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"> 
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
});
</script>
  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    
    <?php $this->load->view('v_menu'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Mutasi Masuk</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Mutasi Masuk </li>
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
                  <h3 class="card-title">List Data Mutasi Masuk</h3>
                  <div class="card-tools">
                 <!--
                  <form method="post" action=""> 
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" id="searchInput" class="form-control float-right" placeholder="Cari">
                  </div>
                </form>
-->
                </div>
                <?php 
                if ($this->session->flashdata('sukses')) { ?>
                  <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?php echo $this->session->flashdata('sukses') ?>
                  </div>
                <?php } ?>

                <?php 
                if ($this->session->flashdata('error')) { ?>
                  <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?php echo $this->session->flashdata('error') ?>
                  </div>
                <?php } ?>  </div>
                <!-- /.card-header -->
                <div class="card-body">
                <table id="example" class="table table-bordered table-hover" >
                    <thead>
                      <tr>
                        <td colspan="20"><button class="btn btn-primary" data-toggle="modal" data-target="#modal-form">Tambah data</button>
                        <?php if (!empty($mutasi_masuk)) { ?>
                            <a href="<?=site_url('Export/MasukExcel')?>"><button class="btn btn-success">Ekspor ke Excel Data Mutasi</button></a>
                           <?php } else { ?>
                            <a href="#" class="btn btn-warning" disabled>Tidak ada data Mutasi Masuk</a>
                          <?php } ?> 
                        
                          <?php if (!empty($siswa_masuk)) {?>
                            <a href="<?=site_url('Export/SiswaMasukExcel')?>" class="btn btn-success">Ekspor ke Excel Data Siswa</a>
                            <?php } else { ?>
                            <a href="#" class="btn btn-warning" disabled>Tidak ada data Siswa Masuk</a>
                          <?php } ?> 
                        
                        
                      
                      </td>
                      
                      </tr>
                    <tr>
                      <th style="white-space: nowrap;">No</th>
                    
                      <th style="white-space: nowrap;">Nomor Surat</th>
                      <th colspan="2" style="text-align:center">Tanggal Masehi | Hijriah</th>

                      <th style="white-space: nowrap;">Tanggal surat</th>
               
                      <th>Kepala SD</th>
                      <th>Status</th>
                      
                      <th>Tindakan</th>
                      
                      
                    </tr>
                    </thead>
                     
                    <tbody id="myTable">
                       <?php 
                        $no = 1;
                          if (!empty($mutasi_masuk)) {
                        foreach($mutasi_masuk as $m) { ?>
                      
                      <tr>
                      <td><?php echo $no++?></td>
                   
                      <td style="white-space: nowrap;"><?php echo $m->no_surat ?></td>
                      <td style="white-space: nowrap;" class="convert-date"><?php echo $m->tanggal_hari_ini?> </td>
                      <td style="white-space: nowrap;"><?php echo $m->tanggal_hijriah?></td>
                      <td style="white-space:nowrap;" class="convert-date"><?php echo $m->tanggal_surat ?></td>
                      <td style="white-space:nowrap;"><?php echo $m->kepala_sd ?></td>
                      <td>
  <?php if ($m->persetujuan == 'ditolak') { ?>
    <a style="color:red;" href="#" data-toggle="modal" data-target="#statusModal" onclick="showStatusModal('<?php echo $m->persetujuan ?>', '<?php echo $m->alasan_penolakan ?>')">
      <?php echo $m->persetujuan ?>
    </a>
  <?php } elseif($m->persetujuan == 'disetujui') { ?>
    <p style="color:green;"><?php echo $m->persetujuan ?></p>
  <?php } else { ?>
    <p style="color:orange;"><?php echo $m->persetujuan ?></p>
    <?php } ?>
</td>  
              
                      
                     <td style="white-space:nowrap;"><a href="<?=site_url('staf/cek_data/'.$m->no_urut.'/cek')?>" target="_blank"><button class='btn btn-info'>Detail</button></a>
                      <a target="_blank" href="<?=site_url('staf/editdata/'.$m->no_urut.'/edit')?>"><button class='btn btn-success'>Edit</button></a></td>
                      
                    </tr>

                   
                    <?php }} ?>
                  </tbody>
                      

                   </table>
                 
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




        <script>

              function cariData() {
        var input, filter, table, tr, td, i, j, txtValue;
        input = document.getElementById("searchInput");
        filter = input.value.toLowerCase();
        table = document.getElementById("data-table");
        tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td");
            for (j = 0; j < td.length; j++) {
                txtValue = td[j].textContent || td[j].innerText;
                if (txtValue.toLowerCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                    break; // Hentikan pencarian pada baris saat pertama yang cocok ditemukan
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

    // Memanggil fungsi cariData saat input teks berubah
    document.getElementById("searchInput").addEventListener("input", cariData);


function ubahFormatTanggal() {
    const tanggalInput = document.getElementById("tanggalInput");
    const hasil = document.getElementById("hasil");

    const inputDate = new Date(tanggalInput.value);
    const tanggal = inputDate.getDate();
    const bulan = inputDate.toLocaleString('default', { month: 'long' });
    const tahun = inputDate.getFullYear();

    const tanggalDalamFormatBaru = `${tanggal} ${bulan} ${tahun}`;
    hasil.value = tanggalDalamFormatBaru;
}



   

  </script>


          <div class="modal fade" id="modal-form">
          <div class="modal-dialog">
            <div class="modal-content">
              <form method="post" action="<?=base_url('Staf/AddMasuk')?>">
              <div class="modal-header">
                <div class="modal-title"><h4 class="modal-title">Tambah Data</h4>
               </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Hari ini  </label>
                   <input type="date" name="tanggal_hari_ini" class="form-control" id="tanggalMasehiForm" >
                   <input type="hidden" name="no_urut">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Hijriah  </label>
                    <input type="text"  class="form-control" name="tanggal_hijriah" id="hasilHijriahForm" placeholder="Masukan Tanggal Hijriah">
                  </div>
                   <div class="form-group">
                    
                    <label >Asal Sekolah Kepala SD </label>
                    <select class="form-control select2"  style="height: 40px;" id="nama_sekolah" onchange="isi_sekolah()" name="kepala_sd">
                    <option>--Pilih--</option>
                     <?php foreach ($sekolah as $m) { ?>
                      <option> <?php echo $m->nama_sekolah ?></option>
                    <?php } ?>
                  </select>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Alamat Sekolah </label>
                    <input type="text" name="alamat_sekolah"  class="form-control" id="alamat" placeholder="Masukan Alamat Sekolah">
                  </div>
                  <div class="form-group">
                    <label>Kecamatan</label>
                    <input type="text" name="kecamatan" class="form-control" id="kecamatan" placeholder="Masukan Kecamatan Sekolah">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nomor Surat</label>
                    <input type="text"  name="no_surat" class="form-control" id="exampleInputPassword1" placeholder="Masukan Nomor Surat">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Surat</label>
                    <input type="date" name="tanggal_surat"  class="form-control" id="exampleInputPassword1" placeholder="Masukan tanggal di dalam surat">
                  </div>


                  <script >

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
            $('#kecamatan').val(result.kota);
           
        } else {
            alert('Data tidak ditemukan');
        }
    });
}

function sekolah() {
    var tujuan_sekolah = $("#tujuan_sekolah").val();

  $.get("<?php echo base_url('Mutasi/Sekolah_tujuan'); ?>", { tujuan_sekolah: tujuan_sekolah }, function(data) {
        var result = JSON.parse(data);

        if (result) {
           
            $('#kota').val(result.kota);
            $('#provinsi').val(result.provinsi);
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
      <strong>Copyright &copy; <?php echo date('Y')?> <a href="<?=base_url('localhost/Zak')?>">D-Mutasi Dev Team</a> by Zak Enterprise.</strong>
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

   <script src="<?=base_url()?>assets/admin/plugins/select2/js/select2.full.min.js"></script>
 
  <script src="<?=base_url('assets/js/simple-datatable.js')?>"></script>
  <script src="<?=base_url('assets/js/sort.js')?>"></script>
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
</script>

  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?=base_url()?>assets/admin/dist/js/pages/dashboard.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
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





  </body>
  </html>
