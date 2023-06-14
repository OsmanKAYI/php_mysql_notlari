<?php

require_once('db.php');


$id    = $_GET['id'];

$sql = "DELETE FROM users WHERE id = :id";
$KOMUT = $DB->prepare($sql);

$KOMUT->bindParam(':id', $id);

$KOMUT->execute();
echo "User deleted";
echo "<p><a href='list.php'>Listeye Dön</a></p>";