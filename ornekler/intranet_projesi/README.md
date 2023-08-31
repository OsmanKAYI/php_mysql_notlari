# İntranet Projesi

### SQL KOMUTU İLE TABLONUN OLUŞTURULMASI

Aşağıdaki komutları adminer ile MySQL üzerinde çalıştırınız.

```SQL
-- Adminer 4.8.1 MySQL 5.5.5-10.6.12-MariaDB-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `birimler`;
CREATE TABLE `birimler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `birimadi` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

INSERT INTO `birimler` (`id`, `birimadi`) VALUES
(1,	'Teknik Servis'),
(2,	'Satınalma'),
(3,	'Muhasebe'),
(4,	'İnsan Kaynakları'),
(5,	'Depo');

DROP TABLE IF EXISTS `duyurular`;
CREATE TABLE `duyurular` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(200) NOT NULL,
  `duyuru` text NOT NULL,
  `baslamatarihi` date NOT NULL,
  `bitistarihi` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

INSERT INTO `duyurular` (`id`, `baslik`, `duyuru`, `baslamatarihi`, `bitistarihi`) VALUES
(1,	'Hafta sonu sayımı',	'Hafta sonu sayım yapılacak. Herkes gelmeli. Hafta sonu sayım yapılacak. Herkes gelmeli. Hafta sonu sayım yapılacak. Herkes gelmeli. Hafta sonu sayım yapılacak. Herkes gelmeli. Hafta sonu sayım yapılacak. Herkes gelmeli. Hafta sonu sayım yapılacak. Herkes gelmeli. \r\n\r\nHafta sonu sayım yapılacak. Herkes gelmeli. Hafta sonu sayım yapılacak. Herkes gelmeli. Hafta sonu sayım yapılacak. Herkes gelmeli. Hafta sonu sayım yapılacak. Herkes gelmeli. Hafta sonu sayım yapılacak. Herkes gelmeli. Hafta sonu sayım yapılacak. Herkes gelmeli. \r\n\r\nHafta sonu sayım yapılacak. Herkes gelmeli. Hafta sonu sayım yapılacak. Herkes gelmeli. Hafta sonu sayım yapılacak. Herkes gelmeli. Hafta sonu sayım yapılacak. Herkes gelmeli. Hafta sonu sayım yapılacak. Herkes gelmeli. Hafta sonu sayım yapılacak. Herkes gelmeli. \r\n\r\nHafta sonu sayım yapılacak. Herkes gelmeli. Hafta sonu sayım yapılacak. Herkes gelmeli. Hafta sonu sayım yapılacak. Herkes gelmeli. Hafta sonu sayım yapılacak. Herkes gelmeli. Hafta sonu sayım yapılacak. Herkes gelmeli. Hafta sonu sayım yapılacak. Herkes gelmeli. \r\n\r\nTeşekkürler',	'2023-08-28',	'2023-09-01'),
(2,	'Salata bar hizmete girdi',	'Çalışanlarımızın kendi salatalarını alabileceği bar yemekhanemizde hizmete girmiştir.\r\n\r\nTabaklarınızı tezgahta alabilirsiniz.',	'2023-08-15',	'2023-09-15');

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
(2,	'Veysel Furkan',	'furkan@gmail.com',	'777',	1,	'Memur',	'Satın Alma',	'1123'),
(5,	'bbbbb',	'bbbb@gmail.com',	'',	1,	'',	'',	'5555');

DROP TABLE IF EXISTS `talepler`;
CREATE TABLE `talepler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `talep` text NOT NULL,
  `taleptarihi` datetime NOT NULL,
  `talepeden` int(11) NOT NULL DEFAULT 0,
  `oncelik` int(11) NOT NULL DEFAULT 0,
  `hedefbirim` int(11) NOT NULL DEFAULT 0,
  `islemnotu` varchar(200) NOT NULL,
  `durum` int(11) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

INSERT INTO `talepler` (`id`, `talep`, `taleptarihi`, `talepeden`, `oncelik`, `hedefbirim`, `islemnotu`, `durum`) VALUES
(1,	'Klima çalışmıyor\r\nOda çok sıcak olduğu için test malzemeleri bozuluyor\r\nÖnemli ve acildir',	'2023-08-31 15:40:36',	2,	0,	1,	'',	0),
(11,	'1 top A4 kağıt lazım',	'2023-08-31 18:41:55',	1,	1,	5,	'5 top verildi',	2),
(12,	'Sandalye tekerim kırıldı',	'2023-08-31 18:42:29',	1,	2,	1,	'',	2);

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
(1,	'Çorba\r\nPilav\r\nFasulye\r\nTatlı',	'Ezogelin Çorba\r\nTürlü',	'Mecimek\r\nmakarna',	'Yoğurt\r\nMantı',	'Barbunya\r\nÇorba',	'Salata Bar\r\nİskender',	'Et sote\r\n');

-- 2023-08-31 16:45:38

```
