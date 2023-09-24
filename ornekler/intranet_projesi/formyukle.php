<?php
require 'login.kontrol.php';
require 'sayfa.ust.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $hedefKlasor = "../FORMLAR/";
  $desteklenenTipler = ["pdf", "doc", "docx", "xls", "xlsx"];

  $dosya = $_FILES["dosya"];

  $dosyaIsmi = $dosya["name"];
  $dosyaTipi = strtolower(pathinfo($dosyaIsmi, PATHINFO_EXTENSION));

  if (!in_array($dosyaTipi, $desteklenenTipler)) {
    echo "Sadece PDF, DOC ve XLS dosyaları yüklenebilir.";
  } else {
    $hedefYol = $hedefKlasor . $dosyaIsmi;
    if (move_uploaded_file($dosya["tmp_name"], $hedefYol)) {
      echo "Dosya başarıyla yüklendi.";
    } else {
      echo "Dosya yüklenirken bir hata oluştu.";
    }
  }
}
?>
<p>
  Sık kullanılan formlar sayfasına buradan dosya yüklemesi yapabilirsiniz.
</p>
<form method="POST" action="" enctype="multipart/form-data">
  Dosya Seçin: <input type="file" name="dosya"><br>
  <input type="submit" class="btn btn-primary" value="Yükle">
</form>

<?php require 'sayfa.alt.php'; ?>