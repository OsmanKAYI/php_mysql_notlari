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

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>

<div class='container'>
  <div class="offset-3 col-6">

    <div class='row text-center'>
      <h1 class='alert alert-primary'>GİRİŞ EKRANI</h1>
    </div>

    <form method="POST">
        <div class="mb-3">
          <label for="eposta" class="form-label">Eposta</label>
          <input type="text" name='eposta_form' class="form-control" id="eposta" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="parola" class="form-label">Parola</label>
          <input type="password" name='parola_form' class="form-control" id="parola">
        </div>
          <button type="submit" class="btn btn-primary">GİRİŞ</button>
    </form>

  </div>

<?php require 'sayfa.alt.php'; ?>