<?php
require 'login.kontrol.php';
require 'yetki.kontrol.php';

if ($_SESSION['id'] == $_GET['id']) {
  echo "<h1>Kendinizi silemezsiniz!</h1>";
  die();
}

require_once('db.php');

$id    = $_GET['id'];

$sql = "DELETE FROM users WHERE id = :id";
$SORGU = $DB->prepare($sql);

$SORGU->bindParam(':id', $id);

$SORGU->execute();
echo "User deleted";
echo "<p><a href='list.php'>Listeye Dön</a></p>";
