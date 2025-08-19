<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
       $(document).ready(function() {
     $("#ConvertMasehi").click(function() {
        // Event yang akan dijalankan ketika tag dengan id ConvertMasehi di click
        var tglMasehi = $("#tglMasehi").val(); //Mendapatkan tanggal dari tag ber-id tglMasehi
        var blnMasehi = $("#blnMasehi").val(); //Mendapatkan bulan dari tag ber-id blnMasehi
        var thnMasehi = $("#thnMasehi").val(); //Mendapatkan tahun dari tag ber-id thnMasehi
 
        $.ajax({
           url: "<?=base_url('Konversi/') ?>", //url untuk eksekusi
           type: "POST", //method
           data: "tglMasehi="+tglMasehi+"&blnMasehi="+blnMasehi+"&thnMasehi="+thnMasehi, //data yang akan dikirim
           dataType: "json", //data type yang diterima JSON
           success: function(data) {
            $("#tanggalKonversi").val(data.tanggal + " " + data.bulan + " " + data.tahun);

           }
        });
     });
  });
    <title>Konversi Masehi ke Hijriah</title>
</head>
<body>
    <h1>Konversi Masehi ke Hijriah</h1>
    
    Tanggal <input type="text" id="tglMasehi" size="1" name=""/>
    
    Bulan
    <select id="blnMasehi" name="blnMasehi">
        <option value="1">Januari</option>
        <!-- Opsi bulan lainnya -->
    </select>
    Tahun <input type="text" id="thnMasehi" name="thnMasehi">
    <input type="button" value="Convert to Hijri" id="ConvertMasehi">
    <br/><br/>

    Hasilnya:
    <input type="text" id="tanggalKonversi" value="" disabled/>
</body>
</html>
