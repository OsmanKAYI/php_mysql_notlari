<?php
require 'login.kontrol.php';
require 'sayfa.ust.php';
?>

<!-- YETKİLİ KİŞİLER MENÜSÜ -->
<?php if ($_SESSION['rol'] == 2) { ?>
  <div class='row text-center'>
    <p><a href='list.php' class="btn btn-danger"> Personel Yönetimi </a></p>
  </div>
  <div class='row text-center'>
    <p><a href='yemekmenusu.php' class="btn btn-danger"> Yemek Menüsü </a></p>
  </div>
<?php } ?>

<!-- KULLANICILAR MENÜSÜ -->
<div class='row text-center'>
  <p><a href='yemeklist.php' class="btn btn-primary"> Yemek Listesi </a></p>
</div>
<?php require 'sayfa.alt.php'; ?>