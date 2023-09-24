<?php
$Hobiler = ["Kitap", "Sinema", "Yürüyüş", "Kedi"];

$cevap = array();
$cevap['ad'] = "Osman";
$cevap['soyad'] = "KAYI";
$cevap['hobiler'] = $Hobiler;

header('Content-Type: application/json; charset=utf-8');
echo json_encode($cevap, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
