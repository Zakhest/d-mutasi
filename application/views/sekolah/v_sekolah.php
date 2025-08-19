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
              <h1 class="m-0">Data Sekolah</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Sekolah </li>
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
                  <h3 class="card-title">List Data Sekolah</h3>
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
                        <td colspan="10" ><button class="btn btn-primary" data-toggle="modal" data-target="#modal-form">Tambah data</button></td>
                        
                    
                      </tr>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No</th>
                      <th>Nama Sekolah</th>
                      <th style="white-space: nowrap;">Alamat</th>
                      <th>Kota</th>
                      <th>Provinsi</th>
                      <th>Tindakan</th>
                      
                      
                    </tr>
                    </thead>
                   
                   <tbody id="myTable">
    <?php 
    $no = 1;
        foreach ($sekolah as $m) { ?>   
            <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $m['nama_sekolah']?></td>
                <td style="white-space: nowrap;"><?php echo $m['alamat'] ?></td>
                <td><?php echo $m['kota']?></td>
                <td><?php echo $m['provinsi']?></td>
                <td style="white-space:nowrap;">
                    <!-- Tambahkan onclick event untuk memanggil showDetail() -->
             
             
                <button class="btn btn-success" onclick="openEditModal(<?php echo $m['no_urut'] ?>,'<?php echo $m['nama_sekolah'] ?>','<?php echo $m['alamat']?>', '<?php echo $m['kota']?>', '<?php echo $m['provinsi']?>')">Edit</button>

                

                </td>
            </tr>

            
        <?php }
    ?>
</tbody>

                   </table>
                   

        <script>


                       
   
       
  function printdata(no) {
        var url = "<?php echo site_url('Mutasi/print_mutasi/') ?>" + no + "/print";
        window.open(url, "_blank", height="700", width="500", scrollbars="yes");
    }

 

    function openEditModal( no, nama_sekolah, alamat, kota, provinsi) {
        $('#editModal').modal('show');
        $('#editNo').val(no);
        $('#editNoSurat').val(nama_sekolah);
        $('#alamat').val(alamat);
        $('#kota').val(kota);
        $('#provinsi').val(provinsi);
    
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
                <h4 class="modal-title">Edit Data</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
          <form method="post" action="<?=base_url('Sekolah/edit')?>">
       
<input type="hidden" id="editNo" required name="no" class="form-control" placeholder="Nomor urut ">

<label>Nama Sekolah</label>
<input type="text" placeholder="Masukan Nomor Surat Mutasi Sekolah asal" required name="nama_sekolah" class="form-control" id="editNoSurat">

<label>Alamat</label>
<input type="text" id="alamat" required name="alamat" class="form-control" placeholder="Nomor urut surat">

<label>Kota </label>
<input type="text" required placeholder="Masukan nama Siswa" name="kota" class="form-control" id="kota">

<label>Provinsi </label>
<input type="text" class="form-control" id="provinsi" name="provinsi" value="Jawa Barat">


 <script>
                     
    $(function () {
    //Initialize Select2 Elements
    $('.select3').select2()
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })


     })

    function isi_sekolah_otomatis() {
    var nama_sekolah = $("#nama_sekolah_edit").val();

  $.get("<?php echo base_url('Mutasi/sekolah'); ?>", { nama_sekolah: nama_sekolah }, function(respons) {
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
<div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
    <button type="submit" class="btn btn-primary">Simpan</button>
</div>
     
          </form>
      </div>
    </div> 

            

    </div>
    
</div>
 

  


<div class="modal fade" id="modal-form">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="post" action="<?=base_url('Sekolah')?>">
        <div class="modal-header">
          <h4 class="modal-title">Tambah Data</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         
        

          <label>Nama Sekolah</label>
          <input type="text" placeholder="Masukan Nama Sekolah" required name="nama_sekolah" class="form-control" id="addNamaSekolah">

          <label>Alamat</label>
          <input type="text" id="addAlamat" required name="alamat" class="form-control" placeholder="Alamat">

          <label>Kota</label>
          <input type="text" required placeholder="Masukan Kota" name="kota" class="form-control" id="addKota">

          <label>Provinsi</label>
          <input type="text" class="form-control" id="addProvinsi" name="provinsi" value="Jawa Barat">

          <script>
            $(function () {
              //Initialize Select2 Elements
              $('.select3').select2()
              $('.select2bs4').select2({
                theme: 'bootstrap4'
              })
            })

            function isi_sekolah_otomatis() {
              var nama_sekolah = $("#addNamaSekolah").val();

              $.get("<?php echo base_url('Mutasi/sekolah'); ?>", { nama_sekolah: nama_sekolah }, function(respons) {
                var result = JSON.parse(respons);

                if (result) {
                  $('#addNamaSekolah').val(result.nama_sekolah);
                  $('#addAlamat').val(result.alamat);
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
  </div>
</div>

           </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; <?php echo date("Y")?> <a href="http://localhost/Zak">D-Mutasi Dev Team</a> by Zak Enterprise.</strong>
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
