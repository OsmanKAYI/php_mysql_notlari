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

## index.php

```PHP
<h1>İlan Panosu</h1>

<p><a href='list.php'  > İlanları Listele   </a></p>
<p><a href='insert.php'> İlan Ekle </a></p>
```

## list.php

```PHP
<h1>İLANLAR</h1>

<?php

require_once('db.php');

$stmt = $conn->prepare("SELECT * FROM ilanlar");
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
//echo '<pre>'; print_r($rows);

foreach($rows as $row) {
    echo " <b style = 'color:red'> {$row['baslik']} </b>";
    echo "<a href='incele.php?id={$row['id']}'>İncele</a>"; 
    echo "<br>";
    echo nl2br($row['detay']);
    echo "<br>";
    echo "<hr>";
}

echo "<p><a href='index.php'>ANASAYFAYA DÖN</a></p>";
```

## insert.php

```PHP
<?php

if(isset($_POST['baslik'])){

    require_once('db.php');

    $baslik  = $_POST['baslik'];
    $tarih = $_POST['tarih'];
    $detay = $_POST['detay'];
    $telefon = $_POST['telefon'];

    $sql = "INSERT INTO ilanlar (baslik, tarih, detay, telefon) VALUES (:baslik, :tarih, :detay, :telefon)";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':baslik',  $baslik);
    $stmt->bindParam(':tarih', $tarih);
    $stmt->bindParam(':detay', $detay);
    $stmt->bindParam(':telefon', $telefon);

    $stmt->execute();
    echo "İlan eklendi";
}
?>

<h1>İlan Ekleme...</h1>

<form method='POST'>
    <table border='1' cellpadding='10' cellspacing='0' width='500'>
        <tr>
            <th nowrap>İlan Başlığı</th>
            <td><input type='text' name='baslik' ></td> 
        </tr>
        <tr>
            <th nowrap>İlan Tarihi</th>
            <td><input type='date' name='tarih' ></td> 
        </tr>
        <tr>
            <th>Detay</th>
            <td><textarea name="detay" style='width:400px; height:150px'></textarea></td> 
        </tr>
        <tr>
            <th>Telefon</th>
            <td><input type='text' name='telefon' ></td> 
        </tr>
        <tr>
            <td colspan='2'> <center> <input type='submit' value='KAYDET'> </center> </td>
        </tr>
    </table>
</form>

<p><a href='index.php'>ANASAYFAYA DÖN</a></p>
```

## delete.php

```PHP
<?php

require_once('db.php');

$id    = $_GET['id'];

$sql = "DELETE FROM ilanlar WHERE id = :id";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':id', $id);

$stmt->execute();
echo "İlan silindi";
echo "<p><a href='list.php'>Listeye Dön</a></p>";
```

## update.php

