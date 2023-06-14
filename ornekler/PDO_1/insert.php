<?php

require_once('db.php');


$name  = "Nuri";
$email = "nuri@hotmail.com";

$sql = "INSERT INTO users (name, email) VALUES (:name, :email)";
$KOMUT = $DB->prepare($sql);

$KOMUT->bindParam(':name', $name);
$KOMUT->bindParam(':email', $email);

$KOMUT->execute();
echo "User created";
