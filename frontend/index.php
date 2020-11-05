<?php
// 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
include_once(__DIR__ . '/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css"> -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <!-- <script src="/vendor/bootstrap/js/jquery-3.5.1.slim.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.js"></script> -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossOrigin="anonymous" />
  <link rel="stylesheet" href="/quanlybanhangltw/frontend/css/Gird-Img2.css">
  <link rel="stylesheet" href="/quanlybanhangltw/frontend/css/text-gradient.css">
  <link rel="stylesheet" href="/quanlybanhangltw/frontend/css/button-gradient.css">
  <link rel="stylesheet" href="/quanlybanhangltw/frontend/css/floating-button.css">
  <link rel="stylesheet" href="/quanlybanhangltw/frontend/css/simple-tag.css">

<script src="/quanlybanhangltw/frontend/js/simple-tag.js" type="text/javascript"></script>
<style>
body{
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
}
</style>

</head>

<body>
  <?php include_once 'header.php'; ?>
  <br>
  <?php include_once 'home.php'; ?>
  <br>
  <?php include_once 'footer.php'; ?>

</body>

</html>