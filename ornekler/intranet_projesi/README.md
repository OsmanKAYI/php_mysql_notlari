# İntranet Projesi

### SQL KOMUTU İLE TABLONUN OLUŞTURULMASI

Aşağıdaki komutları adminer ile MySQL üzerinde çalıştırınız.

```SQL
-- Adminer 4.8.1 MySQL 5.5.5-10.6.12-MariaDB-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `kullanicilar`;
CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adsoyad` varchar(50) NOT NULL,
  `eposta` varchar(100) NOT NULL,
  `parola` varchar(100) NOT NULL,
  `rol` int(11) NOT NULL DEFAULT 1,
  `unvan` varchar(50) NOT NULL,
  `birim` varchar(100) NOT NULL,
  `telefon` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

INSERT INTO `kullanicilar` (`id`, `adsoyad`, `eposta`, `parola`, `rol`, `unvan`, `birim`, `telefon`) VALUES
(1,	'Ahmet Yılmaz',	'ahmet@gmail.com',	'1234',	2,	'Şube Müdürü',	'Yönetim',	'4455'),
(2,	'Veysel Furkan',	'furkan@gmail.com',	'777',	1,	'Memur',	'Satın Alma',	'1123');

DROP TABLE IF EXISTS `yemekmenusu`;
CREATE TABLE `yemekmenusu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gun1` text NOT NULL,
  `gun2` text NOT NULL,
  `gun3` text NOT NULL,
  `gun4` text NOT NULL,
  `gun5` text NOT NULL,
  `gun6` text NOT NULL,
  `gun7` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

INSERT INTO `yemekmenusu` (`id`, `gun1`, `gun2`, `gun3`, `gun4`, `gun5`, `gun6`, `gun7`) VALUES
(1,	'Çorba\r\nPilav\r\nFasulye\r\nTatlı',	'Ezogelin Çorba\r\nTürlü',	'Mecimek\r\nmakarna',	'Yoğurt\r\nMantı',	'Barbunya',	'Salata Bar',	'Et sote\r\n');

-- 2023-08-30 16:34:31

```
