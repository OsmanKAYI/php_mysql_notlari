<?php
require 'login.kontrol.php';
require 'yetki.kontrol.php';
require 'sayfa.ust.php';
?>

<div class='row text-center offset-3 col-6'>
  <h1 class='alert alert-primary'>Kayıt Ekleme Formu</h1>
</div>

<?php

if (isset($_POST['adsoyad_form'])) {
  
  require_once('db.php');
  
  $adsoyad  = $_POST['adsoyad_form'];
  $eposta = $_POST['eposta_form'];
  
  $sql = "INSERT INTO kullanicilar (adsoyad, eposta) VALUES (:adsoyad_form, :eposta_form)";
  $SORGU = $DB->prepare($sql);
  
  $SORGU->bindParam(':adsoyad_form',  $adsoyad);
  $SORGU->bindParam(':eposta_form', $eposta);

  $SORGU->execute();
  echo '
      <div class="alert text-center alert-success alert-dismissible fade show" role="alert">
        Kullanıcı eklendi...
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    ';
  }
  ?>
  <div class='container'>
    <div class="offset-3 col-6">
      
      <form method="POST">
        <div class="mb-3">
          <label for="adsoyad" class="form-label">Kullanıcı Adı</label>
          <input type="text" name='adsoyad_form' class="form-control" id="adsoyad" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="eposta" class="form-label">Eposta</label>
          <input type="email" name='eposta_form' class="form-control" id="eposta">
        </div>
          <button type="submit" class="btn btn-primary">Kaydet</button>
      </form>

      <div class="text-end">
        <a href='list.php' class='btn btn-warning'>Geri Dön</a>
      </div>
      
      <div class='text-center'>
        <a href='index.php' class='btn btn-warning'>ANASAYFAYA</a>
      </div>
      
    </div> 

<?php require 'sayfa.alt.php'; ?>