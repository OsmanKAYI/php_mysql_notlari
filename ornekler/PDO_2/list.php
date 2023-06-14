<h1>KAYITLI KULLANICILAR</h1>

<?php

require_once('db.php');

$SORGU = $DB->prepare("SELECT id, name, email FROM users");
$SORGU->execute();
$users = $SORGU->fetchAll(PDO::FETCH_ASSOC);
//echo '<pre>'; print_r($users);

foreach($users as $user) {
    echo " {$user['id']} : {$user['name']}, {$user['email']} ";
    echo "<a href='update.php?id={$user['id']}'>Güncelle</a>";
    echo "<a href='delete.php?id={$user['id']}'>Sil</a>";
    echo "<br>";
}

echo "<p><a href='index.php'>ANASAYFAYA DÖN</a></p>";
