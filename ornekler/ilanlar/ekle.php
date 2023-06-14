<?php

if(isset($_POST['baslik'])){

    require_once('db.php');

    $baslik  = $_POST['baslik'];
    $tarih   = $_POST['tarih'];
    $detay   = $_POST['detay'];
    $telefon = $_POST['telefon'];
    $konum   = $_POST['konum'];

    $sql = "INSERT INTO ilanlar (baslik, tarih, detay, telefon, konum) VALUES (:baslik, :tarih, :detay, :telefon, :konum)";
    $SORGU = $DB->prepare($sql);
    
    $SORGU->bindParam(':baslik',  $baslik);
    $SORGU->bindParam(':tarih',   $tarih);
    $SORGU->bindParam(':detay',   $detay);
    $SORGU->bindParam(':telefon', $telefon);
    $SORGU->bindParam(':konum',   $konum);
    
    $SORGU->execute();
    echo "İlan eklendi";
}
?>

<h1>İlan Ekleme...</h1>

<form method='POST'>
    <table border='1' cellpadding='10' cellspacing='0' width='500'>
        <tr>
            <th nowrap>İlan Başlığı</th>
            <td><input type='text' name='baslik' ></td> 
        </tr>
        <tr>
            <th nowrap>İlan Tarihi</th>
            <td><input type='date' name='tarih' ></td> 
        </tr>
        <tr>
            <th>Detay</th>
            <td><textarea name="detay" style='width:400px; height:150px'></textarea></td> 
        </tr>
        <tr>
            <th>Telefon</th>
            <td><input type='text' name='telefon' ></td> 
        </tr>
        <tr>
            <th>Konum</th>
            <td><input type='text' name='konum' ></td> 
        </tr>
        <tr>
            <td colspan='2'> <center> <input type='submit' value='KAYDET'> </center> </td>
        </tr>
    </table>
</form>

<p><a href='index.php'>ANASAYFAYA DÖN</a></p>
