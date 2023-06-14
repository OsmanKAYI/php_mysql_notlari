<h1>İLANLAR</h1>

<?php

require_once('db.php');

$stmt = $DB->prepare("SELECT * FROM ilanlar");
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
//echo '<pre>'; print_r($rows);

foreach($rows as $row) {
    echo " <b style = 'color:red'> {$row['baslik']} </b>";
    echo "<a href='incele.php?id={$row['id']}'>İncele</a>"; 
    echo "<br>";
    echo nl2br($row['detay']);
    echo "<br>";
    echo "<hr>";
}

echo "<p><a href='index.php'>ANASAYFAYA DÖN</a></p>";
