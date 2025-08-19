
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading...</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="loading-dots">
  <div class="loading-dot"></div>
  <div class="loading-dot"></div>
  <div class="loading-dot"></div>
</div>
<style>
    @keyframes loading {
  0%, 80%, 100% {
    transform: translateY(0);
  }
  40% {
    transform: translateY(-10px);
  }
}

body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
  background-color: #f0f0f0; /* Atur latar belakang sesuai kebutuhan Anda */
}

.loading-dots {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: row;
  margin-top: 50px;
}

.loading-dot {
  display: inline-block;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background-color: #FF5733; /* Ganti dengan warna yang diinginkan */
  margin: 0 5px;
  animation: loading 1.5s infinite ease-in-out;
}

.loading-dot:nth-child(2) {
  background-color: #33FF57; /* Ganti dengan warna yang berbeda */
  animation-delay: 0.5s;
}

.loading-dot:nth-child(3) {
  background-color: #5733FF; /* Ganti dengan warna yang berbeda lagi */
  animation-delay: 1s;
}

</style>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
    const redLight = document.querySelector(".red");
    const yellowLight = document.querySelector(".yellow");
    const greenLight = document.querySelector(".green");

    function changeLights() {
        setTimeout(function () {
            // Merah menyala, kuning dan hijau mati
            redLight.style.background = "#ff0000";
            yellowLight.style.background = "#000000";
            greenLight.style.background = "#000000";

            setTimeout(function () {
                // Kuning menyala, merah dan hijau mati
                redLight.style.background = "#000000";
                yellowLight.style.background = "#ffff00";
                greenLight.style.background = "#000000";

                setTimeout(function () {
                    // Hijau menyala, merah dan kuning mati
                    redLight.style.background = "#000000";
                    yellowLight.style.background = "#000000";
                    greenLight.style.background = "#00ff00";

                    // Panggil ulang fungsi untuk mengulanginya
                    setTimeout(changeLights, 1000);
                }, 1000); // Kuning menyala selama 1 detik
            }, 3000); // Merah menyala selama 1 detik
        }, 2500); // Hijau menyala selama 2 detik (sesuai waktu biasa lampu hijau di lampu lalu lintas)
    }

    // Panggil fungsi untuk memulai simulasi
    changeLights();
});

    
    
           
        

    
    
        setTimeout(function () {
            window.location.href = "<?=site_url('wali/dashboard') ?>";
        }, 7000); // Ganti 3000 dengan waktu loading yang diinginkan (dalam milidetik)
    </script>
</body>
</html>
