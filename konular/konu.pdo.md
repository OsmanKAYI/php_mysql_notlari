# PHP ile MySQL Kullanımı

## CRUD İşlemleri

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

### VERİTABANI BAĞLANTISI - Database Connection

```PHP
$servername = "localhost";
$username   = "root";
$password   = "root";
$dbname     = "ORNEKLER";

try {
  $DB = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  die();
}
```

### KAYIT LİSTELEME - SELECT/READ

```PHP
$KOMUT = $DB->prepare("SELECT id, name, email FROM users");
$KOMUT->execute();
$users = $KOMUT->fetchAll(PDO::FETCH_ASSOC);
//echo '<pre>'; print_r($users);

foreach($users as $user) {
    echo " {$user['id']} : {$user['name']}, {$user['email']} <br>";
}
```

### KAYIT EKLEME - CREATE/INSERT

```PHP
$name  = "Nuri";
$email = "nuri@hotmail.com";

$sql = "INSERT INTO users (name, email) VALUES (:name, :email)";
$KOMUT = $DB->prepare($sql);

$KOMUT->bindParam(':name', $name);
$KOMUT->bindParam(':email', $email);

$KOMUT->execute();
echo "User created";
```

### KAYIT GÜNCELLEME - UPDATE

```PHP
$name  = "Nuri Akman";
$email = "nuri@gmail.com";
$id    = 4;

$sql = "UPDATE users SET name = :name, email = :email WHERE id = :id";
$KOMUT = $DB->prepare($sql);

$KOMUT->bindParam(':name', $name);
$KOMUT->bindParam(':email', $email);
$KOMUT->bindParam(':id', $id);

$KOMUT->execute();
echo "User updated";
```

### KAYIT SİLME - DELETE

```PHP
$id    = 4;

$sql = "DELETE FROM users WHERE id = :id";
$KOMUT = $DB->prepare($sql);

$KOMUT->bindParam(':id', $id);

$KOMUT->execute();
echo "User deleted";
```

# İlave Bilgiler

### PDO fetchAll Komutu Kullanım Şekilleri

```PHP
$servername  = "localhost";
$username    = "root";
$password    = "root";
$dbname      = "ORNEKLER";

try  {
  $DB  =  new  PDO("mysql:host=$servername;dbname=$dbname",  $username,  $password);
  $DB->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
  $DB->exec("SET names utf8  "); // utf8mb4
  $DB->exec("SET sql_mode='' ");
  // echo "Connected successfully";
}  catch(PDOException  $e)  {
  echo  "Connection failed: "  .  $e->getMessage();
  die();
}

$stmt1  =  $DB->query('SELECT id, name FROM users');
$stmt2  =  $DB->query('SELECT id, name FROM users');
$stmt3  =  $DB->query('SELECT id, name FROM users');
$stmt4  =  $DB->query('SELECT id, name FROM users');

$cevap1 = $stmt1->fetchAll(PDO::FETCH_KEY_PAIR);
$cevap2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
$cevap3 = $stmt3->fetchAll();
$cevap4 = $stmt4->fetchAll(PDO::FETCH_COLUMN, 1); // İlk kolon 0'dan başlar

print_r($cevap1);
print_r($cevap2);
print_r($cevap3);
print_r($cevap4);

```

### Bu komutların ekran çıktısı:

```
Array
(
  [1] => nuri
  [2] => osman
  [3] => kemal
)


Array
(
  [0] => Array
      (
          [id] => 1
          [name] => nuri
      )


  [1] => Array
      (
          [id] => 2
          [name] => osman
      )

  [2] => Array
      (
          [id] => 3
          [name] => kemal
      )

  )


Array
(
    [0] => Array
        (
            [id] => 1
            [0] => 1
            [name] => nuri
            [1] => nuri
        )

    [1] => Array
        (
            [id] => 2
            [0] => 2
            [name] => osman
            [1] => osman
        )

    [2] => Array
        (
            [id] => 3
            [0] => 3
            [name] => kemal
            [1] => kemal
        )

)


Array
(
  [0] => nuri
  [1] => osman
  [2] => kemal
)

```
