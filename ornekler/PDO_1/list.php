<?php

require_once('db.php');


$stmt = $conn->prepare("SELECT id, name, email FROM users");
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
//echo '<pre>'; print_r($users);

foreach($users as $user) {
    echo " {$user['id']} : {$user['name']}, {$user['email']} <br>";
}

/* if you will work with thousands of rows, use the following to fetch

$stmt = $conn->prepare("SELECT * FROM bigTable");
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);

while($user = $stmt->fetch()) {
    echo " {$user['id']} : {$user['name']}, {$user['email']} <br>";
}
*/