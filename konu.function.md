## PHP ile Fonksiyon Tanımlama

### Sonuç dönmeyen fonksiyon örneği:

```PHP
function DiziYazdir($diziAdi, $baslik="") {
  if($baslik<>"") echo "<h1>{$baslik}</h1>";
  echo "<ul>";
  foreach ($diziAdi as $key => $value) {
  	echo "<li> <b>{$key}</b>: {$value}</li>";
  }
  echo "<ul>";
}

$Ulkeler = array('DE'=>'Almanya', 'FR'=>'Fransa', 'TR'=>'Türkiye');
DiziYazdir($Ulkeler, "Ülke Adları");
```

### Sonuç dönen fonksiyon örneği:

```PHP
function KDVHesapla($Tutar, $Oran=18) {
	$KDV = $Tutar * $Oran / 100;
	return $KDV;
}
$UrunTutari = 12000;
$KdvOrani = 18;
$KdvTutari = KDVHesapla($UrunTutari, $KdvOrani);

echo "<br><br>{$UrunTutari} TL tutarındaki ürününüzün %{$KdvOrani} oranıdaki KDV tutarı : {$KdvTutari}";

```
