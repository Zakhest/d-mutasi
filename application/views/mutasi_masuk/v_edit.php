<!DOCTYPE html>
  <html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Mutasi Masuk</title>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="icon" type="image/png" href="<?=base_url()?>assets/img/kota.png"/>

  </head>
  <body>
  

    <!-- Preloader -->
    

    <!-- Navbar -->
  
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
 

   
      <!-- Content Header (Page header) -->
     <div class="card">
      <div class="col-sm-20"> 

     <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data Mutasi Masuk</h3>
             <?php   if ($this->session->flashdata('sukses')) { ?>
   
          <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?php echo $this->session->flashdata('sukses') ?>
                  </div>     
          
            
    
 <?php }  ?>

              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?=site_url("Staf/UpdateMutasi") ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Urut</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $detail['no_urut']?>" name="no_urut" readonly >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Hari ini  </label>
                    <input type="date" class="form-control" id="tanggalMasehiForm" 
    value="<?php echo isset($detail['tanggal_hari_ini']) ? date('Y-m-d', strtotime($detail['tanggal_hari_ini'])) : ''; ?>" 
    name="tanggal_hari_ini">

                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Hijriah  </label>
                    <input type="text"  class="form-control" id="hasilHijriahForm" placeholder="No Surat Kosong" value="<?php echo $detail['tanggal_hijriah']?>" name="tanggal_hijriah">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Asal Sekolah Kepala SD </label>
                     <select class="form-control select2bs4"  style="height: 40px;" id="nama_sekolah" onchange="isi_sekolah()" name="kepala_sd">
                    <option><?php echo $detail['kepala_sd']?></option>
                     <?php foreach ($sekolah as $m) { ?>
                      <option> <?php echo $m->nama_sekolah ?></option>
                    <?php } ?>
                  </select>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Alamat Sekolah </label>
                    <input type="text"   class="form-control" placeholder="Alamat Sekolah Kosong" id="alamat" value="<?php echo $detail['alamat_sekolah']?>" name="alamat_sekolah" readonly>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Kecamatan </label>
                    <input type="text"   class="form-control" placeholder="Alamat Sekolah Kosong" id="kecamatan" value="<?php echo $detail['kecamatan'] ?>" name="kecamatan" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nomor Surat</label>
                    <input type="text"   class="form-control" id="exampleInputPassword1" placeholder="Kelas Kosong" value="<?php echo $detail['no_surat']?>" name="no_surat">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Surat</label>
                    <input type="date"  class="form-control convert-date" id="exampleInputPassword1" placeholder="Tempat Tanggal Lahir Kosong" value="<?php echo $detail['tanggal_surat']?>" name="tanggal_surat">
                  </div>

                 
                  
                 
                 
                 
                 
                 
                 

                </div>
                <!-- /.card-body -->

               
                            <div class="col-sm-12 ">
                        <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-form" value="Tambah Siswa">
              <table id="data-table" class="table table-bordered table-striped" style="justify-content: center;">
                    <thead>
                    
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No</th>
                      <th  style="text-align:center">Nama Siswa</th>

                      <th>Tempat Tanggal Lahir</th>
                      <th colspan="2"style="white-space: nowrap; text-align: center;">Masuk di kelas / tahun </th>
               
                      <th>Asal Sekolah </th>
                      
                      <th>NISN</th>
                      <th>Tindakan </th>
                      
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
                     <td>
    <button type="button" class="btn btn-success" onclick="openEditModal(
        '<?php echo $d->no?>',
        '<?php echo $d->no_urut ?>',
        '<?php echo $d->nisn ?>',
        '<?php echo $d->nama_siswa ?>',
        '<?php echo $d->ttl ?>',
        '<?php echo $d->masuk_kelas ?>',
        '<?php echo $d->tahun ?>',
        '<?php echo $d->asal_sekolah ?>'
    )">Edit</button>
</td>
                      
                    </tr>

                  <?php }  ?>
                    
                  </tbody>
                     

                   </table>
                 </div>

      <div class="card-footer">
                  <button type="submit" class="btn btn-primary" ><i class="fas fa-save"></i> Simpan</button>
                  <button type="submit" class="btn btn-default" data-dismiss="modal" onclick="kembali()">Kembali</button> 
                </div>
