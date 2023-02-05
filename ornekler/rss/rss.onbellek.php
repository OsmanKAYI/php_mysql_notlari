<?php

$URL = "http://www.hurriyet.com.tr/rss/ekonomi";
$HaberDosyasi = "/tmp/haberler.txt";

if (file_exists($HaberDosyasi) and (filemtime($HaberDosyasi) > (time() - 60 * 5 ))) {
    // Önbellekteki dosya 5 dakikadan daha yeni.
    // İçeriği siteden yenileyip zaman kaybetmeyelim.
    $file = file_get_contents($HaberDosyasi);
    echo "<span style='background-color: yellow;'>Önbellekten geldi...</span><br>";
 } else {
    // Önbellekteki dosya 5 dakikadan daha eski.
    // İçeriği siteden yenileyip talep edelim ki yeni haberleri görebilelim.
    $xml = simplexml_load_file($URL);
    $json_string = json_encode($xml); // $mxl değişkeninin JSON karşılığını içeren bir dizge döndürür. 
    // Yeni haberleri de dosyaya yazalım.
    // Böylece takip eden 5 dakika boyunca bu dosya bize hizmet edebilsin.
    $sonuc = file_put_contents($HaberDosyasi, $json_string, LOCK_EX);
    if(!$sonuc) die("Yazma yetkisi yok! Dosyaya yazılamadı...");
    echo "<span style='background-color: yellow;'>Kaynağından geldi...</span><br>";
 }

    $json_string = file_get_contents($HaberDosyasi);
    $result_array = json_decode($json_string, TRUE); // Kodlanmış bir JSON dizgesini çözümler ve PHP değişkenine çevirir. 
    $Haberler = $result_array["channel"]["item"];

    echo "<b>Hürriyet Ekonomi</b>";
    echo "<ul>";
    foreach ($Haberler as $key => $haber) {
        $resim = $haber['thumbnail']['@attributes']['url'];
        $link = $haber['link'];
        $baslik = $haber['title'];
        echo "<li><a href='{$link}'>{$baslik}</a></li>";
    }
    echo "</ul>";