```PHP
<?php

    require_once('db.php');

    if(isset($_POST['baslik'])){
        ///////////////////////////////////////
        /////////////////////////////////////// GÜNCELLEME İŞLEMİ 
        ///////////////////////////////////////
        // echo "<pre>"; print_r($_POST);
        // echo "<pre>"; print_r($_GET);

        $baslik  = $_POST['baslik'];
        $tarih   = $_POST['tarih'];
        $detay   = $_POST['detay'];
        $telefon = $_POST['telefon'];
        $id      = $_GET['id'];

        $sql = "UPDATE ilanlar SET baslik = :baslik, tarih = :tarih, detay = :detay, telefon = :telefon WHERE id = :id";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':baslik',  $baslik);
        $stmt->bindParam(':tarih', $tarih);
        $stmt->bindParam(':detay', $detay);
        $stmt->bindParam(':telefon', $telefon);
        $stmt->bindParam(':id',    $id);

        // die(date("H:i:s"));
        $stmt->execute();
        echo "İlan güncellendi";
    }

    $id    = $_GET['id'];

    $sql = "SELECT * FROM ilanlar WHERE id = :id";
    $stmt = $conn->prepare($sql);
    
    $stmt->bindParam(':id', $id);
    
    $stmt->execute();

    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $row  = $rows[0];

    // echo "<pre>"; print_r($rows);
?>

<h1>İlan Güncelleme</h1>

<form method='POST'>
<table border='1' cellpadding='10' cellspacing='0' width='500'>
    <tr>
        <th nowrap>İlan Başlığı</th>
        <td><input type='text' name='baslik' value='<?php echo $row['baslik']; ?>' style='width:400px;'></td> 
    </tr>
    <tr>
        <th nowrap>İlan Tarihi</th>
        <td><input type='date' name='tarih'   value='<?php echo $row['tarih'];  ?>'</td> 
    </tr>
    <tr>
        <th>Detay</th>
        <td><textarea name="detay" style='width:400px; height:150px'><?php echo $row['detay']; ?></textarea>  
    </tr>
    <tr>
        <th>Telefon</th>
        <td><input type='text' name='telefon' value='<?php echo $row['telefon']; ?>'</td> 
    </tr>
    <tr>
        <td>
            Kayıt Durumu
        </td>
        <td>
            <select name="durum" id="durum" onchange="gostergizle()" style='width:100px'>
            <option value="1">Aktif</option>
            <option value="2">Silinsin</option>
            </select>
        </td>
    </tr>
    <tr>
        <td colspan='2'>
            <center><input type='submit' value='GÜNCELLE'></center>
        </td>
    </tr>   
</table>

</form>

<p id='sildugmesi' style='display:none'>
    <a href='delete.php?id=<?php echo $row['id']; ?>'>İlanı Sil</a>
</p>


<p><a href='list.php'  >Geri Dön </a></p>

<script>
    function gostergizle(){
        if(document.getElementById('durum').value=='1') {
            document.getElementById('sildugmesi').style.display='none'
        }
        if(document.getElementById('durum').value=='2') {
            document.getElementById('sildugmesi').style.display='block'
        }
    }
</script>
```

## incele.php

```PHP
<?php

    require_once('db.php');

    $id    = $_GET['id'];

    $sql = "SELECT * FROM ilanlar WHERE id = :id";
    $stmt = $conn->prepare($sql);
    
    $stmt->bindParam(':id', $id);
    
    $stmt->execute();

    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $row  = $rows[0];

    // echo "<pre>"; print_r($users);
?>

<h1 style='color:red'><?php echo $row['baslik']; ?></h1>

<table border='1' cellpadding='10' cellspacing='0' width='500'>
    <tr>
        <th>İlan No</th>
        <td><?php echo $row['id'];?></td> 
    </tr>
    <tr>
        <th nowrap>İlan Tarihi</th>
        <td><?php echo date("d.m.Y", strtotime( $row['tarih'])); ?></td> 
    </tr>
    <tr>
        <th>Detay</th>
        <td><?php echo nl2br($row['detay']);?></td> 
    </tr>
    <tr>
        <th>Telefon</th>
        <td><?php echo $row['telefon'];?></td> 
    </tr>
</table>

<p><a href='update.php?id=<?php echo $row['id'];?>'> İlan Düzenle </a></p>
<p><a href='list.php'>Geri Dön</a></p>
```

## harita.php

```PHP
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Harita Kullanımı</title>
  
  <!-- Önce leaflet.css, sonra leaflet.js olmalı -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>

  <style>
    #map {
      width: 600px;
      height: 400px;
    }
  </style>

</head>
<body>

  <div id='map'></div>

  <script>

    let KONUM_KOORDINATI = [39.938946, 32.865386];
    let ZOOM_SEVIYESI = 14;
    let KONUM_ADI = "Ankara Kalesi";

    HARITA_MERKEZI = KONUM_KOORDINATI;
    var map = L.map('map').setView(HARITA_MERKEZI, ZOOM_SEVIYESI);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker(KONUM_KOORDINATI)
      .addTo(map)
      .bindPopup(KONUM_ADI);

  </script>

</body>
</html>
```