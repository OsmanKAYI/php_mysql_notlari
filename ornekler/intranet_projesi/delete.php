<?php
require 'login.kontrol.php';
require 'yetki.kontrol.php';
require 'sayfa.ust.php';

if ($_SESSION['id'] == $_GET['id']) {
  echo "<h1>Kendinizi silemezsiniz!</h1>";
  die();
}

require_once('db.php');

$id    = $_GET['id'];

$sql = "DELETE FROM kullanicilar WHERE id = :id";
$SORGU = $DB->prepare($sql);

$SORGU->bindParam(':id', $id);

$SORGU->execute();
echo "Kullanıcı silindi...";
?>

<div class='row text-start'>
  <p><a href='list.php' class="btn btn-primary btn-sm"> Geri Dön </a></p>
</div>

<?php require 'sayfa.alt.php'; ?>