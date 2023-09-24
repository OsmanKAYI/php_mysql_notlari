<?php
require_once('../db.php');

switch ($_GET['tablo']) {
  case 'birimler':
    $sql = "SELECT * FROM birimler";
    break;
  case 'kullanicilar':
    $sql = "SELECT * FROM kullanicilar";
    break;

  default:
    die("Hatalı çağrı");
    break;
}

$SORGU = $DB->prepare($sql);
$SORGU->execute();
$rows = $SORGU->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";print_r($rows);echo "</pre>";

header('Content-Type: application/json; charset=utf-8');
echo json_encode($rows, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
