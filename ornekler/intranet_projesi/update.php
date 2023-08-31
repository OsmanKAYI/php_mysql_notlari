<?php
require 'login.kontrol.php';
require 'yetki.kontrol.php';

require_once('db.php');

if (isset($_POST['adsoyad_form'])) {
  ///////////////////////////////////////
  /////////////////////////////////////// GÜNCELLEME İŞLEMİ
  ///////////////////////////////////////
  // echo "<pre>"; print_r($_POST);
  // echo "<pre>"; print_r($_GET);

  $adsoyad  = $_POST['adsoyad_form'];
  $eposta = $_POST['eposta_form'];
  $id    = $_GET['id'];

  $sql = "UPDATE kullanicilar SET adsoyad = :adsoyad_form, eposta = :eposta_form WHERE id = :id";
  $SORGU = $DB->prepare($sql);

  $SORGU->bindParam(':adsoyad_form',  $adsoyad);
  $SORGU->bindParam(':eposta_form', $eposta);
  $SORGU->bindParam(':id',    $id);

  // die(date("H:i:s"));
  $SORGU->execute();
  echo "Kullanıcı güncellendi...";
}

$id    = $_GET['id'];

$sql = "SELECT * FROM kullanicilar WHERE id = :id";
$SORGU = $DB->prepare($sql);

$SORGU->bindParam(':id', $id);

$SORGU->execute();

$kullanicilar = $SORGU->fetchAll(PDO::FETCH_ASSOC);
$kullanici  = $kullanicilar[0];

// echo "<pre>"; print_r($kullanicilar);
?>

<h1>KAYIT GÜNCELLEME</h1>

<form method='POST'>
  <p>Kullanıcı Adı: <input type='text' name='adsoyad_form' value='<?php echo $kullanici['adsoyad'];  ?>'></p>
  <p>Eposta: <input type='text' name='eposta_form' value='<?php echo $kullanici['eposta']; ?>'></p>
  <p><input type='submit' value='GÜNCELLE'></p>
</form>

<p><a href='list.php'>Listeye Dön</a></p>