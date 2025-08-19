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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="icon" type="image/png" href="<?=base_url()?>assets/img/kota.png"/>
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Detail Data Mutasi Masuk</h3>
                <?php 
if ($this->session->flashdata('sukses')) { ?>
   
          <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?php echo $this->session->flashdata('sukses') ?>
                  </div>     
          

 <?php }  ?>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Urut</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $mutasi_masuk->no_urut?>" readonly placeholder="No Urut Kosong">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Hari ini  </label>
                    <input type="text" readonly class="form-control" id="exampleInputPassword1" placeholder="Tanggal Hari ini Kosong" value="<?php echo $mutasi_masuk->tanggal_hari_ini?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Hijriah  </label>
                    <input type="text" readonly class="form-control" id="exampleInputPassword1" placeholder="Tanggal Hijriah Kosong" value="<?php echo $mutasi_masuk->tanggal_hijriah?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Asal Sekolah Kepala SD </label>
                    <input type="text" readonly  class="form-control" value="<?php echo $mutasi_masuk->kepala_sd?>" id="exampleInputPassword1" placeholder="Asal Sekolah Kepala SD Kosong" >
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Alamat Sekolah </label>
                    <input type="text" readonly  class="form-control" id="exampleInputPassword1" placeholder="Alamat Sekolah Kosong" value="<?php echo $mutasi_masuk->alamat_sekolah?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kecamatan </label>
                    <input type="text" readonly  class="form-control" id="exampleInputPassword1" placeholder="Kecamatan Kosong" value="<?php echo $mutasi_masuk->kecamatan?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nomor Surat</label>
                    <input type="text" readonly  class="form-control" id="exampleInputPassword1" placeholder="Nomor Surat Kosong" value="<?php echo $mutasi_masuk->no_surat?>">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Surat</label>
                    <input type="text" readonly  class="form-control" id="exampleInputPassword1" placeholder="Tanggal Surat Kosong" value="<?php echo $mutasi_masuk->tanggal_surat?>">
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
                     foreach ($siswa as $d) {
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

                   <form action="<?=site_url()?>Kep/Mutasi_masuk/UpdateData" method="post" enctype="multipart/form-data">
                   <div class="form-group">
                    <label>Persetujuan</label>
                    
                    <input type="hidden" name="no_urut" value="<?php echo $mutasi_masuk->no_urut?>">
                    
                    <select name="persetujuan" class="form-control" id="persetujuan" onchange="toggleInputFields()">
                    <?php if($mutasi_masuk->persetujuan == 'ditolak') {?>  
                      <option value="ditolak">ditolak</option> 
                    <option value="disetujui">disetujui</option>
                    <?php } elseif ($mutasi_masuk->persetujuan == 'disetujui') { ?>
                      <option value="disetujui">disetujui</option>  
                      <option value="ditolak">ditolak</option>
                    <?php } else { ?>
                      <option value="">--Pilih Persetujuan--</option>
                      <option value="disetujui">disetujui</option>  
                      <option value="ditolak">ditolak</option>
                    <?php }?>
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
         
                <div class="form-group" id="existingTandaTangan">
                <label>Tanda Tangan Saat Ini</label><br>
                <?php if($mutasi_masuk->tanda_tangan) {?> 
                <img src="<?=base_url()?>assets/ttd/<?php echo $mutasi_masuk->tanda_tangan?>" alt="Tanda Tangan" style="max-width: 100px;">
                <?php } else { ?>
                <span>Tidak ada tanda tangan</span>
                <?php } ?>
                </div>

                <script>
                function toggleInputFields() {
                    var persetujuan = document.getElementById('persetujuan').value;
                    var uploadTandaTangan = document.getElementById('uploadTandaTangan');
                    var alasanPenolakan = document.getElementById('alasanPenolakan');
                    var existingTandaTangan = document.getElementById('existingTandaTangan');

                    if (persetujuan === 'disetujui') {
                        uploadTandaTangan.style.display = 'block';
                        alasanPenolakan.style.display = 'none';
                    } else if (persetujuan === 'ditolak') {
                        uploadTandaTangan.style.display = 'none';
                        alasanPenolakan.style.display = 'block';
                        existingTandaTangan.style.display = 'none';
                        
                    } else {
                        uploadTandaTangan.style.display = 'none';
                        alasanPenolakan.style.display = 'none';
                    }
                }

                document.addEventListener('DOMContentLoaded', function() {
                    toggleInputFields(); // Ensure the correct fields are shown on page load
                });
                </script>
               
                 </div>

                 <div class="card-footer">
                  <a href="#"><button type="submit" class="btn btn-primary" ><i class="fas fa-paper-plane"></i> Kirim</button></a>
                  <button type="submit" class="btn btn-default" onclick="kembali()">Kembali</button> 
                </div>
              </form>

            </div>
          </div>

          <script type="text/javascript">
           
            function kembali(){
              window.close();
            }

            $(document).ready(function() {
    $('#data-table').DataTable();
});
            </script>
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
<!-- Tambahkan SweetAlert2 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

<!-- Sebelum closing body tag -->
<!-- Tambahkan SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
// Tampilkan SweetAlert berdasarkan flashdata
<?php if($this->session->flashdata('sukses')): ?>
    Swal.fire({
        title: 'Berhasil!',
        text: '<?php echo $this->session->flashdata("sukses"); ?>',
        icon: 'success',
        confirmButtonText: 'OK'
    });
<?php endif; ?>

<?php if($this->session->flashdata('error')): ?>
    Swal.fire({
        title: 'Error!',
        text: '<?php echo $this->session->flashdata("error"); ?>',
        icon: 'error',
        confirmButtonText: 'OK'
    });
<?php endif; ?>
</script>
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