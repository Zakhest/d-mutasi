
<div class="col-lg-4 col-19">
<div class="small-box bg-info">
              <div class="inner" id="count-container">
                <h3> <center>Jumlah Mutasi Keluar</center></h3>  

                <h3 > <center><i id="count-value"></i> data</center> </h3>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?=site_url('Mutasi/index') ?>" class="small-box-footer">Cek <i class="fas fa-arrow-circle-right"></i></a>
    </div> 
  </div>

  <div class="col-lg-4 col-6">
<div class="small-box bg-info">
              <div class="inner" id="count-container">
                <h3> <center>Jumlahh Mutasi Masuk</center></h3>  

                <h3 > <center><i id="count-value-2"></i> data</center> </h3>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?=site_url('Mutasi/mutasi_masuk') ?>" class="small-box-footer">Cek <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>

    <div class="col-lg-4 col-6">
<div class="small-box bg-info">
              <div class="inner" id="count-container">
                <h3> <center>Mutasi Keluar Negeri</center></h3>  

                <h3 > <center><i id="count-value-3"></i> data</center> </h3>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?=site_url('Mutasi/mutasi_ln') ?>" class="small-box-footer">Cek <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>

</div>
<?php foreach($user as $u) { ?>
<marquee direction="left" scrollamount="23"><div style="color:white;"><h1>Selamat Datang, <?php echo $u->username?></h1></div></marquee>
<?php  } ?>
<style>
    marquee{
        background-color:#00b8ff;
        font-family:Times New Roman;
        font-size:25px;
    }

    h1{
      font-family:Arial, sans-serif;
    }
</style>

<script type="text/javascript">
  const countValueElement1 = document.getElementById('count-value');
  const countValueElement2 = document.getElementById('count-value-2');
  const countValueElement3 = document.getElementById('count-value-3');
  // Nilai awal dan akhir untuk animasi
  const initialValue = -1;
  const targetValue1 = <?php echo $jumlah; ?>; // Ganti dengan nilai COUNT yang sesuai
  const targetValue2 = <?php echo $m; ?>; // Ganti dengan nilai COUNT yang sesuai
  const targetValue3 = <?php echo $l ?>;

  // Waktu total animasi dalam milidetik
  const animationDuration = 800;

  // Hitung langkah per milidetik untuk mencapai target
  const steps1 = targetValue1 - initialValue;
  const stepDuration1 = animationDuration / steps1;

  const steps2 = targetValue2 - initialValue;
  const stepDuration2 = animationDuration / steps2;

  const steps3 = targetValue3 - initialValue;
  const stepDuration3 = animationDuration / steps3;
  
  let currentValue1 = initialValue;
  let currentValue2 = initialValue;
  let currentValue3 = initialValue;

  // Fungsi untuk memulai animasi
  function startAnimation1() {
    const animationInterval = setInterval(() => {
      if (currentValue1 >= targetValue1) {
        clearInterval(animationInterval);
      } else {
        currentValue1++;
        countValueElement1.innerText = currentValue1;
      }
    }, stepDuration1);
  }

  function startAnimation2() {
    const animationInterval = setInterval(() => {
      if (currentValue2 >= targetValue2) {
        clearInterval(animationInterval);
      } else {
        currentValue2++;
        countValueElement2.innerText = currentValue2;
      }
    }, stepDuration2);
  }

function startAnimation3() {
    const animationInterval = setInterval(() => {
      if (currentValue3 >= targetValue3) {
        clearInterval(animationInterval);
      } else {
        currentValue3++;
        countValueElement3.innerText = currentValue3;
      }
    }, stepDuration3);
  }
  // Memulai animasi saat halaman dimuat
  window.addEventListener('load', () => {
    startAnimation1();
    startAnimation2();
    startAnimation3();
  })

  
$(function () {
  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Data 1', 'Data 2', 'Data 3'],
      datasets: [{
        label: '# of Mutations',
        data: [<?= $data['jk'] ?>, <?= $data['m'] ?>, <?= $data['l'] ?>],
        backgroundColor: 'rgba(54, 162, 235, 0.2)',
        borderColor: 'rgba(54, 162, 235, 1)',
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
});



</script>