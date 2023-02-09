<?php

require_once('db.php');

$id    = $_GET['id'];

$sql = "DELETE FROM ilanlar WHERE id = :id";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':id', $id);

$stmt->execute();
echo "İlan silindi";
echo "<p><a href='liste.php'>Listeye Dön</a></p>";