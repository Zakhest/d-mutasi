<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>D-Mutasi | Register</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/dist/css/adminlte.min.css">
  <link rel="icon" type="image/png" href="<?= base_url() ?>assets/img/kota.png"/>
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/plugins/sweetalert2/sweetalert2.min.css">
  <script src="<?= base_url() ?>assets/admin/plugins/sweetalert2/sweetalert2.all.min.js"></script>
  
  <script>
    // Disable right click
    document.addEventListener('contextmenu', function(e) {
      e.preventDefault();
      alert("Maaf, fitur ini dinonaktifkan!");
    });

    // Disable keyboard shortcuts and F12
    document.addEventListener('keydown', function(e) {
      if (
        e.keyCode === 123 || 
        (e.ctrlKey && e.shiftKey && e.keyCode === 73) ||
        (e.ctrlKey && e.shiftKey && e.keyCode === 74) ||
        (e.ctrlKey && e.keyCode === 85)
      ) {
        e.preventDefault();
        alert("Maaf, fitur inspect element dinonaktifkan!");
        return false;
      }
    });

    // Disable developer tools
    setInterval(function() {
      if (window.devtools && window.devtools.isOpen) {
        alert("Mohon tutup developer tools untuk melanjutkan!");
      }
    }, 100);
  </script>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>D-</b>Mutasi</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Daftar Akun baru</p>

      <form action="<?= base_url('register/add') ?>" method="post" role="form">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Nama Walimurid" name="nama_wali" required>
          <input type="hidden" name="level" value="wali">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-pen"></span>
            </div>
          </div>
        </div>  

        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="No telepon" name="no_telp" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
      
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-eye-slash" id="show-password"></span>
            </div>
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
          </div>
        </div>
      </form>

      <p class="mb-1">
        <a href="<?= base_url() ?>Login">Sudah Punya akun? Klik Disini untuk Masuk!</a>
      </p>
    </div>
  </div>

  <style>
    body {
      background-image: url('<?= base_url() ?>/assets/img/bg-dis.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;
    }

    .login-logo {
      background-color: white;
      border-radius: 10px;
    }

    .login-card-body {
      border-radius: 10px;
    }
  </style>
</div>

<!-- jQuery -->
<script src="<?= base_url() ?>assets/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/admin/dist/js/adminlte.min.js"></script>
<script>
  $(document).ready(function() {
    // Password toggle functionality
    $('#show-password').on('click', function() {
      var passwordField = $('#password');
      var passwordFieldType = passwordField.attr('type');
      if (passwordFieldType === 'password') {
        passwordField.attr('type', 'text');
        $(this).removeClass('fa-eye-slash').addClass('fa-eye');
      } else {
        passwordField.attr('type', 'password');
        $(this).removeClass('fa-eye').addClass('fa-eye-slash');
      }
    });

    // SweetAlert for flashdata messages
    <?php if ($this->session->flashdata('error')): ?>
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '<?= $this->session->flashdata('error') ?>',
        confirmButtonText: 'OK'
      });
    <?php elseif ($this->session->flashdata('success')): ?>
      Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: '<?= $this->session->flashdata('success') ?>',
        confirmButtonText: 'OK'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = '<?= base_url() ?>Login';
        }
      });
    <?php endif; ?>
  });
</script>
</body>
</html>