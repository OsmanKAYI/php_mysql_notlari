# PDO için kopya kağıdıuriakman/

```PHP
// Veri çekmeyen sorgular:
$SQL = "DELETE FROM ref_urun_fiyat WHERE urun = 'Baza'";
$DB->query($SQL);

// Parametresiz, veri çeken sorgular:
$SQL = "SELECT * FROM ref_urun_fiyat";
$DATA = $DB->query($SQL)->fetchAll(PDO::FETCH_ASSOC);

// Parametreli, veri çeken sorgular:
$SQL = "SELECT * FROM ref_urun_fiyat WHERE id = :id";
$SORGU = $DB->prepare($SQL);
$SORGU->bindParam(':id',  $ID);
$SORGU->execute();
$rows = $SORGU->fetchAll(PDO::FETCH_ASSOC);

// Parametreli, veri çeken sorgular:
$SQL = "SELECT * FROM ref_urun_fiyat WHERE id = :id";
$rows = $DB->prepare($SQL)->execute([':id' => $ID])->fetchAll(PDO::FETCH_ASSOC);

// Insert sonrası yeni ID bilgisini alma:
$SORGU = $DB->prepare("INSERT INTO ref_urun_fiyat SET id = null");
$DB->query($SQL);
$YeniUrunId = $DB->lastInsertId(); // Son eklenen kaydın kayıt numarasını alalım

// Etkilenen kayıt sayısını alma:
$SQL = "UPDATE tablo_adi SET alan1 = :yeni_deger WHERE alan2 = :kosul";
$bindings = [':yeni_deger' => $yeniDeger, ':kosul' => $kosulDeger];
$query = $DB->prepare($SQL);
$query->execute($bindings);
$etkilenenSatirSayisi = $query->rowCount(); // Etkilenen kayıt sayısı

// Hızlı sorgu
function fetchFromDB($DB, $SQL, $bindings = []) {
      $query = $DB->prepare($SQL);
      $query->execute($bindings);
      return $query->fetchAll(PDO::FETCH_ASSOC);
  }
  $SQL = "SELECT * FROM ref_olculer WHERE id = :id";
  $bindings = [':id' => $ID];
  $rows = fetchFromDB($DB, $SQL, $bindings);
  
// Yapay Zekadan TOPLU CRUD ÖRNEĞİ:
// Yapay Zekadan TOPLU CRUD ÖRNEĞİ:
// Yapay Zekadan TOPLU CRUD ÖRNEĞİ:
try {
      $DB = new PDO('mysql:host=hostname;dbname=veritabani_adi', 'kullanici_adi', 'sifre');
      $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $DB->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  
      // CREATE - Yeni öğrenci ekle
      $ekleSQL = "INSERT INTO ogrenciler (ad, soyad, sinif) VALUES (:ad, :soyad, :sinif)";
      $ekleSorgu = $DB->prepare($ekleSQL);
      $ekleSorgu->execute([':ad' => 'Ahmet', ':soyad' => 'Yılmaz', ':sinif' => '11-A']);
      $eklenenKayitSayisi = $ekleSorgu->rowCount();
      $yeniOgrenciID = $DB->lastInsertId();
  
      echo "Eklendi: $eklenenKayitSayisi kayıt (Yeni ID: $yeniOgrenciID)<br>";
  
      // READ - Öğrenci bilgilerini getir
      $okuSQL = "SELECT * FROM ogrenciler WHERE sinif = :sinif";
      $okuSorgu = $DB->prepare($okuSQL);
      $okuSorgu->execute([':sinif' => '11-A']);
      $ogrenciler = $okuSorgu->fetchAll();
  
      foreach ($ogrenciler as $ogrenci) {
          echo $ogrenci['ad'] . ' ' . $ogrenci['soyad'] . ' (' . $ogrenci['sinif'] . ')<br>';
      }
  
      // UPDATE - Öğrenci bilgilerini güncelle
      $guncelleSQL = "UPDATE ogrenciler SET sinif = :yeni_sinif WHERE ad = :ad";
      $guncelleSorgu = $DB->prepare($guncelleSQL);
      $guncelleSorgu->execute([':yeni_sinif' => '12-B', ':ad' => 'Ahmet']);
      $guncellenenKayitSayisi = $guncelleSorgu->rowCount();
  
      echo "Güncellendi: $guncellenenKayitSayisi kayıt<br>";
  
      // DELETE - Öğrenciyi sil
      $silSQL = "DELETE FROM ogrenciler WHERE ad = :ad";
      $silSorgu = $DB->prepare($silSQL);
      $silSorgu->execute([':ad' => 'Ahmet']);
      $silinenKayitSayisi = $silSorgu->rowCount();
  
      echo "Silindi: $silinenKayitSayisi kayıt<br>";
  } catch (PDOException $e) {
      echo 'Hata: ' . $e->getMessage();
  }
  

// Yapay zekadan bir başka örnek:
// Yapay zekadan bir başka örnek:
// Yapay zekadan bir başka örnek:
try {
      $DB = new PDO('mysql:host=hostname;dbname=veritabani_adi', 'kullanici_adi', 'sifre');
      $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $DB->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  
      function executeQuery($DB, $sql, $params = []) {
          $query = $DB->prepare($sql);
          $query->execute($params);
          return $query;
      }
  
      // CREATE - Yeni öğrenci ekle
      $ekleSQL = "INSERT INTO ogrenciler (ad, soyad, sinif) VALUES (?, ?, ?)";
      executeQuery($DB, $ekleSQL, ['Ahmet', 'Yılmaz', '11-A']);
      $yeniOgrenciID = $DB->lastInsertId();
  
      // READ - Öğrenci bilgilerini getir
      $okuSQL = "SELECT * FROM ogrenciler WHERE sinif = ?";
      $ogrenciler = executeQuery($DB, $okuSQL, ['11-A'])->fetchAll();
  
      foreach ($ogrenciler as $ogrenci) {
          echo $ogrenci['ad'] . ' ' . $ogrenci['soyad'] . ' (' . $ogrenci['sinif'] . ')<br>';
      }
  
      // UPDATE - Öğrenci bilgilerini güncelle
      $guncelleSQL = "UPDATE ogrenciler SET sinif = ? WHERE ad = ?";
      executeQuery($DB, $guncelleSQL, ['12-B', 'Ahmet']);
  
      // DELETE - Öğrenciyi sil
      $silSQL = "DELETE FROM ogrenciler WHERE ad = ?";
      executeQuery($DB, $silSQL, ['Ahmet']);
  } catch (PDOException $e) {
      echo 'Hata: ' . $e->getMessage();
  }
  

```
