<form method='POST' action=''>
  Sayı 1: <input type='text' name='sayi1' value=''>
  Sayı 2: <input type='text' name='sayi2' value=''>
  <input type='submit' name='islem' value='TOPLA'>
  <input type='submit' name='islem' value='ÇIKAR'>
</form>

<?php

if( isset($_POST['islem']) ) {
  $S1=$_POST['sayi1'];
  $S2=$_POST['sayi2'];
  
  if( $_POST['islem'] == "TOPLA" ) echo "TOPLAM: " . ($S1 + $S2);
  if( $_POST['islem'] == "ÇIKAR" ) echo "FARK: "   . ($S1 - $S2);
}

?>
