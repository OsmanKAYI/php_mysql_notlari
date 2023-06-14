<?php

require_once('db.php');


$name  = "Nuri AKMAN";
$email = "nuri@gmail.com";
$id    = 4;

$sql = "UPDATE users SET name = :name, email = :email WHERE id = :id";
$KOMUT = $DB->prepare($sql);

$KOMUT->bindParam(':name', $name);
$KOMUT->bindParam(':email', $email);
$KOMUT->bindParam(':id', $id);

// die(date("H:i:s"));
$KOMUT->execute();
echo "User updated";
