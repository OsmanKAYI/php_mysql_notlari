<?php
require_once '../db.php';

$CEVAP = array();
$CEVAP['isOk'] = 0; //Başarısız!!
$CEVAP['mesaj'] = "Hatalı çağrı";

if (isset($_POST['birimadi_form'])) {

  if ($_POST['birimadi_form'] != "" and $_POST['sorumlusu_form'] != "") {
    // Bigiler girilmiş. Kaydedelim...
    $sql = "INSERT INTO birimler (birimadi, sorumlusu) VALUES (:birimadi_form, :sorumlusu_form)";
    $SORGU = $DB->prepare($sql);
    $SORGU->bindParam(':birimadi_form',  $_POST['birimadi_form']);
    $SORGU->bindParam(':sorumlusu_form', $_POST['sorumlusu_form']);
    $SORGU->execute();
    $CEVAP['isOk'] = 1; // Başarılı
    $CEVAP['mesaj']  = "Birimlere kayıt eklendi";
  } else {
    // Veriler boş olamaz...
    $CEVAP['isOk'] = 0; //Başarısız!!
    $CEVAP['mesaj'] = "Tüm sahalar dolu olmalıdır";
  }
}

header('Content-Type: application/json; charset=utf-8');
echo json_encode($CEVAP, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
