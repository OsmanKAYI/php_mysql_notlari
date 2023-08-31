<?php
@session_start(); // Oturumu aç
@session_destroy(); // Oturumu sonlandır
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>

<h1>Oturum sonlandı.</h1>

<div class='text-center'>
  <a href='login.php' class='btn btn-warning'>Yeniden Giriş Yap</a>
</div>

<?php require 'sayfa.alt.php'; ?>