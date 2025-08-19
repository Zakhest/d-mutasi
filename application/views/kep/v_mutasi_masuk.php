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
                      <th>Nomor Urut</th>
                      <th>Tanggal</th>
              
                      <th>Asal Sekolah</th>
                      <th style="white-space: nowrap;">Status</th>
               
            
                      <th>Tindakan</th>
                      
                      
                    </tr>
                    </thead>
                   
                   <tbody id="myTable">
    <?php 
    $no = 1;
    if (!empty($mutasi_masuk)) {
        foreach ($mutasi_masuk as $m) { ?>   
            <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $m->tanggal_surat?></td>
                <td><?php echo $m->asal_sekolah?></td>
                <td><?php echo $m->persetujuan ?></td> 
                <td style="white-space:nowrap;">
                 
                
                    <!-- Tambahkan onclick event untuk memanggil showDetail() -->
             
    
                <button class="btn btn-success" onclick="openCek(<?php echo $m->no_urut?>)">Periksa</button>
                <?php if ($m->persetujuan == 'disetujui') { ?>
                  <button class="btn btn-primary" onclick="printdata(<?php echo $m->no_urut ?>)">Cek Surat</button>
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



function openCek(no_urut) {
    var url = "<?php echo site_url('kep/mutasi_masuk/detail/') ?>" + no_urut;
    window.open(url, "_blank", "height=700,width=500,scrollbars=yes");
}                       
   
       



function printdata(no) {
    var url = "<?php echo site_url('kep/mutasi_masuk/printSurat/') ?>" + no;
    window.open(url, "_blank", "height=700,width=500,scrollbars=yes");
}


 

    function openEditModal( no, no_surat, tanggal_dibuat, nama_siswa, nisn_nis, jenis_kelamin, kelas, sekolah_asal, alamat_sekolah_asal, kota_kab, sekolah_tujuan, tgl_disahkan, ttl, provinsi, sekertaris, nip, jabatan, tanda_tangan, persetujuan, alasan_penolakan) {
        $('#editModal').modal('show');
        $('#editNo').val(no);
        $('#editNoSurat').val(no_surat);
        $('#editTanggaldibuat').val(tanggal_dibuat);
        $('#nama_siswa').val(nama_siswa);
        $('#editNisnNis').val(nisn_nis);
        $('#kelas').val(kelas);
        $('#jenis_kelamin').val(jenis_kelamin);
        $('#sekolah_asal').val(sekolah_asal);
        $('#alamat_sekolah_asal').val(alamat_sekolah_asal);
        $('#kota_kab').val(kota_kab);
        $('#tujuan_sekolah').val(sekolah_tujuan);
        $('#tanggal_surat').val(tgl_disahkan);
        $('#ttl').val(ttl);
        $('#provinsi').val(provinsi);
        $('#sekretaris').val(sekertaris);
        $('#niip').val(nip);
        $('#jabatann').val(jabatan);
        $('#persetujuan').val(persetujuan);
        $('#alasan_penolakan').val(alasan_penolakan);

        if (tanda_tangan) {
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
                <h4 class="modal-title">Edit Data</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
          <form method="post" action="<?=base_url('Kep/Mutasi/UpdateData')?>" enctype="multipart/form-data">
                <input type="hidden" name="no" id="editNo">
                <label>Tanggal Surat</label>
                <input type="text" id="tanggal_surat" required name="tgl_disahkan" class="form-control" placeholder="Nomor urut surat" readonly>

                <label>Nama Siswa </label>
                <input type="text" required placeholder="Masukan nama Siswa" name="nama_siswa" class="form-control" id="nama_siswa" readonly>

                <div class="form-group">
                    <label for="exampleInputPassword1">Kelas</label>
                    <input type="text" required name="kelas" class="form-control" id="kelas" placeholder="Kelas Siswa" readonly>
                </div>

                <label>Tempat Tanggal Lahir</label>
                <input type="text" required name="ttl" class="form-control" placeholder="Contoh: Bogor, 23 Agustus 2023" id="ttl" readonly>

                <label>NIS/NISN</label>
                <input type="text" required name="nisn_nis" class="form-control" placeholder="Contoh: 2344122334/12345679" id="editNisnNis" readonly>

                <label>Jenis Kelamin: </label>
                <input type="text" class="form-control" id="jenis_kelamin" readonly>

                <label>Sekolah Asal </label>
                <input type="text" class="form-control" disabled id="sekolah_asal" name="sekolah_asal" readonly>
                <label>Alamat Sekolah Asal </label>
                  <input type="text" class="form-control" disabled id="alamat_sekolah_asal" name="alamat_sekolah_asal" readonly>
                <div class="form-group">
                <label>Sekolah Tujuan:</label>
                <input type="text" required name="sekolah_tujuan" class="form-control" placeholder="Masukan nama Sekolah tujuan" id="tujuan_sekolah" readonly>

                <label>Kota/Kab:</label>
                <input type="text" placeholder="Kota Sekolah Tujuan muncul disini" required name="kota_kab" class="form-control" id="kota_kab" readonly>

                <label>Provinsi </label>
                <input type="text" class="form-control" id="provinsi" readonly>

                <label>Tanggal dibuat: </label>
                <input type="text" required name="tanggal_dibuat" class="form-control" placeholder="Contoh: 23 Agustus 2023" id="editTanggaldibuat" readonly>

                <div class="form-group">
                    <label>Nama Sekertaris</label>
                    <input type="text" id="sekretaris" class="form-control" readonly>
                    
                </div>

                <div class="form-group">
                    <label>NIP</label>
                    <input type="text" required name="nip" id="niip" class="form-control" readonly placeholder="Data NIP muncul disini" readonly>
                </div>

                <div class="form-group">
                    <label>Jabatan</label>
                    <input type="text" required name="jabatan" id="jabatann" class="form-control" readonly placeholder="Jabatan Sekretaris muncul disini" readonly>
                </div>

                <div class="form-group">
                    <label>Persetujuan</label>
                    <select name="persetujuan" class="form-control" id="persetujuan" onchange="toggleInputFields()">
                        <option value="Disetujui">Disetujui</option>
                        <option value="Ditolak">Ditolak</option>
                    </select>
                </div>
 
                <div class="form-group" id="uploadTandaTangan" style="display: none;">
                    <label>Upload Tanda Tangan</label>
                    <input type="file" name="tanda_tangan" class="form-control">
                </div>

                <div class="form-group" id="alasanPenolakan" style="display: none;">
                    <label>Alasan Penolakan</label>
                    <input type="text" name="alasan_penolakan" class="form-control" id="alasan_penolakan">
                </div>
                 
                <div class="form-group" id="existingTandaTangan"></div>

                <script>
                function toggleInputFields() {
                    var persetujuan = document.getElementById('persetujuan').value;
                    var uploadTandaTangan = document.getElementById('uploadTandaTangan');
                    var alasanPenolakan = document.getElementById('alasanPenolakan');

                    if (persetujuan === 'Disetujui') {
                        uploadTandaTangan.style.display = 'block';
                        alasanPenolakan.style.display = 'none';
                    } else if (persetujuan === 'Ditolak') {
                        uploadTandaTangan.style.display = 'none';
                        alasanPenolakan.style.display = 'block';
                    } else {
                        uploadTandaTangan.style.display = 'none';
                        alasanPenolakan.style.display = 'none';
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
      <strong>Copyright &copy; <?php echo date("Y")?> <a href="http://localhost/Zak">E-Mutasi Dev Team</a> by Zak Enterprise.</strong>
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
