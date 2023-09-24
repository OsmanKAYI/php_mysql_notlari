<?php
require 'login.kontrol.php';
require 'sayfa.ust.php'; ?>

<div class='row text-center'>
  <h1 class='alert alert-primary'>Duyurular</h1>
</div>


<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>Yayın Tarihi</th>
      <th>Duyuru Başlığı</th>
    </tr>
  </thead>
  <tbody>




    <?php

    require_once('db.php');

    $SORGU = $DB->prepare("SELECT * FROM duyurular 
                           WHERE CURDATE() BETWEEN baslamatarihi AND bitistarihi
                           ORDER BY baslamatarihi DESC");
    $SORGU->execute();
    $DUYURULAR = $SORGU->fetchAll(PDO::FETCH_ASSOC);
    //echo '<pre>'; print_r($users);

    foreach ($DUYURULAR as $duyuru) {
      $DuyuruTarihi = $duyuru['baslamatarihi'];
      $DuyuruTarihi = date("d.m.Y", strtotime($DuyuruTarihi));
      echo "
        <tr>
          <th>{$DuyuruTarihi}</th>
          <td><a href='duyuru.goster.php?id={$duyuru['id']}'>{$duyuru['baslik']}</a></td>
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