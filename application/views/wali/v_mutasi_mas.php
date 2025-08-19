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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    

    <!-- Navbar -->
    <?php if($this->session->userdata('logged_in')) {

// Mendapatkan data login dari session
$no_telp = $this->session->userdata('no_telp');


} else {
// Jika pengguna belum login, tampilkan pesan error atau redirect ke halaman login
echo "Anda belum login!";
}
 ?>

    <!-- Main Sidebar Container -->
    <?php $this->load->view('wali/v_menu_wali'); ?>

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

 <?php if ($this->session->flashdata('error')): ?>
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?php echo $this->session->flashdata('error'); ?>
    </div>
<?php endif; ?>

                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example" class="table table-bordered table-hover" >
                    <thead>
                      <tr>
                        <td colspan="10"><button class="btn btn-primary" data-toggle="modal" data-target="#addModal"><i class="fas fa-plus"></i> Tambah data</button>
                        
                      </td>
                        
                    
                      </tr>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Nomor Urut</th>
                      <th>Nama Siswa</th>
                      <th>Tanggal </th>
                      <th>Status</th>
                      <th>Tindakan</th>
                      
                      
                    </tr>
                    </thead>
                   
                   <tbody id="myTable">
    <?php 
    $no = 1;
    if (!empty($permintaan)) {
        foreach ($permintaan as $m) { ?>   
            <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $m->nama_siswa?></td>
                <td style="white-space: nowrap;"><?php echo date('d F Y', strtotime($m->tanggal_disurat)); ?></td>
                <td><?php echo $m->status ?></td>
                <td style="white-space:nowrap;">
                    <!-- Tambahkan onclick event untuk memanggil showDetail() -->
             
             
                <button class="btn btn-success" onclick="openEditModal('<?php echo $m->no ?>', '<?php echo $m->nama_siswa ?>', '<?php echo $m->nama_wali ?>', '<?php echo $m->surat_permohonan_pindah ?>', '<?php echo $m->surat_pindah_sekolah_asal ?>', '<?php echo $m->fotokopi_buku_rapor ?>', '<?php echo $m->fotokopi_kartu_nisn ?>', '<?php echo $m->bukti_dikeluarkan_dapodik ?>', '<?php echo $m->tanggal_disurat ?>', '<?php echo $m->id_login ?>')"><i class="fas fa-edit"></i> Edit</button>
               
                 <button class="btn btn-primary status-button" data-toggle="modal" data-target="#detailModal" data-no="<?php echo $m->no; ?>"><i class="fas fa-eye"></i> Lihat Detail</button>
                 <?php if ($m->status == 'Selesai'): ?>
    <button class="btn btn-info"> 
        <i class="fas fa-download"></i> Unduh surat
    </button>
<?php else: ?>
    
<?php endif; ?>

                </td>
            </tr>

            
        <?php }
    }?>
</tbody>

                   </table>
                   

        <script>


                       
   
       
  function printdata(no) {
        var url = "<?php echo site_url('staf/print_mutasi/') ?>" + no + "/print";
        window.open(url, "_blank", height="700", width="500", scrollbars="yes");
    }

 

    function openEditModal(no, nama_siswa, nama_wali, surat_permohonan_pindah, surat_pindah_sekolah_asal, fotokopi_buku_rapor, fotokopi_kartu_nisn, bukti_dikeluarkan_dapodik, tanggal_disurat, id_login) {
        $('#editModal').modal('show');
        $('#editNo').val(no);
        $('#nama_siswa').val(nama_siswa);
        $('#nama_wali').val(nama_wali);
        $('#surat_permohonan_pindah').val('');
        $('#surat_pindah_sekolah_asal').val('');
        $('#fotokopi_buku_rapor').val('');
        $('#fotokopi_kartu_nisn').val('');
        $('#bukti_dikeluarkan_dapodik').val('');
        $('#tanggal_disurat').val(formatDate(tanggal_disurat));
        $('#id_login').val(id_login);

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

    function openDetailModal(status) {
        $('#detailModal').modal('show');
        updateProgressBar(status);
    }

  

  $(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });

  $('#example').DataTable();
}); 


                               

   