</form>
            </div>

              

            <script type="text/javascript">
              function kembali(){
                window.close('<?=site_url('Mutasi/index')?>');
              }


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
            </script>

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
            
   

</div>
</div>
<div class="modal fade" id="modal-form">
          <div class="modal-dialog">
            <div class="modal-content">
              <form action="<?php echo base_url('Mutasi/AddSiswaMasuk')?>"  method="post" >
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
                   
                     <input type="hidden" class="form-control" id="exampleInputEmail1"  name="no_urut" value="<?php echo $detail['no_urut'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">NISN</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  name="nisn"  >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Siswa </label>
                    <input type="text"  class="form-control" id="exampleInputPassword1" placeholder="No Surat Kosong"  name="nama_siswa">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Tempat Tanggal Lahir </label>
                    <input type="text"  class="form-control" id="exampleInputPassword1" placeholder="No Surat Kosong"  name="ttl">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Masuk Kelas</label>
                     <select name="masuk_kelas" required class="form-control" >
                   
                      <option>1 (Satu)</option>
                      <option>2 (Dua)</option>
                      <option>3 (Tiga)</option>
                      <option>4 (Empat)</option>
                      <option>5 (Lima)</option>
                      <option>6 (Enam)</option>
                    </select>
                    
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Tahun</label>
                    <input type="text"   class="form-control" placeholder="Nama Siswa Kosong" id="alamat" name="tahun">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Asal Sekolah</label>
                    <input type="text"   class="form-control" id="exampleInputPassword1" placeholder="Kelas Kosong"  name="asal_sekolah">
                  </div>

              
                  
                  
              </div>
               <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
            </div>
          </div>
        </div>


<script>
function openEditModal(no,no_urut, nisn, nama_siswa, ttl, masuk_kelas, tahun, asal_sekolah) {
    $('#editModal').modal('show');
    $('#editNo').val(no);
    $('#editNoUrut').val(no_urut);
    $('#editNisn').val(nisn);
    $('#editNamaSiswa').val(nama_siswa);
    $('#editTtl').val(ttl);
    $('#editMasukKelas').val(masuk_kelas);
    $('#editTahun').val(tahun);
    $('#editAsalSekolah').val(asal_sekolah);
}


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

           </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; <?php echo date('Y')?> <a href="">D-Mutasi Dev Team</a> by Zak Enterprise.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b>  <?php echo $version ?> 
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
  <script src="<?=base_url()?>assets/admin/plugins/select2/js/select2.full.min.js"></script>
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

  <div class="modal fade" id="editModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?=base_url('Staf/UpdateDataSiswa') ?>" method="post">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data Siswa</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    
                    <div class="form-group">
                        <label for="editNisn">NISN</label>
                        <input type="hidden" name="no" id="editNo">
                        <input type="hidden" name="no_urut" id="editNoUrut">
                        <input type="text" class="form-control" id="editNisn" name="nisn">
                    </div>
                    <div class="form-group">
                        <label for="editNamaSiswa">Nama Siswa</label>
                        <input type="text" class="form-control" id="editNamaSiswa" name="nama_siswa">
                    </div>
                    <div class="form-group">
                        <label for="editTtl">Tempat Tanggal Lahir</label>
                        <input type="text" class="form-control" id="editTtl" name="ttl">
                    </div>
                    <div class="form-group">
                        <label for="editMasukKelas">Masuk Kelas</label>
                        <select name="masuk_kelas" class="form-control" id="editMasukKelas">
                            <option>1 (Satu)</option>
                            <option>2 (Dua)</option>
                            <option>3 (Tiga)</option>
                            <option>4 (Empat)</option>
                            <option>5 (Lima)</option>
                            <option>6 (Enam)</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="editTahun">Tahun</label>
                        <input type="text" class="form-control" id="editTahun" name="tahun">
                    </div>
                    <div class="form-group">
                        <label for="editAsalSekolah">Asal Sekolah</label>
                        <input type="text" class="form-control" id="editAsalSekolah" name="asal_sekolah">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

