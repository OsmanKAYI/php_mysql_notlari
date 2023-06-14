<?php
$servername = "localhost";
$DBname   = "ORNEKLER";
$username = "root";
$password = "root";

try {
  $DB = new PDO("mysql:host=$servername;dbname={$DBname}", $username, $password);
  // set the PDO error mode to exception
  $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>