$(document).ready(function() {
    $('#example').DataTable();
});
</script>
<div class="modal fade" id="addModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <p>
                File yang diizinkan pdf, jpg, png, jpeg maksimal 2MB
              </p>
            <form method="post" action="<?=base_url('Wali/AddData/')?>"  enctype="multipart/form-data">
  

    <label>Nama Siswa</label>
    <input type="text" required name="nama_siswa" class="form-control" placeholder="Masukan nama siswa">
    <input type="hidden" name="status" value="Pending">
    <label>Nama Wali</label>
    <input type="text" required name="nama_wali" class="form-control" placeholder="Masukan nama wali" value="<?php echo $nama_wali?>">
    <input type="hidden" name="submenu" value="index">
    <input type="hidden" required name="jenis_mutasi" value="masuk">
    <input type="hidden" name="no_telp" value="<?php echo $no_telp?>">
    <input type="hidden" required name="subkategori" value="masuk">

    <label>Surat Permohonan Pindah dari Orang Tua</label>
    <input type="file" required name="surat_permohonan_pindah" class="form-control">

    <label>Surat Pindah dari Sekolah Asal</label>
    <input type="file" required name="surat_pindah_sekolah_asal" class="form-control">

    <label>Fotokopi Buku Rapor (Identitas dan Catatan Mutasi)</label>
    <input type="file" required name="fotokopi_buku_rapor" class="form-control">

    <label>Fotokopi Kartu NISN</label>
    <input type="file" required name="fotokopi_kartu_nisn" class="form-control">

    <label>Bukti Dikeluarkan dari Sistem DAPODIK</label>
    <input type="file" required name="bukti_dikeluarkan_dapodik" class="form-control">

    <label>Tanggal </label>
    <input type="date" required name="tanggal_disurat" class="form-control" value="<?php echo date('Y-m-d'); ?>">

    
    <input type="hidden" required name="id_login" class="form-control" placeholder="Masukan ID login" value="<?php echo $id_login?>">

    

    <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>

                          <script>
                              $(function() {
    //Initialize Select2 Elements
                              $('.select3').select2()
       
      
})

          
                
                                    function isi_sekolah() {
                                    var nama_sekolah = $("#sekolah").val();
                
                                  $.get("<?php echo base_url('Staf/sekolah'); ?>", { nama_sekolah: nama_sekolah }, function(respons) {
                                        var result = JSON.parse(respons);
                
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
    </div> 

            

    </div>
    
</div> <!--End AddModal -->


<div class="modal fade" id="editModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Data</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
          <form method="post" action="<?=base_url('Wali/EditData/antarkota')?>" enctype="multipart/form-data">
    <input type="hidden" id="editNo" name="no">
    <div class="form-group">
    <label>Nama Siswa</label>
    <input type="text" id="nama_siswa" required name="nama_siswa" class="form-control" placeholder="Masukan nama siswa">
                              </div>
                              <div class="form-group">
    <label>Nama Wali</label>
    <input type="text" id="nama_wali" required name="nama_wali" class="form-control" placeholder="Masukan nama wali">
    <input type="hidden" id="jenis_mutasi" required name="jenis_mutasi" value="masuk">
    <input type="hidden" id="submenu" required name="submenu" value="index">
    <input type="hidden" id="subkategori" required name="subkategori" value="masuk">
                              </div>
                              <div class="form-group">
    <label>Surat Permohonan Pindah dari Orang Tua</label>
    <input type="file" id="surat_permohonan_pindah" name="surat_permohonan_pindah" class="form-control">
    <a id="surat_permohonan_pindah_link" href="#" target="_blank">Lihat file yang telah diupload</a>
                              </div>
                              <div class="form-group">
    <label>Surat Pindah dari Sekolah Asal</label>
    <input type="file" id="surat_pindah_sekolah_asal" name="surat_pindah_sekolah_asal" class="form-control">
    <a id="surat_pindah_sekolah_asal_link" href="#" target="_blank">Lihat file yang telah diupload</a>
                              </div>
                              <div class="form-group">
    <label>Fotokopi Buku Rapor (Identitas dan Catatan Mutasi)</label>
    <input type="file" id="fotokopi_buku_rapor" name="fotokopi_buku_rapor" class="form-control">
    <a id="fotokopi_buku_rapor_link" href="#" target="_blank">Lihat file yang telah diupload</a>
    </div>
    <div class="form-group">
    <label>Fotokopi Kartu NISN</label>
    <input type="file" id="fotokopi_kartu_nisn" name="fotokopi_kartu_nisn" class="form-control">
    <a id="fotokopi_kartu_nisn_link" href="#" target="_blank">Lihat file yang telah diupload</a>
                              </div>
                              <div class="form-group">
    <label>Bukti Dikeluarkan dari Sistem DAPODIK</label>
    <input type="file" id="bukti_dikeluarkan_dapodik" name="bukti_dikeluarkan_dapodik" class="form-control">
    <a id="bukti_dikeluarkan_dapodik_link" href="#" target="_blank">Lihat file yang telah diupload</a>
                              </div>
    <label>Tanggal</label>
    <input type="date" id="tanggal_disurat" required name="tanggal_disurat" class="form-control">
    <input type="hidden" id="id_login" required name="id_login" class="form-control" placeholder="Masukan ID login">
    <div class="modal-footer justify-content-between">
      <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </form>

                         
      </div>
    </div> 

            

    </div>
    
</div> <!-- End Edit modal -->

<div id="detailModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
    <p>Progress Laporan Anda</p>
    
    <div class="progress-container">
    </div>

    
    
    <div id="completion-message" style="display: none;">
        Pembuatan Surat mutasi Sudah Selesai! Silahkan Unduh di <a href="#">sini</a>
    </div>
    <div id="pending-message" style="display: none;">
      Permintaan pembuatan surat mutasi sudah terkirim! sedang menunggu verfikasi data!
    </div>
    <div id="verif-message" style="display: none;">
    Permintaan pembuatan surat mutasi sedang di Verifikasi! mohon menunggu dan mohon untuk tidak mengedit data selama proses verifikasi
    </div>
    <div id="acc" style="display: none;">
    Permintaan pembuatan surat mutasi anda di setujui dan di paraf! silahkan menunggu hingga selesai!

    </div>
    <div id="rejected-message" style="display: none;">
        Permintaan pembuatan surat mutasi anda ditolak. 
        <br>Alasan: <span id="rejection-reason"></span>
    </div>
    <br>

    <div id="detail-data">
        <h5>Detail Data</h5>
        <p><strong>Nama Siswa:</strong> <span id="detail-nama_siswa"></span></p>
        <p><strong>Nama Wali:</strong> <span id="detail-nama_wali"></span></p>
        <p><strong>Surat Permohonan Pindah:</strong> <a id="detail-surat_permohonan_pindah" href="#" target="_blank">Lihat file</a></p>
        <p><strong>Surat Pindah Sekolah Asal:</strong> <a id="detail-surat_pindah_sekolah_asal" href="#" target="_blank">Lihat file</a></p>
        <p><strong>Fotokopi Buku Rapor:</strong> <a id="detail-fotokopi_buku_rapor" href="#" target="_blank">Lihat file</a></p>
        <p><strong>Fotokopi Kartu NISN:</strong> <a id="detail-fotokopi_kartu_nisn" href="#" target="_blank">Lihat file</a></p>
        <p><strong>Bukti Dikeluarkan dari DAPODIK:</strong> <a id="detail-bukti_dikeluarkan_dapodik" href="#" target="_blank">Lihat file</a></p>
        <p><strong>Tanggal:</strong> <span id="detail-tanggal_disurat"></span></p>
    </div>
</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<style>
  .progress-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    position: relative;
    width: 100%;
    max-width: 600px;
    margin: 20px auto;
}

.step {
    width: 60px;
    height: 60px;
    background: #ccc;
    color: white;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 14px;
    font-weight: bold;
    position: relative;
    z-index: 2;
}

.step.active {
    background: #007bff;
}

.line {
    flex: 1;
    height: 4px;
    background: #ccc;
    position: relative;
    z-index: 1;
    margin: 0 5px;
}

.line.active {
    background: #007bff;
}


</style>

<script>
    const statuses = ['Pending', 'Verifikasi', 'Disetujui', 'Selesai', 'Ditolak'];
    let currentStatus = 'Pending'; // Default value, will be updated by AJAX

    const progressContainer = document.querySelector('.progress-container');
    const completionMessage = document.getElementById('completion-message');
    const pendingMessage = document.getElementById('pending-message');
    const verifMessage = document.getElementById('verif-message');
    const accMessage = document.getElementById('acc');
    const rejectedMessage = document.getElementById('rejected-message');
    const rejectionReason = document.getElementById('rejection-reason');

    function createProgressBar(statuses, currentStatus) {
        progressContainer.innerHTML = '';

        statuses.forEach((status, index) => {
            const step = document.createElement('div');
            step.classList.add('step');

            if (statuses.indexOf(currentStatus) >= index) {
                step.classList.add('active');
            }

            const label = document.createElement('div');
            label.classList.add('status-label');
            label.textContent = status;
            step.appendChild(label);

            progressContainer.appendChild(step);

            if (index < statuses.length - 1) {
                const line = document.createElement('div');
                line.classList.add('line');
                if (statuses.indexOf(currentStatus) > index) {
                    line.classList.add('active');
                }
                progressContainer.appendChild(line);
            }
        });

        if (currentStatus === 'Selesai') {
            completionMessage.style.display = 'block';
        } else {
            completionMessage.style.display = 'none';
        }

        if (currentStatus === 'Pending'){
          pendingMessage.style.display = 'block';
        }
        else {
          pendingMessage.style.display = 'none';
        }

        if (currentStatus === 'Verifikasi'){
          verifMessage.style.display = 'block';
        }
        else {
          verifMessage.style.display = 'none';
        }

        if (currentStatus === 'Disetujui'){
          accMessage.style.display = 'block';
        }
        else {
          accMessage.style.display = 'none';
        }

        if (currentStatus === 'Ditolak') {
            progressContainer.style.display = 'none';
            rejectedMessage.style.display = 'block';
        } else {
            progressContainer.style.display = 'flex';
            rejectedMessage.style.display = 'none';
        }
    }

    createProgressBar(statuses, currentStatus);

    document.querySelectorAll('.status-button').forEach(button => {
        button.addEventListener('click', function() {
            const no = this.getAttribute('data-no');
            fetchStatus(no);
        });
    });

    function fetchStatus(no) {
        console.log('Fetching status for no:', no); // Debugging
        $.ajax({
            url: '<?= base_url("Wali/Mutasi_kel/get_status") ?>',
            type: 'GET',
            data: { no: no },
            success: function(response) {
                console.log('Response:', response); // Debugging
                const data = JSON.parse(response);
                if (data.status) {
                    currentStatus = data.status;
                    createProgressBar(statuses, currentStatus);
                    if (data.status === 'Ditolak') {
                        rejectionReason.textContent = data.alasan_penolakan;
                    }
                } else {
                    alert('Data tidak ditemukan');
                }

                // Update detail data
                $('#detail-nama_siswa').text(data.nama_siswa);
                $('#detail-nama_wali').text(data.nama_wali);
                $('#detail-surat_permohonan_pindah').attr('href', '<?=base_url('assets/uploads/')?>' + data.surat_permohonan_pindah);
                $('#detail-surat_pindah_sekolah_asal').attr('href', '<?=base_url('assets/uploads/')?>' + data.surat_pindah_sekolah_asal);
                $('#detail-fotokopi_buku_rapor').attr('href', '<?=base_url('assets/uploads/')?>' + data.fotokopi_buku_rapor);
                $('#detail-fotokopi_kartu_nisn').attr('href', '<?=base_url('assets/uploads/')?>' + data.fotokopi_kartu_nisn);
                $('#detail-bukti_dikeluarkan_dapodik').attr('href', '<?=base_url('assets/uploads/')?>' + data.bukti_dikeluarkan_dapodik);
                $('#detail-tanggal_disurat').text(formatDate(data.tanggal_disurat));
            },
            error: function() {
                alert('Terjadi kesalahan saat mengambil data');
            }
        });
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
            
            
        
             
                <!-- /.card-body -->





           </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="http://localhost/Zak">E-Mutasi Dev Team</a> by Zak Enterprise.</strong>
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

<script>
    <?php if ($this->session->flashdata('sukses')): ?>
        Swal.fire({
            icon: 'success',
            title: 'Sukses',
            text: '<?php echo $this->session->flashdata('sukses'); ?>',
            showConfirmButton: true,
            confirmButtonText: 'Tutup'
        });
    <?php endif; ?>

    <?php if ($this->session->flashdata('error')): ?>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            html: '<?php echo $this->session->flashdata('error'); ?>',
            showConfirmButton: true,
            confirmButtonText: 'Tutup'
        });
    <?php endif; ?>

    <?php if ($this->session->flashdata('success')): ?>
        Swal.fire({
            icon: 'success',
            title: 'Sukses',
            text: '<?php echo $this->session->flashdata('success'); ?>',
            showConfirmButton: true,
            confirmButtonText: 'Tutup'
        });
    <?php endif; ?>
</script>

  </body>
  </html>
