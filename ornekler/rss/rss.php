
<?php

	$URL = "https://tr.sputniknews.com/export/rss2/archive/index.xml";
	$URL = "http://www.hurriyet.com.tr/rss/ekonomi";
	$xml = simplexml_load_file($URL);
	$json_string = json_encode($xml); // $mxl değişkeninin JSON karşılığını içeren bir dizge döndürür. 
	$result_array = json_decode($json_string, TRUE); // Kodlanmış bir JSON dizgesini çözümler ve PHP değişkenine çevirir. 
    $Haberler = $result_array["channel"]["item"];

    // echo "<pre>"; print_r($Haberler);

    echo "<b>Hürriyet Ekonomi</b>";
    echo "<ul>";
    foreach ($Haberler as $key => $haber) {
        $resim = $haber['thumbnail']['@attributes']['url'];
        $link = $haber['link'];
        $saat = $haber['modified'];
        if( substr($saat, 0, 5) != date("d.m") ) continue;
        $x = substr($saat, 11, 5);
        echo "<li><b>$x</b> <a href='{$link}'>{$haber['title']}</a></li>";
        // echo "<a href='{$link}'><img src='$resim' width='150' align='top'></a>";
        // echo "<b>" . $haber['title'] . "</b><br>";
        // echo $haber['description'];
        // echo "<br><br><br>";
    }
    echo "</ul>";


