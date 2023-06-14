<?php

require_once('db.php');


$id    = 4;

$sql = "DELETE FROM users WHERE id = :id";
$stmt = $DB->prepare($sql);

$stmt->bindParam(':id', $id);

$stmt->execute();
echo "User deleted";