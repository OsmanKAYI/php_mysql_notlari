<h1>KAYIT EKLEME FORMU</h1>

<form method='POST'>
    <p>user name:  <input type='text' name='name' ></p>
    <p>user email: <input type='text' name='email'></p>
    <p><input type='submit' value='EKLE'></p>
</form>

<p><a href='index.php'>ANASAYFAYA DÖN</a></p>

<?php

if(isset($_POST['name'])){

    require_once('db.php');

    $name  = $_POST['name'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (name, email) VALUES (:name, :email)";
    $KOMUT = $DB->prepare($sql);

    $KOMUT->bindParam(':name',  $name);
    $KOMUT->bindParam(':email', $email);

    $KOMUT->execute();
    echo "User created";
}