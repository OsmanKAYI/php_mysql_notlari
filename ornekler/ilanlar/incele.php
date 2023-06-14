<?php

    require_once('db.php');

    $id    = $_GET['id'];

    $sql = "SELECT * FROM ilanlar WHERE id = :id";
    $stmt = $DB->prepare($sql);
    
    $stmt->bindParam(':id', $id);
    
    $stmt->execute();

    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $row  = $rows[0];

    // echo "<pre>"; print_r($users);
?>

<h1 style='color:red'><?php echo $row['baslik']; ?></h1>

<table border='1' cellpadding='10' cellspacing='0' width='500'>
    <tr>
        <th>İlan No</th>
        <td><?php echo $row['id'];?></td> 
    </tr>
    <tr>
        <th nowrap>İlan Tarihi</th>
        <td><?php echo date("d.m.Y", strtotime( $row['tarih'])); ?></td> 
    </tr>
    <tr>
        <th>Detay</th>
        <td><?php echo nl2br($row['detay']);?></td> 
    </tr>
    <tr>
        <th>Telefon</th>
        <td><?php echo $row['telefon'];?></td> 
    </tr>
    <tr>
        <th>Konum</th>
        <td><?php echo $row['konum'];?></td> 
    </tr>
</table>

<?php require_once('harita.php'); ?>

<p><a href='güncelle.php?id=<?php echo $row['id'];?>'> İlan Düzenle </a></p>
<p><a href='liste.php'>Geri Dön</a></p>