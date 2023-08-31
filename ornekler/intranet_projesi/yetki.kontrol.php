<?php
if ($_SESSION['rol'] != 2) {
  echo "<h1>Yetkili değilsiniz!</h1>";
  echo "<a href='index.php'>Ana sayfaya dön...</a>";
  die();
}
