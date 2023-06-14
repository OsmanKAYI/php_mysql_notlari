<?php

require_once('db.php');


$name  = "Nuri AKMAN";
$email = "nuri@gmail.com";
$id    = 4;

$sql = "UPDATE users SET name = :name, email = :email WHERE id = :id";
$SORGU = $DB->prepare($sql);

$SORGU->bindParam(':name', $name);
$SORGU->bindParam(':email', $email);
$SORGU->bindParam(':id', $id);

// die(date("H:i:s"));
$SORGU->execute();
echo "User updated";
