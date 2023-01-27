# SQL Komutları

```SQL

-- Yorum satırı

/ *
	Bu aralıkta
	yorum satırları
	bulunur
* /

SET NAMES utf8;

SET sql_mode = '';

SET NAMES utf8mb4;

DROP DATABASE IF EXISTS test;

CREATE DATABASE test;

USE test;

DROP TABLE IF EXISTS users;

CREATE TABLE users (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(50) NOT NULL,
  mail varchar(50) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

TRUNCATE TABLE users;

INSERT INTO users (id, name, mail) VALUES
(1,	'nuri','nuri@gmail.com'),
(2,	'osman','osman@gmail.com'),
(3,	'kemal','kemal@gmail.com');

TRUNCATE TABLE users;

INSERT INTO users (name, mail) VALUES
('nuri','nuri@gmail.com'),
('osman','osman@gmail.com'),
('kemal','kemal@gmail.com');

INSERT INTO users 
SET 
	name='kadir', 
	mail='kadir@gmail.com';

SELECT * FROM users;

SELECT * FROM users WHERE name='kadir';

UPDATE users SET mail='kadir@hotmail.com' WHERE name='kadir';

UPDATE users SET mail='kadir@hotmail.com' WHERE id=4;

DELETE FROM users WHERE id=4;


```

## SQL Komutlarının PHP'de kullanımı
```PHP
$servername  = "localhost";
$username    = "root";
$password    = "root";
$dbname      = "test";

try  {
  $conn  =  new  PDO("mysql:host=$servername;dbname=$dbname",  $username,  $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
  $conn->exec("SET names utf8  "); // utf8mb4
  $conn->exec("SET sql_mode='' ");
  // echo "Connected successfully";
}  catch(PDOException  $e)  {
  echo  "Connection failed: "  .  $e->getMessage();
  die();
}

$stmt1  =  $conn->query('SELECT id, name FROM users');
$stmt2  =  $conn->query('SELECT id, name FROM users');
$stmt3  =  $conn->query('SELECT id, name FROM users');
$stmt4  =  $conn->query('SELECT id, name FROM users');

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
