<?php
require 'login.kontrol.php';
require 'sayfa.ust.php';
require_once 'db.php';

if (isset($_POST['form_gun1'])) {

  $sql = "UPDATE yemekmenusu SET 
          gun1 = :form_gun1,
          gun2 = :form_gun2,
          gun3 = :form_gun3,
          gun4 = :form_gun4,
          gun5 = :form_gun5,
          gun6 = :form_gun6,
          gun7 = :form_gun7
          WHERE id = 1";
  $SORGU = $DB->prepare($sql);

  $SORGU->bindParam(':form_gun1',  $_POST['form_gun1']);
  $SORGU->bindParam(':form_gun2',  $_POST['form_gun2']);
  $SORGU->bindParam(':form_gun3',  $_POST['form_gun3']);
  $SORGU->bindParam(':form_gun4',  $_POST['form_gun4']);
  $SORGU->bindParam(':form_gun5',  $_POST['form_gun5']);
  $SORGU->bindParam(':form_gun6',  $_POST['form_gun6']);
  $SORGU->bindParam(':form_gun7',  $_POST['form_gun7']);

  $SORGU->execute();
  echo '
      <div class="alert text-center alert-success alert-dismissible fade show" role="alert">
        Menü güncellendi...
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    ';
}
require_once 'db.php';
$SORGU = $DB->prepare("SELECT * FROM yemekmenusu WHERE id = 1");
$SORGU->execute();
$MENU = $SORGU->fetchAll(PDO::FETCH_ASSOC);
// var_dump($MENU);

?>
<div class='row text-center'>
  <h1 class='alert alert-primary'>Yemek Menüsü</h1>
</div>

<form method="POST">
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Pazartesi</th>
        <th>Salı</th>
        <th>Çarşamba</th>
        <th>Perşembe</th>
        <th>Cuma</th>
        <th>Cumartesi</th>
        <th>Pazar</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><textarea name='form_gun1' style="width:100px; height:150px;"><?php echo $MENU[0]['gun1'] ?></textarea></td>
        <td><textarea name='form_gun2' style="width:100px; height:150px;"><?php echo $MENU[0]['gun2'] ?></textarea></td>
        <td><textarea name='form_gun3' style="width:100px; height:150px;"><?php echo $MENU[0]['gun3'] ?></textarea></td>
        <td><textarea name='form_gun4' style="width:100px; height:150px;"><?php echo $MENU[0]['gun4'] ?></textarea></td>
        <td><textarea name='form_gun5' style="width:100px; height:150px;"><?php echo $MENU[0]['gun5'] ?></textarea></td>
        <td><textarea name='form_gun6' style="width:100px; height:150px;"><?php echo $MENU[0]['gun6'] ?></textarea></td>
        <td><textarea name='form_gun7' style="width:100px; height:150px;"><?php echo $MENU[0]['gun7'] ?></textarea></td>
        </td>
      </tr>
    </tbody>
  </table>
  <input type="submit" class="btn btn-primary" value="Kaydet">
</form>
<?php
require 'sayfa.alt.php';
?>