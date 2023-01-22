
<?php

function arrayToXml($array, $rootElement = null, $xml = null) {
    $_xml = $xml;
    if ($_xml === null) {
      $_xml = new SimpleXMLElement($rootElement !== null ? $rootElement : '<root/>');
    }
    foreach ($array as $k => $v) {
      if (is_array($v)) { //nested array
        arrayToXml($v, $k, $_xml->addChild($k));
      } else {
        $_xml->addChild($k, $v);
      }
    }
    return $_xml->asXML();
  } // arrayToXml

$Personel = array();
$Personel[] = array("Adi"=>"Nuri",  "Soyadi"=>"Akman", "SicilNo"=>"1111");
$Personel[] = array("Adi"=>"Osman", "Soyadi"=>"Kayı",  "SicilNo"=>"3333", "YAŞ"=>18, "EĞİTİM"=> array("Fakülte", "Doktora") );
$Personel[5]["Adi"]     = "Selami";
$Personel[5]["Soyadi"]  = "Adak";
$Personel[5]["SicilNo"] = "2222";

echo "\n\n<h1>Dizi İçeriği</h1>\n";
echo "<pre>";
print_r($Personel);

echo "\n\n<h1>Dizinin XML formatına çevrilmiş hali</h1>\n";
print_r(arrayToXml($Personel));

echo "\n\n<h1>textarea içinde XML içeriğin görünümü</h1>\n";
echo "<textarea style='width: 600px; height: 200px;'>\n\n\n";
echo arrayToXml($Personel);
echo "\n\n\n</textarea>";


echo "<br><br>NOT: Çıktıyı incelemek için sayfanın kaynak konuda da bakabilirsiniz.\n\n";



  