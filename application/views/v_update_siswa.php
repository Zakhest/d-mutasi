<?php $this->load->view($menu) ?>

 <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Edit Siswa</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?=base_url()?>assets/admin/#">Dashboard</a></li>
                <li class="breadcrumb-item active">Data Mutasi Masuk</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

 
      <!-- Content Header (Page header) -->
     <div class="card">
     

     <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data Mutasi Masuk</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?=base_url("Mutasi/UpdateDataSiswa") ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">No</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $detail['no']?>" name="no" readonly >
                     <input type="hidden" class="form-control" id="exampleInputEmail1" value="<?php echo $detail['no_urut']?>" name="no_urut" readonly >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">NISN</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $detail['nisn']?>" name="nisn" readonly >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Siswa </label>
                    <input type="text"  class="form-control" id="exampleInputPassword1" placeholder="No Surat Kosong" value="<?php echo $detail['nama_siswa']?>" name="nama_siswa">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Tempat Tanggal Lahir </label>
                    <input type="text"  class="form-control" id="exampleInputPassword1" placeholder="No Surat Kosong" value="<?php echo $detail['ttl']?>" name="ttl">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Masuk Kelas</label>
                     <select name="masuk_kelas" required class="form-control" >
                      <option><?php echo $detail['masuk_kelas']?></option>
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
                    <input type="text"   class="form-control" placeholder="Nama Siswa Kosong" id="alamat" value="<?php echo $detail['tahun']?>" name="tahun">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Asal Sekolah</label>
                    <input type="text"   class="form-control" id="exampleInputPassword1" placeholder="Kelas Kosong" value="<?php echo $detail['asal_sekolah']?>" name="asal_sekolah">
                  </div>

                  
                    <button type="submit" class="btn btn-primary">Simpan</button>

                 </div>
             </form>
         </div>
         
    </div>

 </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>


             <?php $this->load->view($footer)?>