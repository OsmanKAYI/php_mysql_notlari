<?php
require 'login.kontrol.php';
require 'yetki.kontrol.php';
require 'sayfa.ust.php'; ?>

<div class='row text-center'>
  <h1 class='alert alert-primary'>Personel Yönetimi</h1>
</div>

<div class='row text-end'>
  <p><a href='insert.php' class="btn btn-primary btn-sm "> Yeni Personel Ekle </a></p>
</div>


<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Adı Soyadı</th>
      <th>ePosta Adresi</th>
      <th>Unvanı</th>
      <th>Birimi</th>
      <th>Telefonu</th>
      <th>Güncelle</th>
      <th>Sil</th>
    </tr>
  </thead>
  <tbody>




    <?php

    require_once('db.php');

    $SORGU = $DB->prepare("SELECT * FROM kullanicilar");
    $SORGU->execute();
    $kullanicilar = $SORGU->fetchAll(PDO::FETCH_ASSOC);
    //echo '<pre>'; print_r($users);

    foreach ($kullanicilar as $kullanici) {
      echo "
    <tr>
      <th>{$kullanici['id']}</th>
      <td>{$kullanici['adsoyad']}</td>
      <td>{$kullanici['eposta']}</td>
      <td>{$kullanici['unvan']}</td>
      <td>{$kullanici['birim']}</td>
      <td>{$kullanici['telefon']}</td>
      <td><a href='update.php?id={$kullanici['id']}' class='btn btn-success btn-sm'>Güncelle</a></td>
      <td><a href='delete.php?id={$kullanici['id']}' class='btn btn-danger btn-sm'>Sil</a></td>
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