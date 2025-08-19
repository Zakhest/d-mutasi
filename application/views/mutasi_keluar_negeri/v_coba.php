<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"> 
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

 <table id="example" class="table table-bordered table-striped" >
                    <thead>
                      <tr>
                        <td colspan="10" ><button class="btn btn-primary" data-toggle="modal" data-target="#modal-form">Tambah data</button>
                             <button class="btn btn-success">Ekspor ke Excel</button>
                      </td>
                       <!--
                        <td colspan="6">
                        <div class="col-sm-3">
                            <label>Urut berdasarkan</label>
                        <select id="sort" class="form-control">
                           <option value="nomor">Nomor</option>
                         <option value="nama">Nama</option>
                            <option value="terbaru">Terbaru</option>
                         </select>
                       </div>
                       
                     </td>
-->
                      </tr>
                    <tr>
                      <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Nomor Urut</th>
                      <th>No Surat</th>
                      <th>Tanggal Dibuat</th>
                      <th style="white-space: nowrap;">Nama Siswa</th>
               
                      
                      <th>Jenis Kelamin</th>
                      <th>Asal Sekolah</th>
                      <th>Tindakan</th>
                      
                      
                    </tr>
                    </thead>
                 
                    <tbody id="myTable">
                    
                   <?php
                       if(!empty($mutasi_ln)){
                       foreach ($mutasi_ln as $m) {
                      
                      ?>     
                      <tr>
                      <td><?php echo $m->no ?></td>
                      <td><?php echo $m->no_surat ?></td>
                      <td style="white-space: nowrap;"><?php echo $m->tanggal_dibuat ?></td>
                      <td><?php echo $m->nama_siswa ?></td>
                     
                      <td><?php echo $m->jenis_kelamin ?></td>
                      <td><?php echo $m->asal_sekolah ?></td>
                     <td style="white-space:nowrap;">
                      
                     <button class="btn btn-success" 
    onclick="openEditModal(
        <?php echo $m->no ?>,
        '<?php echo $m->no_surat ?>',
        '<?php echo $m->tanggal_surat ?>',
        '<?php echo $m->nama_siswa ?>',
        '<?php echo $m->kelas ?>',
        '<?php echo $m->jenis_kelamin ?>',
        '<?php echo $m->nama_wali ?>',
        '<?php echo $m->asal_sekolah ?>',
        '<?php echo $m->alamat_sekolah ?>',
        '<?php echo $m->tujuan ?>',
        '<?php echo $m->tanggal_dibuat ?>',
        '<?php echo $m->tanggal_hijriah ?>'
    )">
    Edit
</button>
<button class="btn btn-info" onclick="printdata(<?php echo $m->no ?>)">Print</button>
                       </td>
                    </tr>

               
        <script>

                
  function printdata(no) {
        var url = "<?php echo site_url('staf/cetak_luar/') ?>" + no + "/cetak";
        window.open(url, "_blank", height="700", width="500", scrollbars="yes");
    }

function openEditModal(
    no, no_surat, tanggal_surat, nama_siswa, kelas, jenis_kelamin, 
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
    $('#editMasehi').val(tanggal_dibuat);
    $('#editHijriah').val(tanggal_hijriah);
}

</script>
                    
                   
                              
<?php }} ?>
                    
                  </tbody>
                  
                   </table>
                   

        <script>
    

  $(document).ready(function(){
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    });

  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
   

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
                <input type="text" placeholder="Masukan Nomor Surat Mutasi Sekolah asal" required name="tanggal_surat" class="form-control"  >
                  
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
                  <input type="date" required name="tanggal_dibuat" class="form-control" placeholder="Masukan tujuan"  id="tanggalMasehi" >
                 <div class="form-group">
                  <label>Tanggal Hijriah:</label>
                  <input type="text" required name="tanggal_hijriah" class="form-control" placeholder="Masukan tujuan" id="hasilHijriah" >
                 
                  </div>
                 
             
                  

                  <script>

$(function () {
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    });
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
                <input type="text" placeholder="Masukan Nomor Surat Mutasi Sekolah asal" required name="tanggal_surat" class="form-control" id="tanggal_surat" >
                  
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
       
                  
                  <label>Alamat Sekolah Asal lama:</label>
                  <input type="text" required readonly id="alamat_sekolah" class="form-control" placeholder="Alamat Sekolah asal muncul disini" >
                  <label>Alamat Sekolah Asal baru:</label>
                  <input type="text" required name="alamat_sekolah" id="alamat_baru" class="form-control" placeholder="Alamat Sekolah asal muncul disini" >
                  <label>Tujuan:</label>
                  <input type="text" required name="tujuan" class="form-control" placeholder="Masukan tujuan" id="tujuan" >

                  <label>Tanggal Dibuat:</label>
                  <input type="date" required name="tanggal_dibuat" class="form-control" placeholder="Masukan tujuan"  id="editMasehi" >
                 <div class="form-group">
                  <label>Tanggal Hijriah:</label>
                  <input type="text" required name="tanggal_hijriah" class="form-control" placeholder="Masukan tujuan" id="editHijriah" >
                 
             
                  

                  <script>

                    


                     


    function fill_sekolah() {
    var nama_sekolah = $("#nama_sekolah_baru").val();

  $.get("<?php echo base_url('Mutasi/sekolah'); ?>", { nama_sekolah: nama_sekolah }, function(data) {
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

