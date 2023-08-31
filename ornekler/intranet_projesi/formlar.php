<?php
require 'login.kontrol.php';
require 'sayfa.ust.php';

$hedefKlasor = "../FORMLAR/";

// Klasördeki dosyaları al
$dosyalar = scandir($hedefKlasor);

// "." ve ".." girdilerini kaldır
$dosyalar = array_diff($dosyalar, array(".", ".."));

// Dosya listesini alfabetik sıraya göre sırala
sort($dosyalar);

if (count($dosyalar) === 0) {
  echo "Henüz herhangi bir dosya yüklenmemiş.";
} else {
  echo "<h2>Yüklenen Dosyalar</h2>";
  echo "<ul>";
  foreach ($dosyalar as $dosya) {
    echo "<li><a href=\"$hedefKlasor$dosya\" download>$dosya</a></li>";
  }
  echo "</ul>";
}
?>

<div class='text-center'>
  <a href='index.php' class='btn btn-warning'>ANASAYFA</a>
</div>

<?php require 'sayfa.alt.php'; ?>
