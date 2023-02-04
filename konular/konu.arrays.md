
## PHP ile Diziler

### Dizi Türleri ve Erişimi

```PHP
// PHP Indexed Arrays
$cars = array("Volvo", "BMW", "Toyota");
// veya
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota"; 

// PHP Associative Arrays
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
// veya
$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43"; 

// PHP Multidimensional Arrays
// PHP - Two-dimensional Arrays
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2)
);
// veya
$cars[0][0] = "Volvo";
$cars[0][1] = "22";
$cars[0][2] = "18";
$cars[1][0] = "BMW";
$cars[1][1] = "15";
$cars[1][2] = "13";
$cars[2][0] = "Saab";
$cars[2][1] = "5";
$cars[2][2] = "2";
```

### Dizi İçinde Gezinme

```PHP
$Ulkeler = array('DE'=>'Almanya', 'FR'=>'Fransa', 'TR'=>'Türkiye');
echo "<ul>";
foreach ($Ulkeler as $ulkeKodu => $ulkeAdi) {
	echo "<li> <b>{$ulkeKodu}</b>: {$ulkeAdi}</li>";
}
echo "<ul>";
```

### PHP Dizilerde Sıralama

DEĞER'e göre sıralama:
- `sort()`   - A-Z Sıralaması
- `asort()`  - A-Z Sıralaması
- `arsort()` - Z-A Sıralaması

ANAHTAR'a göre sıralama:
- `ksort()`  - A-Z Sıralaması
- `krsort()` - Z-A Sıralaması

```PHP
// PHP'de Dizi Sıralama
$cars = array("Volvo", "BMW", "Toyota");

echo "MEVCUT DEĞERLER:";
foreach ($cars as $key => $value) {
	echo "<p> KEY değeri: {$key},  VALUE değeri: {$value} </p>";
}

sort($cars);

echo "SIRALANMIŞ DEĞERLER:";
foreach ($cars as $key => $value) {
	echo "<p> KEY değeri: {$key},  VALUE değeri: {$value} </p>";
}
```
