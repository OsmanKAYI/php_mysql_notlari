<?php
require_once('db.php');
$SORGU = $DB->prepare("SELECT * FROM sehirler");
$SORGU->execute();
$rows = $SORGU->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";print_r($rows);echo "</pre>";

header('Content-Type: application/json; charset=utf-8');
echo json_encode($rows, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
