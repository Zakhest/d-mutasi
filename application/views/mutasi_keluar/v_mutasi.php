<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>D-Mutasi | Data Mutasi  </title>

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
    <?php $this->load->view('v_menu'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Mutasi Keluar</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Mutasi Keluar </li>
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
                  <h3 class="card-title">List Data Mutasi Keluar</h3>
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
                        <td colspan="10">
                          <button class="btn btn-primary" data-toggle="modal" data-target="#addModal">Tambah data</button>
                          <?php if (!empty($mutasi)) { ?>
                            <a href="<?=site_url('Export')?>" class="btn btn-success">Ekspor ke Excel</a>
                          <?php } else { ?>
                            <a href="#" class="btn btn-success" disabled>Tidak ada data</a>
                          <?php } ?>
                        </td>
                      </tr>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Nomor Urut</th>
                      <th>No Surat</th>
                      <th>Tanggal dibuat</th>
                      <th style="white-space: nowrap;">Nama Siswa</th>
               
                      <th>NIS/NISN</th>
                      <th>Jenis Kelamin</th>
                      <th style="white-space: nowrap;">Status</th>
                      <th>Tindakan</th>
                      
                      
                    </tr>
                    </thead>
                   
                   <tbody id="myTable">
    <?php 
    $no = 1;
    if (!empty($mutasi)) {
        foreach ($mutasi as $m) { ?>   
            <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $m->no_surat?></td>
                <td style="white-space: nowrap;" class="convert-date"><?php echo $m->tanggal_dibuat ?></td>
                <td><?php echo $m->nama_siswa?></td>
                <td><?php echo $m->nisn_nis ?></td>
                <td><?php echo $m->jenis_kelamin ?></td>
                <td>
  <?php if ($m->persetujuan == 'Ditolak') { ?>
    <a style="color:red;" href="#" data-toggle="modal" data-target="#statusModal" onclick="showStatusModal('<?php echo $m->persetujuan ?>', '<?php echo $m->alasan_penolakan ?>')">
      <?php echo $m->persetujuan ?>
    </a>
  <?php } elseif($m->persetujuan == 'Disetujui') { ?>
    <p style="color:green;"><?php echo $m->persetujuan ?></p>
  <?php } else { ?>
    <p style="color:orange;"><?php echo $m->persetujuan ?></p>
  <?php } ?>
</td>  
                <td style="white-space:nowrap;">
                    <!-- Tambahkan onclick event untuk memanggil showDetail() -->
             
             
                <button class="btn btn-success" onclick="openEditModal(<?php echo $m->no ?>,'<?php echo $m->no_surat ?>', '<?php echo $m->tanggal_dibuat ?>', '<?php echo $m->nama_siswa ?>', '<?php echo $m->nisn_nis ?>', '<?php echo $m->jenis_kelamin ?>', '<?php echo $m->kelas?>','<?php echo $m->sekolah_asal?>', '<?php echo $m->alamat_sekolah_asal?>', '<?php echo $m->kota_kab?>', '<?php echo $m->sekolah_tujuan?>', '<?php echo $m->tgl_disahkan?>', '<?php echo $m->ttl?>', '<?php echo $m->provinsi?>','<?php echo $m->sekertaris?>')">Edit</button>

                <?php if ($m->persetujuan == 'Disetujui') { ?>
                  <button class="btn btn-primary" onclick="printdata(<?php echo $m->no ?>)">Print Surat</button>
                <?php } elseif ($m->persetujuan == 'Ditolak') 
                 { ?>
                  <button class="btn btn-danger" disabled>Surat Ditolak</button>
                <?php } else { ?>
                  <button class="btn btn-warning" disabled>Pending</button>
                <?php } ?>


                </td>
            </tr>

            
        <?php }
    }?>
</tbody>

                   </table>
                
                   

        <script>
 

     
   
       
 
 function printdata(no) {
    var url = "<?php echo site_url('kep/mutasi/printSurat/') ?>" + no;
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






function openEditModal(no, no_surat, tanggal_dibuat, nama_siswa, nisn_nis, jenis_kelamin, kelas, sekolah_asal, alamat_sekolah_asal, kota_kab, sekolah_tujuan, tgl_disahkan, ttl, provinsi, sekertaris) {
    $('#editModal').modal('show');

    $('#editNo').val(no);
    $('#editNoSurat').val(no_surat);
    $('#Tanggaldibuat').val(tanggal_dibuat);
    $('#nama_siswa').val(nama_siswa);
    $('#nisn_nis').val(nisn_nis);
    $('#ttll').val(ttl);
    $('#kotakab').val(kota_kab);
    $('#tujuan_sekolah').val(sekolah_tujuan);
    $('#tanggal_surat').val(tgl_disahkan);
    $('#alamat_baru').val(alamat_sekolah_asal);

    // **Set Jenis Kelamin**
    $('#kelas').val(kelas).trigger('change'); 

    // **Set Jenis Kelamin**
   // $('#jenis_kelamin').val(jenis_kelamin).trigger('change');

    if ($("#jenis_kelamin option[value='" + jenis_kelamin + "']").length > 0) {
        $('#jenis_kelamin').val(jenis_kelamin).change();
    } else {
        $('#jenis_kelamin').append(new Option(jenis_kelamin, jenis_kelamin, true, true)).trigger('change');
    }


    // **Set Dropdown Sekolah Asal**
    if ($("#sekolah_baru option[value='" + sekolah_asal + "']").length > 0) {
        $('#sekolah_baru').val(sekolah_asal).change();
    } else {
        $('#sekolah_baru').append(new Option(sekolah_asal, sekolah_asal, true, true)).trigger('change');
    }

    if ($("#nama_kasii option[value='" + sekertaris + "']").length > 0) {
        $('#nama_kasii').val(sekertaris).change();
    } else {
        $('#nama_kasii').append(new Option(sekertaris, sekertaris, true, true)).trigger('change');
    }

    if ($("#provinsi option[value='" + provinsi + "']").length > 0) {
        $('#provinsi').val(provinsi).change();
    } else {
        $('#provinsi').append(new Option(provinsi, provinsi, true, true)).trigger('change');
    }

    // **Set Dropdown Provinsi**
   
}



                               

   

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
          <form method="post" action="<?=base_url('Staf/AddData')?>">
          

                <label>No surat</label>
                <input type="text" placeholder="Masukan Nomor Surat Mutasi Sekolah asal" required name="no_surat" class="form-control" >
                <input type="hidden" name="status" value="pending">

                <label>Tanggal Surat</label>
                <input type="date" required name="tgl_disahkan" id="tanggal_surat" class="form-control" placeholder="Nomor urut surat">

                <label>Nama Siswa </label>
                <input type="text" required placeholder="Masukan nama Siswa" name="nama_siswa" class="form-control" >

                <div class="form-group">
                    <label for="kelas">Kelas</label>
                    <select name="kelas" class="form-control">
                    <option value="1 (Satu)">1 (Satu)</option>
                    <option value="2 (Dua)">2 (Dua)</option>
                     <option value="3 (Tiga)">3 (Tiga)</option>
                     <option value="4 (Empat)">4 (Empat)</option>
                     <option value="5 (Lima)">5 (Lima)</option>
                     <option value="6 (Enam)">6 (Enam)</option>
                    </select>
                </div>

                <label>Tempat Tanggal Lahir</label>
                <input type="text" required name="ttl" id="ttl" class="form-control" placeholder="Contoh: Bogor, 23 Agustus 2023" >

                <label>NIS/NISN</label>
                <input type="text" required name="nisn_nis" class="form-control" placeholder="Contoh: 2344122334/12345679" >

                <label>Jenis Kelamin: </label>
                <select class="form-control" name="jenis_kelamin" >
                   
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                </select>

              
                <div class="form-group">
                    
                    <label>Nama Sekolah Asal</label>
                      
                    <select class="form-control select2" id="sekolah" onchange="isi_sekolah()" style="height: 40px;" name="sekolah_asal">
                        <option>--Pilih--</option>
                        <?php foreach ($sekolah as $m) { ?>
                            <option><?php echo $m->nama_sekolah ?></option>
                        <?php } ?>
                    </select>
                    </div>

                <label>Alamat Sekolah</label>
                  <input type="text" class="form-control" id="alamat" readonly  name="alamat_sekolah_asal">
                
                <label>Sekolah Tujuan:</label>
                <input type="text" required name="sekolah_tujuan" class="form-control" placeholder="Masukan nama Sekolah tujuan">

                <label>Kota/Kab:</label>
                <input type="text" placeholder="Kota Sekolah Tujuan muncul disini" required name="kota_kab" class="form-control" id="kota_kab">

            
                <label>Provinsi </label>
                <select required name="provinsi" class="form-control select2" >
                    <option>--Pilih--</option>
                    <?php foreach ($provinsi as $p) { ?>
                        <option><?php echo $p->nama_provinsi ?></option>
                    <?php } ?>
                </select>


                <label>Tanggal dibuat: </label>
                <input type="date" required name="tanggal_dibuat" class="form-control" placeholder="Contoh: 23 Agustus 2023" id="editTanggaldibuat">

                <div class="form-group">
                    <label>Nama Sekertaris</label>
                    <select class="form-control" name="sekertaris" onchange="fill()" id="nama_kasi">
                        <option>--Nama--</option>
                        <?php foreach ($kasi as $k): ?>
                        <option> <?php echo $k->nama ?></option>
                        <?php endforeach ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>NIP</label>
                    <input type="text" required name="nip" id="nip" class="form-control" readonly placeholder="Data NIP muncul disini">
                </div>

                <div class="form-group">
                    <label>Jabatan</label>
                    <input type="text" required name="jabatan" id="jabatan" class="form-control" readonly placeholder="Jabatan Sekretaris muncul disini">
                </div>
                <input type="hidden" name="persetujuan" value="pending">
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                    
                          </form>
                          <script>
                              $(function() {
                              $('.select3').select2()
                              $('.select2').select2()
       
      
                            })

          
                
                                    function isi_sekolah() {
                                    var nama_sekolah = $("#sekolah").val();
                
                                  $.get("<?php echo base_url('Staf/sekolah'); ?>", { nama_sekolah: nama_sekolah }, function(respons) {
                                        var result = JSON.parse(respons);
                
                                        if (result) {
                                            $('#nama_sekolah').val(result.nama_sekolah);
                                            $('#alamat').val(result.alamat);
                                          
                                        } else {
                                            alert('Data Sekolah tidak ditemukaan');
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
          <form method="post" action="<?=site_url('Update')?>">
          
                 <label>No surat</label>
                <input type="text" placeholder="Masukan Nomor Surat Mutasi Sekolah asal" id="editNoSurat"  name="no_surat" class="form-control" >
                <input type="hidden" name="no" id="editNo">                

                <label>Tanggal Surat</label>
                <input type="date" id="tanggal_surat"  name="tgl_disahkan" class="form-control" placeholder="Nomor urut surat">

                <label>Nama Siswa </label>
                <input type="text"  placeholder="Masukan nama Siswa" id="nama_siswa" name="nama_siswa" class="form-control" >

                <div class="form-group">
                <label for="kelas">Kelas</label>
                <select name="kelas" id="kelas_baru" class="form-control">
                <option value="1 (Satu)">1 (Satu)</option>
                 <option value="2 (Dua)">2 (Dua)</option>
                 <option value="3 (Tiga)">3 (Tiga)</option>
                 <option value="4 (Empat)">4 (Empat)</option>
                <option value="5 (Lima)">5 (Lima)</option>
                <option value="6 (Enam)">6 (Enam)</option>
              </select>

                </div>

                <label>Tempat Tanggal Lahir</label>
                <input type="text" id="ttll" name="ttl" class="form-control" placeholder="Contoh: Bogor, 23 Agustus 2023" >

                <label>NIS/NISN</label>
                <input type="text" id="nisn_nis"  name="nisn_nis" class="form-control" placeholder="Contoh: 2344122334/12345679" >

                <label>Jenis Kelamin: </label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" >
                   
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                </select>

              
                <div class="form-group">
                    
                    <label>Nama Sekolah Asal</label>  
                    <select class="form-control select2" id="sekolah_baru" onchange="fill_sekolah()" style="height: 40px;" name="sekolah_asal">
                        <option>--Pilih--</option>
                        <?php foreach ($sekolah as $m) { ?>
                            <option><?php echo $m->nama_sekolah ?></option>
                        <?php } ?>
                    </select>
                    </div>

                <label>Alamat Sekolah</label>
                  <input type="text" class="form-control" id="alamat_baru" readonly  name="alamat_sekolah_asal">
                
                <label>Sekolah Tujuan:</label>
                <input type="text"  name="sekolah_tujuan" class="form-control" placeholder="Masukan nama Sekolah tujuan" id="tujuan_sekolah">

                <label>Kota/Kab:</label>
                <input type="text" placeholder="Kota Sekolah Tujuan muncul disini"  name="kota_kab" class="form-control" id="kotakab">

            
                <label>Provinsi </label>
                <select  name="provinsi" id="provinsi" class="form-control select2" >
                    <option>--Pilih--</option>
                    <?php foreach ($provinsi as $p) { ?>
                        <option><?php echo $p->nama_provinsi ?></option>
                    <?php } ?>
                </select>
                
                
                <label>Tanggal dibuat: </label>
                <input type="date" id="Tanggaldibuat" name="tanggal_dibuat" class="form-control" placeholder="Contoh: 23 Agustus 2023" >

                <div class="form-group">
                    <label>Nama Sekertaris</label>
                    <select class="form-control" name="sekertaris" onchange="fill_kasi()" id="nama_kasii">
                        <option>--Nama--</option>
                        <?php foreach ($kasi as $k): ?>
                        <option> <?php echo $k->nama ?></option>
                        <?php endforeach ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>NIP</label>
                    <input type="text"  name="nip" id="niip" class="form-control" readonly placeholder="Data NIP muncul disini">
                </div>

                <div class="form-group">
                    <label>Jabatan</label>
                    <input type="text"  name="jabatan" id="jabatann" class="form-control" readonly placeholder="Jabatan Sekretaris muncul disini">
                </div>
                
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                    
                          </form>

                          <script>
                          function fill_sekolah() {
                                    var nama_sekolah = $("#sekolah_baru").val();
                
                                  $.get("<?php echo base_url('Staf/sekolah_edit'); ?>", { nama_sekolah: nama_sekolah }, function(respons) {
                                        var result = JSON.parse(respons);
                
                                        if (result) {
                                            $('#nama_sekolah_baru').val(result.nama_sekolah);
                                            $('#alamat_baru').val(result.alamat);
                                          
                                        } else {
                                            alert('Data sekolah tidak adaaa');
                                        }
                                    });
                                }
</script>





      </div>
    </div> 

            

    </div>
    
</div> <!-- End Edit modal -->

<!-- Modal untuk menampilkan hasil scan -->
<div class="modal fade" id="addModal2" tabindex="-1" aria-labelledby="addModal2Label" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Hasil Ekstraksi Dokumen</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table class="table table-bordered">
          <tbody id="scan-result-body">
            <!-- Data akan diisi lewat AJAX -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function() {
    // Saat #addModal dibuka, ambil data via AJAX
    $('#addModal').on('show.bs.modal', function () {
        $.ajax({
            url: '<?= base_url("Staf/get_scan_data") ?>',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    let data = response.data;

                    // Jika ingin tampilkan data ke dalam form input:
                    $('input[name="no_surat"]').val(data.no_surat || '');
                    $('#tanggal_surat').val(convertTanggalToInputDate(data.tanggal_surat || ''));
                    $('input[name="nama_siswa"]').val(data.nama || '');
                    $('select[name="kelas"]').val(data.kelas || '').trigger('change');
                    $('input[name="ttl"]').val(data.ttl || '');
                    $('input[name="nisn_nis"]').val(data.nisn || '');
                    $('select[name="jenis_kelamin"]').val(data.jenis_kelamin || '').trigger('change');
                    $('select[name="sekolah_asal"]').val(data.sekolah_asal || '').trigger('change');
                    $('input[name="sekolah_tujuan"]').val(data.sekolah_tujuan || '');
                    $('input[name="kota_kab"]').val(data.kota_kab || '');
                    $('select[name="provinsi"]').val(data.provinsi || '').trigger('change');

                     // pastikan <tbody id="scan-result-body"> ada di modal
                } else {
                    $('#scan-result-body').html('<tr><td colspan="2" class="text-danger">Data tidak ditemukan.</td></tr>');
                    //alert('Gagal memuat data scan: ' + response.message);
                }
            },
            error: function(xhr, status, error) {
                console.error(error);
                $('#scan-result-body').html('<tr><td colspan="2" class="text-danger">Gagal memuat data scan.</td></tr>');
            }
        });
    });

    // Jika ada flashdata sukses, tampilkan modal otomatis
    <?php if ($this->session->flashdata('alert_success')): ?>
        $('#addModal').modal('show');
    <?php endif; ?>
});

function convertTanggalToInputDate(dateString) {
  if (!dateString) {
    return ''; // Handle empty or null input
  }

  const months = {
    'Januari': '01', 'Februari': '02', 'Maret': '03', 'April': '04',
    'Mei': '05', 'Juni': '06', 'Juli': '07', 'Agustus': '08',
    'September': '09', 'Oktober': '10', 'November': '11', 'Desember': '12'
  };

  const parts = dateString.split(' ');
  if (parts.length !== 3) {
    console.warn("Invalid date string format. Expected 'DD Month YYYY'. Got: " + dateString);
    return ''; // Or throw an error, depending on desired error handling
  }

  const day = parts[0];
  const monthName = parts[1];
  const year = parts[2];

  const monthNumber = months[monthName];
  if (!monthNumber) {
    console.warn("Unknown month name: " + monthName);
    return '';
  }

  return `${day}/${monthNumber}/${year}`;
}
</script>




       
                  <script>
                    

function fill() {
    var nama = $("#nama_kasi").val();
    
    $.get("<?php echo base_url('Staf/kepala'); ?>", { nama: nama }, function(respons) {
        console.log(respons); // Tambahkan log ini untuk memeriksa respons dari server
        var result = JSON.parse(respons);

        if (result) {
            $('#nip').val(result.nip);
            $('#jabatan').val(result.jab_text);
        } else {
            alert('Data tidak ditemukaan');
        }
    });
}
function fill_kasi() {
    var nama = $("#nama_kasii").val();
    
    $.get("<?php echo base_url('Staf/kepala'); ?>", { nama: nama }, function(respons) {
        console.log(respons); // Tambahkan log ini untuk memeriksa respons dari server
        var result = JSON.parse(respons);

        if (result) {
            $('#niip').val(result.nip);
            $('#jabatann').val(result.jab_text);
        } else {
            alert('Data tidak ditemukaan');
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






            
            
            
        
             
                <!-- /.card-body -->





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
  <script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>

  
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
<!-- End Status Modal -->
<script>
        <?php if ($this->session->flashdata('success')) : ?>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '<?php echo $this->session->flashdata('success'); ?>',
                showConfirmButton: false,
                timer: 2000
            });
        <?php endif; ?>

        <?php if ($this->session->flashdata('error')) : ?>
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: '<?php echo $this->session->flashdata('error'); ?>',
                showConfirmButton: true
            });
        <?php endif; ?>

        <?php if ($this->session->flashdata('info')) : ?>
            Swal.fire({
                icon: 'info',
                title: 'Info!',
                text: '<?php echo $this->session->flashdata('info'); ?>',
                showConfirmButton: false,
                timer: 2000
            });
        <?php endif; ?>
    </script>

<?php if ($this->session->flashdata('scan_result')): ?>
  <?php $data = $this->session->flashdata('scan_result'); ?>
  <script>
    $(document).ready(function () {
        $('#addModal').modal('show');
        $('#nama').val('<?= $data['nama']; ?>');
        $('#kelas').val('<?= $data['kelas']; ?>');
        $('#ttl').val('<?= $data['ttl']; ?>');
        $('#nisn').val('<?= $data['nisn']; ?>');
        $('#jenis_kelamin').val('<?= $data['jenis_kelamin']; ?>');
        $('#sekolah').val('<?= $data['sekolah_asal']; ?>');
        $('#sekolah_tujuan').val('<?= $data['sekolah_tujuan']; ?>');
        $('#kota_kab').val('<?= $data['kota_kab']; ?>');
        $('#provinsi').val('<?= $data['provinsi']; ?>');
        $('#tanggal_surat').val('<?= $data['tanggal_surat']; ?>');
        $('#no_surat').val('<?= $data['no_surat']; ?>');
    });
  </script>
<?php endif; ?>

<?php if ($this->session->flashdata('alert_success')): ?>
<script>
    alert("<?= $this->session->flashdata('alert_success') ?>");
</script>
<?php endif; ?>

<?php if ($this->session->flashdata('alert_error')): ?>
<script>
    alert("<?= $this->session->flashdata('alert_error') ?>");
</script>
<?php endif; ?>




<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9/crypto-js.min.js"></script>


  </body>
  </html>
