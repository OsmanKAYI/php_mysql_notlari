<?php
@session_start();
if (isset($_SESSION['girisyapti'])) {
  // Oturum açmış
  header("location: index.php");
  die();
}


if (isset($_POST['eposta_form'])) {
  // Form gönderildi. Şimdi işimize bakalım
  // 1.DB'na bağlan
  // 2.SQL hazırla ve çalıştır
  // 3.Gelen sonuç 1 satırsa GİRİŞ BAŞARILI değilse, BAŞARISIZ
  require_once('db.php');

  $sql = "SELECT * FROM kullanicilar WHERE eposta = :eposta_form AND parola = :parola_form";
  $SORGU = $DB->prepare($sql);

  $SORGU->bindParam(':eposta_form', $_POST['eposta_form']);
  $SORGU->bindParam(':parola_form', $_POST['parola_form']);

  $SORGU->execute();

  $CEVAP = $SORGU->fetchAll(PDO::FETCH_ASSOC);
  //var_dump($CEVAP);
  // echo "Gelen cevap " .  count($CEVAP) . " adet satırdan oluşuyor";
  if (count($CEVAP) == 1) {
    //echo "<h1>GİRİŞ BAŞARILI!</h1>";
    @session_start();
    $_SESSION['girisyapti'] = 1;
    $_SESSION['adsoyad'] = $CEVAP[0]['adsoyad']; // Kullanıcının adını alalım
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
  <p>Eposta: <input type='text' name='eposta_form'></p>
  <p>Parola: <input type='password' name='parola_form'></p>
  <p><input type='submit' value='Giriş Yap'></p>
</form>