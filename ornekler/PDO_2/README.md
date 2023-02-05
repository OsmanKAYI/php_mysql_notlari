# PHP ile MySQL Kullanımı

## PDO ile CRUD İşlemleri

### SQL KOMUTU İLE TABLONUN OLUŞTURULMASI

Aşağıdaki komutları adminer ile MySQL üzerinde çalıştırınız.

```SQL
DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`) VALUES
  (1,'Ahmet Yılmaz','ahmet@gmail.com'),
  (2,'Veysel Furkan','furkan@gmail.com');
```

## index.php

```PHP
<h1>PHP PDO ÖRNEĞİ</h1>

<p><a href='list.php'  > Kayıtları Listele   </a></p>
<p><a href='insert.php'> Yeni Kullanıcı Ekle </a></p>
```

## db.php

```PHP
<?php
$servername = "localhost";
$username   = "root";
$password   = "root";
$dbname     = "ORNEKLER";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  die();
}
```

## list.php

```PHP
<h1>KAYITLI KULLANICILAR</h1>

<?php

require_once('db.php');

$stmt = $conn->prepare("SELECT id, name, email FROM users");
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
//echo '<pre>'; print_r($users);

foreach($users as $user) {
    echo " {$user['id']} : {$user['name']}, {$user['email']} ";
    echo "<a href='update.php?id={$user['id']}'>Güncelle</a>";
    echo "<a href='delete.php?id={$user['id']}'>Sil</a>";
    echo "<br>";
}

echo "<p><a href='index.php'>ANASAYFAYA DÖN</a></p>";

```

## insert.php

```PHP
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
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':name',  $name);
    $stmt->bindParam(':email', $email);

    $stmt->execute();
    echo "User created";
}
```

## delete.php

```PHP
<?php

require_once('db.php');


$id    = $_GET['id'];

$sql = "DELETE FROM users WHERE id = :id";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':id', $id);

$stmt->execute();
echo "User deleted";
echo "<p><a href='list.php'>Listeye Dön</a></p>";
```

## update.php

```PHP
<?php

    require_once('db.php');

    if(isset($_POST['name'])){
        ///////////////////////////////////////
        /////////////////////////////////////// GÜNCELLEME İŞLEMİ 
        ///////////////////////////////////////
        // echo "<pre>"; print_r($_POST);
        // echo "<pre>"; print_r($_GET);

        $name  = $_POST['name'];
        $email = $_POST['email'];
        $id    = $_GET['id'];

        $sql = "UPDATE users SET name = :name, email = :email WHERE id = :id";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':name',  $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':id',    $id);

        // die(date("H:i:s"));
        $stmt->execute();
        echo "User updated";
    }

    $id    = $_GET['id'];

    $sql = "SELECT * FROM users WHERE id = :id";
    $stmt = $conn->prepare($sql);
    
    $stmt->bindParam(':id', $id);
    
    $stmt->execute();

    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $user  = $users[0];

    // echo "<pre>"; print_r($users);
?>

<h1>KAYIT GÜNCELLEME</h1>

<form method='POST'>
    <p>user name:  <input type='text' name='name'  value='<?php echo $user['name'];  ?>'></p>
    <p>user email: <input type='text' name='email' value='<?php echo $user['email']; ?>'></p>
    <p><input type='submit' value='GÜNCELLE'></p>
</form>

<p><a href='list.php'>Listeye Dön</a></p>
```
