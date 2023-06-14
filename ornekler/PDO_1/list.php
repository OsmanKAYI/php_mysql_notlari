<?php

require_once('db.php');


$SORGU = $DB->prepare("SELECT id, name, email FROM users");
$SORGU->execute();
$users = $SORGU->fetchAll(PDO::FETCH_ASSOC);
//echo '<pre>'; print_r($users);

foreach($users as $user) {
    echo " {$user['id']} : {$user['name']}, {$user['email']} <br>";
}

/* if you will work with thousands of rows, use the following to fetch

$SORGU = $DB->prepare("SELECT * FROM bigTable");
$SORGU->execute();
$SORGU->setFetchMode(PDO::FETCH_ASSOC);

while($user = $SORGU->fetch()) {
    echo " {$user['id']} : {$user['name']}, {$user['email']} <br>";
}
*/