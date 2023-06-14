<?php

require_once('db.php');

$id    = $_GET['id'];

$sql = "DELETE FROM ilanlar WHERE id = :id";
$SORGU = $DB->prepare($sql);

$SORGU->bindParam(':id', $id);

$SORGU->execute();
echo "İlan silindi";
echo "<p><a href='liste.php'>Listeye Dön</a></p>";