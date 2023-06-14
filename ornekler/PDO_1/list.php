<?php

require_once('db.php');


$KOMUT = $DB->prepare("SELECT id, name, email FROM users");
$KOMUT->execute();
$users = $KOMUT->fetchAll(PDO::FETCH_ASSOC);
//echo '<pre>'; print_r($users);

foreach($users as $user) {
    echo " {$user['id']} : {$user['name']}, {$user['email']} <br>";
}

/* if you will work with thousands of rows, use the following to fetch

$KOMUT = $DB->prepare("SELECT * FROM bigTable");
$KOMUT->execute();
$KOMUT->setFetchMode(PDO::FETCH_ASSOC);

while($user = $KOMUT->fetch()) {
    echo " {$user['id']} : {$user['name']}, {$user['email']} <br>";
}
*/