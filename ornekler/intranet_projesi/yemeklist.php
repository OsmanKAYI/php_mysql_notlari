<?php
require 'login.kontrol.php';
require 'sayfa.ust.php';
require_once 'db.php';

require_once 'db.php';
$SORGU = $DB->prepare("SELECT * FROM yemekmenusu WHERE id = 1");
$SORGU->execute();
$MENU = $SORGU->fetchAll(PDO::FETCH_ASSOC);
// var_dump($MENU);

$GUN = date("N"); // 1-7 arası değer alır. Pazartesi için 1 vb.

?>
<div class='row text-center'>
  <h1 class='alert alert-primary'>Haftalık Yemek Menüsü</h1>
</div>

<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th <?php if ($GUN == 1) echo " class='bg-info' "; ?>>Pazartesi</th>
      <th <?php if ($GUN == 2) echo " class='bg-info' "; ?>>Salı</th>
      <th <?php if ($GUN == 3) echo " class='bg-info' "; ?>>Çarşamba</th>
      <th <?php if ($GUN == 4) echo " class='bg-info' "; ?>>Perşembe</th>
      <th <?php if ($GUN == 5) echo " class='bg-info' "; ?>>Cuma</th>
      <th <?php if ($GUN == 6) echo " class='bg-info' "; ?>>Cumartesi</th>
      <th <?php if ($GUN == 7) echo " class='bg-info' "; ?>>Pazar</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo nl2br($MENU[0]['gun1']); ?></td>
      <td><?php echo nl2br($MENU[0]['gun2']); ?></td>
      <td><?php echo nl2br($MENU[0]['gun3']); ?></td>
      <td><?php echo nl2br($MENU[0]['gun4']); ?></td>
      <td><?php echo nl2br($MENU[0]['gun5']); ?></td>
      <td><?php echo nl2br($MENU[0]['gun6']); ?></td>
      <td><?php echo nl2br($MENU[0]['gun7']); ?></td>
      </td>
    </tr>
  </tbody>
</table>

<div class='text-center'>
  <a href='index.php' class='btn btn-warning'>ANASAYFAYA</a>
</div>

<?php
require 'sayfa.alt.php';
?>