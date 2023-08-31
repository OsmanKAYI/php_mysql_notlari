<?php
require 'login.kontrol.php';
require 'sayfa.ust.php';
require_once('db.php');

$sql = "SELECT * FROM duyurular WHERE id = :id";
$SORGU = $DB->prepare($sql);
$SORGU->bindParam(':id',  $_GET['id']);
$SORGU->execute();
$DUYURU = $SORGU->fetchAll(PDO::FETCH_ASSOC);

echo "
<div class='row text-center'>
  <h3 class='alert alert-primary'>{$DUYURU[0]['baslik']}</h3>
</div>
";

echo nl2br($DUYURU[0]['duyuru']);
echo "<br><hr>";
echo "<i class='text-muted'>" . date("d.m.Y", strtotime($DUYURU[0]['baslamatarihi'])) . " Tarihinde yayınlanmıştır.</i>";

require 'sayfa.alt.php';
