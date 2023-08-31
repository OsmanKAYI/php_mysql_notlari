<?php
require 'login.kontrol.php';
require 'yetki.kontrol.php';
require 'sayfa.ust.php';
require_once('db.php');

if (isset($_POST['talepid_form'])) {
  // Güncelleme yapalım...
  $sql = "UPDATE talepler 
          SET islemnotu = :islemnotu_form, 
              durum = :talepdurum_form 
          WHERE id = :talepid_form";
  $SORGU = $DB->prepare($sql);

  $SORGU->bindParam(':islemnotu_form',  $_POST['islemnotu_form']);
  $SORGU->bindParam(':talepdurum_form', $_POST['talepdurum_form']);
  $SORGU->bindParam(':talepid_form',    $_POST['talepid_form']);
  $SORGU->execute();
  echo "<p>Talep güncellendi...</p>";
}

?>

<div class='row text-center'>
  <h1 class='alert alert-primary'>Talep Yönetimi</h1>
</div>

<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Talep Tarihi<br>Öncelik<br>Durum</th>
      <th>Talep Eden<br>Unvan<br>Birimi<br>Telefonu</th>
      <th>Talebi</th>
      <th>İşlem</th>
    </tr>
  </thead>
  <tbody>

    <?php

    $SORGU = $DB->prepare("
                SELECT 
                  talepler.*, 
                  kullanicilar.adsoyad, 
                  kullanicilar.unvan, 
                  kullanicilar.birim, 
                  kullanicilar.telefon, 
                  birimler.birimadi
                FROM 
                  birimler, talepler, kullanicilar
                WHERE 
                  talepler.talepeden = kullanicilar.id AND
                  talepler.hedefbirim = birimler.id
    ");
    $SORGU->execute();
    $talepler = $SORGU->fetchAll(PDO::FETCH_ASSOC);
    //echo '<pre>'; print_r($users);

    foreach ($talepler as $talep) {
      $Oncelik = "";
      if ($talep['oncelik'] == 0) $Oncelik = "Normal";
      if ($talep['oncelik'] == 1) $Oncelik = "Acil";
      if ($talep['oncelik'] == 2) $Oncelik = "Kritik";

      $Durum = "";
      if ($talep['durum'] == 0) $Durum = "Yeni";
      if ($talep['durum'] == 1) $Durum = "İşlemde";
      if ($talep['durum'] == 2) $Durum = "Sonuçlandı";
      $TALEBI = nl2br($talep['talep']);

      echo "
    <tr>
      <th>{$talep['id']}</th>
      <td>{$talep['taleptarihi']}<br>
          {$Oncelik}<br>
          {$Durum}<br>
      </td>
      <td>{$talep['adsoyad']}<br>
          {$talep['unvan']}<br>
          {$talep['birim']}<br>
          {$talep['telefon']}<br>
          </td> 
      <td>{$TALEBI}<br><b style='color:darkred;'>{$talep['islemnotu']}</b></td>
      <td>";
    ?>
      <form method="POST">
        <input type="hidden" name="talepid_form" value="<?php echo $talep['id']; ?>">
        <input type="text" name="islemnotu_form" placeholder="işlem notu...">
        <br>
        <select name="talepdurum_form">
          <option value='0'>Yeni</option>
          <option value='1'>İşlemde</option>
          <option value='2'>Sonuçlandı</option>
        </select>
        <input type="submit" class="btn btn-primary btn-sm" value="Kaydet...">
      </form>
    <?php
      echo "      
      </td>
   </tr> 
  ";
    }

    ?>

  </tbody>
</table>




<div class='text-center'>
  <a href='index.php' class='btn btn-warning'>ANASAYFAYA</a>
</div>

<?php require 'sayfa.alt.php'; ?>