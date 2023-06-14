<?php

require_once('db.php');


$id    = 4;

$sql = "DELETE FROM users WHERE id = :id";
$KOMUT = $DB->prepare($sql);

$KOMUT->bindParam(':id', $id);

$KOMUT->execute();
echo "User deleted";