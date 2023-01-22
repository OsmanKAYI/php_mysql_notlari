<?php

// VERİTABANI BAĞLANTISI - Database Connection
// VERİTABANI BAĞLANTISI - Database Connection
// VERİTABANI BAĞLANTISI - Database Connection
$servername = "localhost";
$username = "root";
$password = "rootroot";

try {
  $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

// KAYIT EKLEME - CREATE/INSERT
// KAYIT EKLEME - CREATE/INSERT
// KAYIT EKLEME - CREATE/INSERT
$name  = "Nuri";
$email = "nuri@gmail.com";

$sql = "INSERT INTO users (name, email) VALUES (:name, :email)";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);

$stmt->execute();
echo "User created";


// KAYIT LİSTELEME - SELECT/READ
// KAYIT LİSTELEME - SELECT/READ
// KAYIT LİSTELEME - SELECT/READ
$stmt = $conn->prepare("SELECT id, name, email FROM users");
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
//echo '<pre>'; print_r($users);

foreach($users as $user) {
    echo $user['id'] ;
    echo $user['name'] ;
    echo $user['email'] ;
}


// KAYIT GÜNCELLEME - UPDATE
// KAYIT GÜNCELLEME - UPDATE
// KAYIT GÜNCELLEME - UPDATE
$name  = "Nuri Akman";
$email = "nuriakman@gmail.com";
$id    = 1;

$sql = "UPDATE users SET name = :name, email = :email WHERE id = :id";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);

$stmt->execute();
echo "User updated";



// KAYIT SİLME - DELETE
// KAYIT SİLME - DELETE
// KAYIT SİLME - DELETE
$id    = 1;

$sql = "DELETE FROM users WHERE id = :id";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':id', $id);

$stmt->execute();
echo "User deleted";

