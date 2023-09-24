<?php
require 'login.kontrol.php';
require 'sayfa.ust.php'; ?>

<div class='row text-center'>
  <h1 class='alert alert-primary'>Telefon Rehberi</h1>
</div>
<form method="GET">
  <p>
    İsim, birim veya telefon giriniz: <input type="text" name="isim_form">
    <input type="submit" value="Rehberde ara..." class="btn btn-primary">
  </p>

</form>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Adı Soyadı</th>
      <th>Unvanı</th>
      <th>Birimi</th>
      <th>Telefonu</th>
    </tr>
  </thead>
  <tbody>

    <?php

    require_once('db.php');

    if (isset($_GET['isim_form'])) {
      // Formdan gelen kişileri göster...
      $ArananAd = $_GET['isim_form'];
      $ArananAd = "%{$ArananAd}%";
    } else {
      $ArananAd = "";
    }

    $sql = "SELECT * FROM kullanicilar 
            WHERE 
              adsoyad LIKE :isim_form OR
              unvan   LIKE :isim_form OR
              birim   LIKE :isim_form OR
              telefon LIKE :isim_form
              LIMIT 100";
    $SORGU = $DB->prepare($sql);

    $SORGU->bindParam(':isim_form', $ArananAd);

    $SORGU->execute();

    $kullanicilar = $SORGU->fetchAll(PDO::FETCH_ASSOC);

    foreach ($kullanicilar as $kullanici) {
      echo "
    <tr>
      <td>{$kullanici['adsoyad']}</td>
      <td>{$kullanici['unvan']}</td>
      <td>{$kullanici['birim']}</td>
      <td>{$kullanici['telefon']}</td>
   </tr> 
  ";
    }

    ?>

  </tbody>
</table>