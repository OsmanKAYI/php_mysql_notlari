# KARALAMALAR


## Güvenlik

- [Tayfun Erbilen - TOKEN Neden Önemli?](https://www.youtube.com/watch?v=FNoAcuoLt-w)


## API

- Kendi uygulamamızın Twit atabilmesi.
- Kendi eticaret mağazamızdaki ürünleri Trendyol'da da yayınlama
- Siparişi getiren kuryenin konumunun haritada gösterilmesi
- Twitter, farklı platformlar için uygulama üretiyor. 
- Her platform için Twitter uygulaması TEKRAR TEKRAR mı yazılıyor?


Wishlist siteye eklenebilir! Askıda Bilet olarak eklenebilir
https://www.amazon.co.uk/gp/registry/wishlist/2ASV4RHBSM16H/026-9090951-0551667

## Enteresan! Topologically sort
- https://github.com/marcelklehr/toposort

## Sparkline Grafikleri
- Fiyat sayfasında kullanılabilir???
- https://omnipotent.net/jquery.sparkline/#s-docs
- https://github.com/fnando/sparkline
- https://ifpb.github.io/javascript-guide/packages/chart/jquery-sparkline/
- http://benpickles.github.io/peity/

## Grafik Kütüphaneleri
- https://vue-chartjs.org/
- https://www.chartjs.org/
- https://echarts.apache.org/en/index.html
- https://gionkunz.github.io/chartist-js/
- https://observablehq.com/collection/@d3/d3-shape


## WebSocket
- http://socketo.me/  (Ratchet WebSockets for PHP)


# DB Sockets
- https://github.com/ezSQL/ezsql 859
- https://github.com/ADOdb/ADOdb 394
- https://github.com/SergeyTsalkov/meekrodb 292


## FAYDALI COMPOSER PAKETLERİ
- https://github.com/PHPOffice
- https://github.com/dompdf/dompdf
- https://github.com/spipu/html2pdf
- https://github.com/mpdf/mpdf
- https://github.com/PHPMailer/PHPMailer
- https://github.com/swiftmailer/swiftmailer
- https://github.com/WordPress/Requests (curl alternatifi)
  - https://requests.ryanmccue.info/docs/usage.html  


## JSON Veri Kaynağı
- https://github.com/rinvex/countries/tree/master/resources/flags (Ülke Bayrakları .SVG Formatında)
- https://github.com/rinvex/countries (JSON formatta Ülke Bilgileri)
  - https://github.com/rinvex/countries/blob/master/resources/data/shortlist.json
  - https://github.com/rinvex/countries/blob/master/resources/data/longlist.json
  - https://github.com/rinvex/countries/blob/master/resources/data/tr.json



## PHP Composer Paketleri Kullanım Örnekleri
- https://simplepie.org/wiki/setup/sample_page
- https://php-download.com/package/simplepie/simplepie/example
- https://php-download.com/package/phpoffice/phpspreadsheet/example	
- https://php-download.com/package/phpmailer/phpmailer/example
- https://github.com/PHPMailer/PHPMailer/blob/master/examples/gmail.phps
- https://php-download.com/package/phpoffice/phpword/example
- https://php-download.com/package/swiftmailer/swiftmailer/example   gmail
- https://symfony.com/doc/current/mailer.html


## Örnek Uygulamalar
### ezSQL
- https://github.com/yakuter/yPhoneBook
- https://github.com/umitkayacan/ezSQL
- https://www.krenger.ch/blog/html-table-with-ezsql/#more-1544 (TABLE Örneği)
### Diğer
- https://github.com/umitkayacan/PHP-to-Excel
- https://github.com/umitkayacan/Json-Turce-Karakter-Sorunu
- https://github.com/bx16soupapes/ezSQL_sqlite3   ezSQL ile sqlite örneği
- https://github.com/umitkayacan/ezSQL-Icin-Sinirsiz-Kategorileme
- https://medium.com/@sezerfidanci/php-slim-framework-ile-restful-api-yap%C4%B1m%C4%B1-87c82cc27933
  - https://github.com/SezerFidanci/slim-framework-rest-api

## CORS Engelleme
```PHP
// Headers for GET Request
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods,Content-type,Access-Control-Allow-Origin, Authorization, X-Requested-With");



if ($post->delete()) {
    echo json_encode(["message" => "✅ Post Deleted!"]);
} else {
    echo json_encode(["message" => "❌ Cannot Delete!"]);
}

```

## text Dosya Veritabanı
- https://github.com/unfinishedtomato/bilisim-terimleri-sozlugu
- https://github.com/ugurkilci/tiyatrobot/blob/master/tiyatrobot%20(1).sql


- https://github.com/selimhallac/garantibankasi-web-ekstre-hesap-hareketleri
- https://github.com/selimhallac/halkbank-hesap-hareketleri-web-servis
- https://github.com/selimhallac/garantibankasi-web-ekstre-hesap-hareketleri
- https://github.com/selimhallac/ziraatbankasi-web-eksktre-hesap-hareketleri
- https://github.com/selimhallac/ziraat-bankasi


- https://github.com/ugurkilci/hafizilib/find/master 
- https://github.com/ugurkilci/rss-php


- https://tableconvert.com


- https://quickref.me/vscode
- https://quickref.me/markdown
- https://quickref.me/git
- https://quickref.me/html
- https://quickref.me/css
- https://quickref.me/emmet
- https://quickref.me/mysql
- https://quickref.me/redis
- https://quickref.me/php


## ÖĞREN!!!
- https://mitmproxy.org/


## PHP ve PDO - Yöntem 1
```PHP
<?php
// Example for using prepare statements directly, no shortcut SQL methods used

$db->query_prepared('INSERT INTO profile( name, email, phone) VALUES( ?, ?, ? );', [$user, $address, $number]);

$db->query_prepared('SELECT name, email FROM profile WHERE phone = ? OR id != ?', [$number, 5]);
$result = $db->queryResult();
$result = get_results(/* OBJECT|ARRAY_A|ARRAY_N|JSON */, $db); // Defaults to `OBJECT`

foreach ($result as $row) {
    echo $row->name.' '.$row->email;
}
```

## PHP ve PDO - Yöntem 2 (Kısayol)
```PHP
// Example for using prepare statements indirectly, with above shortcut SQL methods

$values = [];
$values['name'] = $user;
$values['email'] = $address;
$values['phone'] = $number;
$db->insert('profile', $values);
$db->insert('profile', ['name' => 'john john', 'email' => 'john@email', 'phone' => 123456]);

$result = $db->select('profile', 'phone', eq('email', $email), between('id', 1, $values));

foreach ($result as $row) {
    echo $row->phone;
}

$result = $db->select('profile', 'name, email',
    $db->where( eq('phone', $number, _OR), neq('id', 5) ),
    $db->orderBy('name'),
    $db->limit(1)
);

foreach ($result as $row) {
    echo $row->name.' '.$row->email;
}

$json = get_results(JSON, $db);
```
