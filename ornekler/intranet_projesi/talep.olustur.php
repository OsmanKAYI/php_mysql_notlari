<?php
require 'login.kontrol.php';
require 'sayfa.ust.php';
require_once('db.php');
?>

<div class='row text-center offset-3 col-6'>
  <h1 class='alert alert-primary'>Talep Oluştur</h1>
</div>

<?php

if (isset($_POST['talep_form'])) {


  $sql = "INSERT INTO talepler 
          SET talep = :talep_form,
              taleptarihi = :taleptarihi,
              talepeden = :talepeden,
              hedefbirim = :hedefbirim_form,
              oncelik = :oncelik_form,
              durum = 0
          ";
  $SORGU = $DB->prepare($sql);

  $SORGU->bindParam(':talep_form',  $_POST['talep_form']);
  $SORGU->bindParam(':taleptarihi', date("Y-m-d H:i:s"));
  $SORGU->bindParam(':talepeden', $_SESSION['id']);
  $SORGU->bindParam(':hedefbirim_form', $_POST['hedefbirim_form']);
  $SORGU->bindParam(':oncelik_form', $_POST['oncelik_form']);

  $SORGU->execute();
  echo '
      <div class="alert text-center alert-success alert-dismissible fade show" role="alert">
       Talebiniz kaydedildi...
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    ';
}
?>



<?php

$SORGU = $DB->prepare("SELECT * FROM birimler ORDER BY birimadi");
$SORGU->execute();
$birimler = $SORGU->fetchAll(PDO::FETCH_ASSOC);

$optionBirimler = "";
foreach ($birimler as $birim) {
  $optionBirimler = $optionBirimler . "<option value='{$birim['id']}'>{$birim['birimadi']}</option>";
}

?>


<form method="POST">
  <p>Lütfen talebinizi açık biçimde yazınız.<br>
    Görevli arkadaşlarımız sizinle en kısa zamanda iletişime geçecektir.</p>
  <textarea name='talep_form' style="width: 500px; height:100px;"></textarea>

  <p><br>Hedef Birim?
    <select name="hedefbirim_form">
      <?php echo $optionBirimler; ?>
    </select>
  </p>
  <p>Öncelik Durumu?
    <select name="oncelik_form">
      <option value='0'>Normal</option>
      <option value='1'>Acil</option>
      <option value='2'>Kritik</option>
    </select>
  </p>
  <p></p><input type="submit" class="btn btn-primary" value="Talebimi Gönder"></p>
</form>

<?php require 'sayfa.alt.php'; ?>