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
      <th scope="col">ID</th>
      <th scope="col">Adı Soyadı</th>
      <th scope="col">Unvanı</th>
      <th scope="col">ePosta Adresi</th>
      <th scope="col">Telefonu</th>
      <th scope="col">Birimi</th>
      <th scope="col">Güncelle</th>
      <th scope="col">Sil</th>
    </tr>
  </thead>
  <tbody>




    <?php

    require_once('db.php');

    $SORGU = $DB->prepare("SELECT * FROM users");
    $SORGU->execute();
    $users = $SORGU->fetchAll(PDO::FETCH_ASSOC);
    //echo '<pre>'; print_r($users);

    foreach ($users as $user) {
      echo "
    <tr>
      <th>{$user['id']}</th>
      <td>{$user['name']}</td>
      <td>{$user['unvan']}</td>
      <td>{$user['email']}</td>
      <td>{$user['telefon']}</td>
      <td>{$user['birim']}</td>
      <td><a href='update.php?id={$user['id']}' class='btn btn-success btn-sm'>Güncelle</a></td>
      <td><a href='delete.php?id={$user['id']}' class='btn btn-danger btn-sm'>Sil</a></td>
   </tr> 
  ";
    }

    ?>

  </tbody>
</table>




<div class='text-center'>
  <a href='index.php' class='btn btn-warning'>ANASAYFAYA DÖN</a>
</div>

<?php require 'sayfa.alt.php'; ?>