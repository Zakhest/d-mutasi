<head><link rel="stylesheet" href="<?=base_url()?>assets/admin/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
    <!-- textr name=""ange picker -->
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/plugins/textrangepicker/textrangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
     <link rel="stylesheet" href="<?=base_url()?>assets/admin/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
</head>
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Data Mutasi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?=site_url('Mutasi/UpdateData')?>" role="form" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">No</label>
                    <input type="text" name="no"  class="form-control" id="exampleInputEmail1" value="<?php echo $detail['no']?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No Surat</label>
                    <input type="text" name="no_surat" value="<?php echo $detail['no_surat']?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Surat</label>
                    <input type="text" name="tgl_disahkan" value="<?php echo $detail['tgl_disahkan']?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Siswa</label>
                    <input type="text" name="nama_siswa" value="<?php echo $detail['nama_siswa']?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kelas</label>
                    <select name="kelas" class="form-control">
                      <option><?php echo $detail['kelas']?></option>
                      <option>1 (Satu)</option>
                      <option>2 (Dua)</option>
                      <option>3 (Tiga)</option>
                      <option>4 (Empat)</option>
                      <option>5 (Lima)</option>
                      <option>6 (Enam)</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tempat Tanggal Lahir</label>
                    <input type="text" name="ttl" value="<?php echo $detail['ttl']?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">NIS/NISN</label>
                    <input type="text" name="nisn_nis" value="<?php echo $detail['nisn_nis']?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control">
                      <option><?php echo $detail['jenis_kelamin']?></option>
                      <option>Laki-laki</option>
                      <option>Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Sekolah Asal</label>
                    <input type="text" name="sekolah_asal" value="<?php echo $detail['sekolah_asal']?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Alamat Sekolah asal</label>
                    <input type="text" name="alamat_sekolah_asal" value="<?php echo $detail['alamat_sekolah_asal']?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Sekolah Tujuan</label>
                    <input type="text" name="sekolah_tujuan" value="<?php echo $detail['sekolah_tujuan']?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kota/Kab</label>
                    <input type="text" name="kota_kab" value="<?php echo $detail['kota_kab']?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Provinsi</label>
                    <select name="provinsi" class="form-control select2bs4">
                      <option selected="selected"><?php echo $detail['provinsi']?></option>
                     <?php foreach($provinsi as $p ){ ?>
                    <option> <?php echo $p->nama_provinsi ?></option>
                                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Dibuat</label>
                    <input type="text" name="tanggal_dibuat" value="<?php echo $detail['tanggal_dibuat']?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                   <label>Nama Sekertaris</label>
                   <select class="form-control" name="sekertaris"  onchange="isi_otomatis()" id="nama">
                   
                     <option><?php echo $detail['sekertaris']?></option>
                     <option value="Hj. Rini Mulyani, M.Pd">Hj. Rini Mulyani, M.Pd</option>
                     <option value="Dony Aprianto, S.I.P">Dony Aprianto, S.I.P.</option>
                   </select>
                  </div>
                  <div class="form-group">
                    <label>NIP</label>
                    <input type="text" name="nip" id="nip" class="form-control" readonly>
                  </div>
                   <div class="form-group">
                    <label>Jabatan</label>
                    <input type="text" name="jabatan" id="jabatan" class="form-control" readonly>
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
                  <button type="submit" class="btn btn-default" data-dismiss="modal" onclick="kembali()">Kembali</button> 
                </div>
              </form>
            </div>
            
            <!-- /.card -->
            <!-- Horizontal Form -->
            <script type="text/javascript">
              function kembali(){
                window.close('<?=site_url('Mutasi/index')?>')
              }

                 var data = {

        "Hj. Rini Mulyani, M.Pd": {
            "nama": "Hj. Rini Mulyani, M.P",
            "nip": "197205012000032003",
            "jabatan": "Kasi Kurikulum"
        },
        "Dony Aprianto, S.I.P": {
            "nama": "Dony Aprianto, S.I.P.",
            "nip": "197804272006041008",
            "jabatan": "Kasi Kesiswaan"
        }
            };
            function isi_otomatis() {
        var selectedOption = $("#nama").val();
        var obj = data[selectedOption];
        
        if (obj) {
            $('#nip').val(obj.nip);
            $('#jabatan').val(obj.jabatan);
        }
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

              
              
            <!-- /.card -->

          </div>
            </


         










    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    

  <!-- jQuery -->
  <script src="<?=base_url()?>assets/admin/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
   <script src="<?=base_url()?>assets/admin/plugins/select2/js/select2.full.min.js"></script>
  <script src="<?=base_url()?>assets/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
           $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })


     })

    $.widget.bridge('uibutton', $.ui.button)
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
  <!-- textr name=""angepicker -->
  <script src="<?=base_url()?>assets/admin/plugins/moment/moment.min.js"></script>
  <script src="<?=base_url()?>assets/admin/plugins/textrangepicker/textrangepicker.js"></script>
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
  <script src="<?=base_url()?>assets/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="<?=base_url()?>assets/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>