# PHP ile MySQL Kullanımı

## PDO ile CRUD İşlemleri

### SQL KOMUTU İLE TABLONUN OLUŞTURULMASI

Aşağıdaki komutları adminer ile MySQL üzerinde çalıştırınız.

```SQL

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = '';

DROP TABLE IF EXISTS `ilanlar`;
CREATE TABLE `ilanlar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(50) DEFAULT NULL,
  `tarih` date DEFAULT NULL,
  `detay` varchar(100) DEFAULT NULL,
  `telefon` varchar(50) DEFAULT NULL,
  `konum` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

INSERT INTO `ilanlar` (`id`, `baslik`, `tarih`, `detay`, `telefon`, `konum`) VALUES
(2,	'Sahibinden Satılık 3+1 Ev',	'2011-11-11',	'Temiz',	'05444444444',	'41.039230,28.994659'),
(3,	'Yazılımcıdan Temiz Toyota Corolla',	'2023-02-11',	'Masrafsız',	'05555555555',	'39.909917, 32.848418');

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