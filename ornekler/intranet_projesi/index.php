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
    <p><a href='yemek.menu.php' class="btn btn-danger"> Yemek Menüsü </a></p>
  </div>
  <div class='row text-center'>
    <p><a href='formyukle.php' class="btn btn-danger"> Form Yönetimi</a></p>
  </div>
<<<<<<< HEAD
  <div class='row text-center'>
    <p><a href='talep.yonetimi.php' class="btn btn-danger"> Talep Yönetimi</a></p>
  </div>
=======
>>>>>>> origin/main
<?php } ?>

<!-- KULLANICILAR MENÜSÜ -->
<div class='row text-center'>
  <p><a href='yemek.list.php' class="btn btn-primary"> Yemek Listesi </a></p>
</div>
<div class='row text-center'>
  <p><a href='formlar.php' class="btn btn-primary"> Sık Kullanılan Formlar </a></p>
</div>
<div class='row text-center'>
  <p><a href='duyuru.liste.php' class="btn btn-primary"> Duyurular </a></p>
</div>
<div class='row text-center'>
  <p><a href='rehber.php' class="btn btn-primary"> Telefon Rehberi </a></p>
</div>
<div class='row text-center'>
  <p><a href='talep.olustur.php' class="btn btn-primary"> Talep Oluştur </a></p>
</div>

<?php require_once 'sayfa.alt.php'; ?>