<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>D-Mutasi | Masuk </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/admin/dist/css/adminlte.min.css">
  <link rel="icon" type="image/png" href="<?=base_url()?>assets/img/kota.png"/>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>D-</b>Mutasi</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Masuk untuk akses</p>

      <form action="<?=base_url('login/auth')?>" method="post" role="form">
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
        <div class="input-group mb-3">
          
        </div>
        <div class="row">
          <div class="col-8">
          <?php if(!empty($this->session->flashdata('error'))){ ?>
                 <div class="alert alert-danger">
                   <button type="button" class="close" data-dismiss="alert">&times;</button>
                   <?php echo $this->session->flashdata('error'); ?>
                 </div>
               <?php } ?>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" >Masuk</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

     
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="Register/index">Belum Punya akun? Klik Disini untuk Daftar!</a>
      </p>
     
    </div>
  

            

          <!-- /.modal-dialog -->
        </div>
    <!-- /.login-card-body -->
  </div>

  <style>
    body {
    background-image: url('assets/img/bg-dis.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
    }

    .login-logo{
      background-color: white;
      border-radius: 10px;
    }
    .login-card-body{
      border-radius: 10px;
    }
  </style>
<!-- /.login-box -->

<!-- jQuery -->
<script src="assets/admin/plugins/jquery/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    $('#show-password').on('click', function() {
      var passwordField = $('#password');
      var passwordFieldType = passwordField.attr('type');
      if (passwordFieldType === 'password') {
        passwordField.attr('type', 'text');
      } else {
        passwordField.attr('type', 'password');
      }
    });
  });
  document.addEventListener('DOMContentLoaded', function() {
            var showPassword = document.getElementById('show-password');
            showPassword.addEventListener('click', function() {
                if (showPassword.classList.contains('fa-eye-slash')) {
                    showPassword.classList.remove('fa-eye-slash');
                    showPassword.classList.add('fa-eye');
                } else {
                    showPassword.classList.remove('fa-eye');
                    showPassword.classList.add('fa-eye-slash');
                }
            });
        });
 
</script>
<!-- Bootstrap 4 -->
<script src="assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/admin/dist/js/adminlte.min.js"></script>
</body>
</html>
