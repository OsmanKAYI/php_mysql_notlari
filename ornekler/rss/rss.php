<?php

$URL       = "http://www.hurriyet.com.tr/rss/ekonomi";
$xml       = simplexml_load_file($URL);
$json_str  = json_encode($xml); // $mxl değişkeninin JSON karşılığını içeren bir dizge döndürür. 
$arr_sonuc = json_decode($json_str, TRUE); // Kodlanmış bir JSON dizgesini çözümler ve PHP değişkenine çevirir. 
// echo "<pre>"; print_r($arr_sonuc); die();

$Haberler  = $arr_sonuc["channel"]["item"];
// echo "<pre>"; print_r($Haberler); die();

echo "<h1>Hürriyet Ekonomi</h1>";
$c=0;
foreach ($Haberler as $key => $haber) {
    $c++;
    if($c > 6) continue;
    $resim = $haber['thumbnail']['@attributes']['url'];
    $link  = $haber['link'];
    $baslik= $haber['title'];
    $ozet  = $haber['description'];
    echo "<p> 
            <img src='$resim' width='200'>
            <br>
            <a href='{$link}'>{$baslik}</a>
            <br>
            $ozet
          </p>";
    
}

echo "<h1>Hürriyet Ekonomi</h1>";
echo "<table border='1' cellpadding='10' cellspacing='5' width='800'>";
$c=0;
foreach ($Haberler as $key => $haber) {
    $c++;
    if($c > 6) continue;
    $resim = $haber['thumbnail']['@attributes']['url'];
    $link  = $haber['link'];
    $baslik= $haber['title'];
    $ozet  = $haber['description'];
    echo "<tr>
            <td>
                <img src='$resim' width='200'>
            </td>
            <td>
                <a href='{$link}'>{$baslik}</a>
                <br>
                $ozet
            </td>
          </tr>
    ";
    
}
echo "</table>";
