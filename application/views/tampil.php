<!DOCTYPE html>
<html>
<head>
    <title>Konversi Tanggal Gregorian ke Hijriah</title>

  <link rel="stylesheet" href="<?=base_url()?>assets/admin/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=base_url()?>assets/admin/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?=base_url()?>assets/admin/plugins/summernote/summernote-bs4.min.css">
    <style type="text/css">
        body{
            background-color: white;
        }
    </style>

</head>
<body>
    <h1>Konversi Tanggal Gregorian ke Hijriah</h1>
    <form method="post" action="<?php echo site_url('Konversi'); ?>">
        <label for="gregorianDate">Tanggal Gregorian (YYYY-MM-DD):</label>
        <input type="date" class="form-control" name="gregorianDate" id="gregorianDate">
        <button type="submit" class="btn btn-success">Konversi</button>
    </form>

    <?php if (!empty($hijriDate)) { ?>
        <p>Tanggal Hijriah: <?php echo $hijriDate; ?></p>
    <?php } ?>
</body>
</html>