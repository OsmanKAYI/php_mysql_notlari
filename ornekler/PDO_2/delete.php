<?php

require_once('db.php');


$id    = $_GET['id'];

$sql = "DELETE FROM users WHERE id = :id";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':id', $id);

$stmt->execute();
echo "User deleted";
echo "<p><a href='list.php'>Listeye Dön</a></p>";