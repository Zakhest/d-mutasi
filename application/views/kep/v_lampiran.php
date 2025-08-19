<!DOCTYPE html>
<!-- Created by pdf2htmlEX (https://github.com/coolwanglu/pdf2htmlex) -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8"/>

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<link rel="stylesheet" href="<?=base_url()?>assets/lampiran/base.min.css"/>
<link rel="stylesheet" href="<?=base_url()?>assets/lampiran/fancy.min.css"/>
<link rel="stylesheet" href="<?=base_url()?>assets/lampiran/main.css"/>
<script src="<?=base_url()?>assets/lampiran/compatibility.min.js"></script>
<script src="<?=base_url()?>assets/lampiran/theViewer.min.js"></script>
<script>
try{
theViewer.defaultViewer = new theViewer.Viewer({});
}catch(e){}
</script>
<title>Print Lampiran</title>
</head>
<body style="font-family: Arial, sans-serif;">
<div id="sidebar">
<div id="outline">
</div>
</div>
<div id="page-container">
<div id="pf1" class="pf w0 h0" data-page-no="1"><div class="pc pc1 w0 h0"><div class="c x1 y1 w2 h2"><div class="t m0 x2 h3 y2 ff1 fs0 fc0 sc0 ls0 ws0">Lampiran Surat</div></div><div class="c x1 y3 w3 h4"><div class="t m0 x2 h3 y2 ff2 fs0 fc0 sc0 ls0 ws0">Nomor</div></div><div class="c x3 y3 w4 h4"><div class="t m0 x2 h3 y2 ff2 fs0 fc0 sc0 ls0 ws0">:</div></div><div class="c x4 y3 w5 h4"><div class="t m0 x2 h3 y2 ff fs0 fc0 sc0 ls0 ws0"><?php echo $surat->no_surat?></div></div><div class="c x1 y4 w3 h4"><div class="t m0 x2 h3 y2 ff2 fs0 fc0 sc0 ls0 ws0">Tanggal</div></div><div class="c x3 y4 w4 h4"><div class="t m0 x2 h3 y2 ff2 fs0 fc0 sc0 ls0 ws0">:</div></div><div class="c x4 y4 w5 h4"><div class="t m0 x2 h3 y2 ff2 fs0 fc0 sc0 ls0 ws0"><span class="convert-date"><?php echo $surat->tanggal_hari_ini?></span></div></div><div class="c x1 y5 w3 h4"><div class="t m0 x2 h3 y2 ff2 fs0 fc0 sc0 ls0 ws0">Perihal</div></div><div class="c x3 y5 w4 h4"><div class="t m0 x2 h3 y2 ff2 fs0 fc0 sc0 ls0 ws0">:</div></div><div class="c x4 y5 w5 h4"><div class="t m0 x2 h3 y2 ff2 fs0 fc0 sc0 ls0 ws0">Persetujuan Mutasi Siswa</div></div><div class="t m0 x5 h3 y6 ff fs0 fc0 sc0 ls0 ws0">Daftar Siswa Pindahan Yang Mendapat Izin Masuk di Kepala <?php echo $surat->kepala_sd?> </div><div class="t m0 x6 h3 y7 ff2 fs0 fc0 sc0 ls0 ws0"></div>

<br>
<div class=tab>
<table class="c y85 coba ty" cellpadding="1" cellspacing="1" >
<thead>

	  <th class="dua">NO</th>
      <th class="dua">NAMA SISWA </th>
      <th  class="dua">TEMPAT TANGGAL LAHIR</th>
     <th class="dua" colspan="2"> MASUK DI KLS / TAHUN</th>
     <th  class="dua">ASAL SEKOLAH</th>
      <th  class="dua">NISN</th>
</thead>
<?php $no=1; foreach ($siswa as $s) {?>
<tbody>

	<td class="dua" align="center" >
		<?php echo $no++; ?>
	</td >
	<td class="dua" >
        <?php echo $s->nama_siswa; ?>
    </td >
	<td class="dua" >
        <?php echo $s->ttl ?>
    </td >
	<td class="dua" >
        <?php echo $s->masuk_kelas ?>
    </td >
	<td class="dua" >
        <?php echo $s->tahun ?>
    </td >
	<td class="dua" >
        <?php echo $s->asal_sekolah ?>
    </td >
	<td class="dua" >
        <?php echo $s->nisn ?>
    </td >


</tbody>
<?php } ?>
	
</table>
</div>



<div class="c x7 y8 w6 h5"><div class="t m0 x8 h3 y9 ff2 fs0 fc0 sc0 ls0 ws0">A.n.</div></div><div class="c x9 y8 w7 h5"><div class="t m0 x2 h3 y9 ff2 fs0 fc0 sc0 ls0 ws0">Kepala,</div><div class="t m0 x2 h3 y2 ff2 fs0 fc0 sc0 ls0 ws0">Sekretaris,</div></div><div class="c x7 ya w6 h6"><div class="t m0 xa h3 yb ff2 fs0 fc0 sc0 ls0 ws0">u.b. </div></div><div class="c x9 ya w7 h6"><div class="t m0 x2 h3 yb ff2 fs0 fc0 sc0 ls0 ws0">Kabid SD</div><div class="qr"><img src="<?= $qr_code ?>" height="80" width="80" border="0"></div><div class="t m0 x2 h3 yc po fs0 fc0 sc0 ls0 ws0"><b><?php foreach ($kabid as $k) {
   echo $k;
}?></b></div><div class="t m0 x2 h3 y9 ff2 fs0 fc0 sc0 ls0 ws0">Pembina / IV-a</div><div class="t m0 x2 h3 yd ff2 fs0 fc0 sc0 ls0 ws0">NIP <span><?php foreach ($nip as $n) {
    echo $n;
 }?></span></div></div> 



<div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div></div>


</div>

<button class="next" onclick="kembali(<?php echo $surat->no_urut?>)">Halaman Sebelumnya</button>


<div class="loading-indicator">



</div>

<script>
    function kembali(no_urut) {
    var url = "<?php echo site_url('kep/mutasi_masuk/printSurat/') ?>" + no_urut;
    window.location.href = url;
}
</script>


<style type="text/css">
	.next{
	 position: fixed;
  bottom: 10px; /* Jarak dari bawah layar */
  left: 50%;
  transform: translateX(-50%);
  padding: 10px 20px;
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
	}

    .qr{
        padding-top: 10px;
        
    }

    table{
        padding-top:900px;
    }
      

    
    .coba {
   border-collapse: collapse;
    border-top: #000000 1px solid ;
}

.dua{

    border-bottom: #000000 1px solid;
    border-right: #000000 1px solid;
    border-left: #000000 1px solid;

}

.po{
    line-height: 0.925293;
    font-style: normal;
    font-weight: normal;
    visibility: visible;
}


    .y85{
        bottom: 490px;
        font-family: arial narrow;
        font-size: 12px;
        left: 40px;
       
        
     }


     .print{
        display: none;
     }

     

	@media print{
		.next{
			display: none;
		}

		
        .y85{
            bottom: 900px;
            left: 130px;
            font-family: arial narrow;
            font-size: 19px;
        }

        img{
            width: 120px;
            height: 110px;
        }

        .qr{
        padding-top: 40px;
        padding-left: 4px;
        
    }

        

	} /* ---Media print -- */



</style>
<script>
    window.print();
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

  // Fungsi untuk mengonversi semua tanggal dalam div setelah halaman dimuat
  window.onload = function() {
    const dateDivs = document.querySelectorAll('.convert-date'); // Ambil semua elemen div yang perlu dikonversi

    dateDivs.forEach(div => {
      const dateText = div.innerText.trim(); // Ambil teks dalam div
      if (dateText) {
        div.innerText = convertToIndonesianDate(dateText); // Ubah teks div dengan format baru
      }
    });
  };
</script>
</body>
</html>
