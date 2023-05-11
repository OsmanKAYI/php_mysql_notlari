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

<p><a href='list.php'> Kayıtları Listele </a></p>
<p><a href='insert.php'> Yeni Kullanıcı Ekle </a></p>
<p><a href='delete.php'> Kullanıcı Sil </a></p>
<p><a href='update.php'> Kullanıcı Güncelle </a></p>
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

## list.php (for limited rows)

```PHP
<?php

require_once('db.php');

$stmt = $conn->prepare("SELECT id, name, email FROM users");
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
//echo '<pre>'; print_r($users);

foreach($users as $user) {
    echo " {$user['id']} : {$user['name']}, {$user['email']} <br>";
}
```

## list.php (for too many rows)

```PHP
<?php

require_once('db.php');

$stmt = $conn->prepare("SELECT * FROM bigTable");
$stmt->execute();
$stmt->setFetchMode(PDO::FETCH_ASSOC);

while($user = $stmt->fetch()) {
    echo " {$user['id']} : {$user['name']}, {$user['email']} <br>";
}
```

## insert.php

```PHP
<?php

require_once('db.php');


$name  = "Nuri";
$email = "nuri@hotmail.com";

$sql = "INSERT INTO users (name, email) VALUES (:name, :email)";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);

$stmt->execute();
echo "User created";

```

## delete.php

```PHP
<?php

require_once('db.php');


$id    = 4;

$sql = "DELETE FROM users WHERE id = :id";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':id', $id);

$stmt->execute();
echo "User deleted";
```

## update.php

```PHP
<?php

require_once('db.php');


$name  = "Nuri AKMAN";
$email = "nuri@gmail.com";
$id    = 4;

$sql = "UPDATE users SET name = :name, email = :email WHERE id = :id";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':id', $id);

// die(date("H:i:s"));
$stmt->execute();
echo "User updated";

```
