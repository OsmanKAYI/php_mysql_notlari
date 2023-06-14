<?php

require_once('db.php');

$id    = $_GET['id'];

$sql = "DELETE FROM ilanlar WHERE id = :id";
$KOMUT = $DB->prepare($sql);

$KOMUT->bindParam(':id', $id);

$KOMUT->execute();
echo "İlan silindi";
echo "<p><a href='liste.php'>Listeye Dön</a></p>";