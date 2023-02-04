## PHP İle Cookie Kullanımı

### Cookie Oluşturma:

```PHP
$UrunNo = 123456;

setcookie("Urun", $UrunNo);  
setcookie("Urun", $UrunNo, time()+3600); // 1 saat süreli
setcookie("Urun", $UrunNo, time()+3600, "/urunler/", "example.com");
setcookie( "Urun", $UrunNo, strtotime( '+30 days' ) ); // 30 gün süreli
```

### Cookie Değeri Güncelleme:

```PHP
$UrunNo = 123;
setcookie("Urun", $UrunNo, time()+3600); // 1 saat süreli
```

### Cookie Var mı kontrolü:

```PHP
if( !isset($_COOKIE['Urun']) ) {
  // Bu cookie yok
} else {
  // Bu cookie var. Değerini yazdıralım:
  echo $_COOKIE['Urun'];
}
```

### Cookie Silme:

```PHP
$UrunNo = 123456;
setcookie("Urun", $UrunNo, 1); // 1 saniye süreli cooki tanımla
```

### Tüm Cookie'leri Listeleme:

```PHP
print_r($_COOKIE)
```

## ÖRNEK Uygulama:

##### Detayları incelenen ürünleri saklamak için

```PHP
$UrunNo = 123456;
$Urunler = ( isset($_COOKIE['Urunler']) ) ? $_COOKIE['Urunler'] . ';' . $UrunNo : $UrunNo; 
setcookie("Urunler", $Urunler, time()+3600);
```

##### İncelenen ürünleri diziye alalım

```PHP
$UrunNo = 123456;
$arrUrunler = explode(';', $_COOKIE['Urunler']);
print_r($arrUrunler);
```
