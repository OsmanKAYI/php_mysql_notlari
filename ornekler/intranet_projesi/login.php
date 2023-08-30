<?php
@session_start();
if (isset($_SESSION['girisyapti'])) {
  // Oturum açmış
  header("location: index.php");
  die();
}


if (isset($_POST['eposta'])) {
  // Form gönderildi. Şimdi işimize bakalım
  // 1.DB'na bağlan
  // 2.SQL hazırla ve çalıştır
  // 3.Gelen sonuç 1 satırsa GİRİŞ BAŞARILI değilse, BAŞARISIZ
  require_once('db.php');

  $sql = "SELECT * FROM users WHERE email = :eposta AND parola = :parola";
  $SORGU = $DB->prepare($sql);

  $SORGU->bindParam(':eposta', $_POST['eposta']);
  $SORGU->bindParam(':parola', $_POST['sifre']);

  $SORGU->execute();

  $CEVAP = $SORGU->fetchAll(PDO::FETCH_ASSOC);
  //var_dump($CEVAP);
  // echo "Gelen cevap " .  count($CEVAP) . " adet satırdan oluşuyor";
  if (count($CEVAP) == 1) {
    //echo "<h1>GİRİŞ BAŞARILI!</h1>";
    @session_start();
    $_SESSION['girisyapti'] = 1;
    $_SESSION['adi'] = $CEVAP[0]['name']; // Kullanıcının adını alalım
    $_SESSION['id'] = $CEVAP[0]['id']; // Kullanıcının ID'sini alalım
    $_SESSION['rol'] = $CEVAP[0]['rol']; // Kullanıcının ROL'ünü alalım
    header("location: index.php");
    die();
  } else {
    echo "<h1>HATALI EPOSTA veya PAROLA!</h1>";
    //header("location: hata.php");
    //die();
  }
}
?>
<h1>GİRİŞ EKRANI</h1>

<form method='POST'>
  <p>eposta: <input type='text' name='eposta'></p>
  <p>sifre: <input type='password' name='sifre'></p>
  <p><input type='submit' value='Giriş Yap'></p>
</form>