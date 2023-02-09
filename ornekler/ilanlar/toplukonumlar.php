<?php

require_once('db.php');

$stmt = $conn->prepare("SELECT id, baslik, konum FROM ilanlar WHERE konum <> '' ");
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
// echo '<pre>'; print_r($rows);

$arrKonumlar = array();

foreach($rows as $row) {
    $id     = $row['id'];
    $baslik = $row['baslik'];
    $konum  = $row['konum'];
    $baslik = "<a href='incele.php?id={$id}'>{$baslik}</a>";

    $arrKonumlar[] = "[\"{$baslik}\", {$konum}]";
    // $arrKonumlar[] = '["' . $row['baslik'] . ', ' . $row['konum'] . ']';
   
}

// echo implode(",\n", $arrKonumlar);



