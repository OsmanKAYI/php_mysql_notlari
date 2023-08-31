<?php
require 'login.kontrol.php';
require 'yetki.kontrol.php';
?>
<h1>KAYIT EKLEME FORMU</h1>

<form method='POST'>
  <p>Kullanıcı Adı: <input type='text' name='adsoyad_form'></p>
  <p>Eposta: <input type='text' name='eposta_form'></p>
  <p><input type='submit' value='EKLE'></p>
</form>

<p><a href='index.php'>ANASAYFAYA DÖN</a></p>

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
  echo "Kullanıcı oluşturuldu...";
}
