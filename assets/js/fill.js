function isi_sekolah_otomatis() {
    var nama_sekolah = $("#nama_sekolah").val();

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