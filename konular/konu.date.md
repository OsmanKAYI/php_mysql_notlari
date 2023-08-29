
## PHP ile Tarih İşlemleri

### Saat Dilimi Ayarlama

```PHP
echo date("d.m.Y H.i.s");
echo "<br>";

date_default_timezone_set('Europe/Istanbul');
echo "<br>";

echo date("d.m.Y H.i.s");  
echo "<br>";
```

### Tarih İşlemleri

```PHP
$SuAnkiZaman = date("Y-m-d H:i:s");
$IslemZamani = date("Y-m-d H:i:s", ???);

// ??? alanına yazılabilecekler:
strtotime('now') // Şimdi
strtotime('2023-03-21') // Tarih
strtotime("+1 day") // 1 gün sonrası
strtotime("+1 week") // 1 hafta sonrası
strtotime("+1 week 2 days 4 hours 2 seconds") // ... zaman sonrası
strtotime("next thursday") // sonraki perşembe
strtotime("last monday") // Aktif ayın son pazartesi günü
strtotime('first day of next month') // Gelecek ayın ilk günü
strtotime('first monday of february 2023')  // 2023 Şubat ayının ilk pazartesi günü
strtotime('last monday of february 2023') // 2023 Şubat ayının son pazartesi günü
strtotime('last day of february 2023') // 2023 Şubat ayının son günü
strtotime('last sunday of 2019-08') // 2019 Ağustos ayının son pazarı
strtotime('last sunday of 2019-08 -2 day') // 2019 Ağustos ayının son pazarının 2 gün öncesi
```

### İki Tarih Arası Tarihleri Üretme (Yöntem 1):

```PHP
$start_date = '2015-01-27';
$end_date   = '2015-02-13';

while (strtotime($start_date) <= strtotime($end_date)) {
    echo "{$start_date}<br>";
    $start_date = date ("Y-m-d", strtotime("+1 days", strtotime($start_date)));
}
```

### İki Tarih Arası Tarihleri Üretme (Yöntem 2):

```PHP
$start_date = new DateTime('2015-01-27');
$end_date   = new DateTime('2015-02-13');

$interval = DateInterval::createFromDateString('1 day');
$period = new DatePeriod($start_date, $interval, $end_date);

foreach ($period as $dt) {
    echo $dt->format("Y-m-d") . "<br>";
}
```

### İki Tarih Arası Tarihleri Üretme (Yöntem 3):

```PHP
$start_date = new DateTime('2015-01-27');
$end_date   = new DateTime('2015-02-13');

for($i = $start_date; $i <= $end_date; $i->modify('+1 day')){
    echo $i->format("Y-m-d") . "<br>";
}
```
