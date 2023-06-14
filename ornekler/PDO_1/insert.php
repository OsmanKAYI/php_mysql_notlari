<?php

require_once('db.php');


$name  = "Nuri";
$email = "nuri@hotmail.com";

$sql = "INSERT INTO users (name, email) VALUES (:name, :email)";
$SORGU = $DB->prepare($sql);

$SORGU->bindParam(':name', $name);
$SORGU->bindParam(':email', $email);

$SORGU->execute();
echo "User created";
