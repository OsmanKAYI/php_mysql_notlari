# KARALAMALAR

## Anlatılmasında fayda olan konular

- https://www.npmjs.com/package/json-server
- https://github.com/nuriakman/test/blob/master/db.json
- https://my-json-server.typicode.com/nuriakman/test

## Tavsiye Video Eğitim Setleri

- https://laracasts.com/series/learn-vue-3-step-by-step
- https://laracasts.com/series/php-for-beginners-2023-edition
- https://www.koderhq.com/tutorial/vue/
- https://www.koderhq.com/tutorial/php/

## Tavsiye Edilecek Siteler

- https://www.javatpoint.com/linux-tutorial 

## Ödev: Tercih Robotu

- Veritabanı için kaynak: [YÖK](https://www.osym.gov.tr/TR,25658/2023-yuksekogretim-kurumlari-sinavi-yks-yuksekogretim-programlari-ve-kontenjanlari-kilavuzu.html)

## Güvenlik

- [Tayfun Erbilen - TOKEN Neden Önemli?](https://www.youtube.com/watch?v=FNoAcuoLt-w)

## ALGORİTMA
- [JavaScript ile Kolay Algoritmalar](https://www.youtube.com/playlist?list=PL0Au88Qum4UmiN0WHD6NKrZNpQqiUwwqe)

## Yapılacak İşler

### DNS
- https://wizardzines.com/comics/ Bu sayfadan işe yarar olanların listesini çıkarılacak. Özellikle DNS!
- Notlara DNS başlığı eklenmeli ve şu sayfaya yer verilmeli: https://messwithdns.net/

## Telegram API'si ile mesaj gönderme

- Bu konu notlara eklenmeli!

## API

- Kendi uygulamamızın Twit atabilmesi.
- Kendi eticaret mağazamızdaki ürünleri Trendyol'da da yayınlama
- Siparişi getiren kuryenin konumunun haritada gösterilmesi
- Twitter, farklı platformlar için uygulama üretiyor. 
- Her platform için Twitter uygulaması TEKRAR TEKRAR mı yazılıyor?


Wishlist siteye eklenebilir! Askıda Bilet olarak eklenebilir
https://www.amazon.co.uk/gp/registry/wishlist/2ASV4RHBSM16H/026-9090951-0551667

## VueJS
- https://laracasts.com/series/learn-vue-3-step-by-step
- https://laracasts.com/series/whats-new-in-vue-3

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


# Bağlantılar

- https://fslightbox.com/ Zoom Image ve Resim Galerisi https://furkangiray.com/fslighbox-js-kullanimi/
- https://grid.malven.co/
- https://flexbox.malven.co/
- https://www.svgrepo.com/


# Dahil edilebilecek içerikler
- https://furkangiray.com/xml-dosyasini-php-array-diziye-cevirme/
- https://furkangiray.com/php-coklu-fotograf-yukleme/
- https://furkangiray.com/php-ile-json-yapisi-olusturma/
- https://furkangiray.com/form-butonu-ust-uste-tiklanmayi-kapatma/
- https://furkangiray.com/tarih-secici-ekleme/ Ana sayfası: https://github.com/mikecoj/MCDatepicker
- https://furkangiray.com/ana-sayfa-acilisina-modal-ekleme/
- https://furkangiray.com/javascript-metni-kopyala-butonu/
- https://furkangiray.com/dark-mode-gece-modu%f0%9f%8c%9a%f0%9f%8c%9d-gecisi/ Ana sayfası: https://darkmodejs.learn.uno/
- https://furkangiray.com/owl-carousel-2-kullanimi/ Ana sayfası: https://owlcarousel2.github.io/OwlCarousel2/
- https://furkangiray.com/jquery-ile-yukari-cik-butonu/
- https://furkangiray.com/js-ile-yaziya-silme-yazma-animasyon/ Code pen sayfası: https://codepen.io/furkangiray/pen/XWdGZoB
- https://furkangiray.com/htaccess-ile-dosya-uzantilarini-kaldirma/
- https://furkangiray.com/belirli-bir-sure-sonra-yonlendirme/
- https://furkangiray.com/whatsapp-sohbet-butonu-ekleme/
- https://furkangiray.com/php-ile-form-mail-gonderimi/
- https://furkangiray.com/css-metin-secmeyi-devre-disi-birakma/
- https://furkangiray.com/css-scroll-behavior-ozelligi/
- https://furkangiray.com/css-ile-yaziya-arka-plan-vermek/
- https://www.digitalocean.com/community/tutorials/how-to-reset-your-mysql-or-mariadb-root-password-on-ubuntu-20-04
- https://www.digitalocean.com/community/tutorials/how-to-import-and-export-databases-in-mysql-or-mariadb
- https://github.com/spatie/array-to-xml
- https://github.com/suleymanozcan/PHP_PDO_Ornekleri
- https://github.com/suleymanozcan/PHP_PDO_Htaccess_Trigger_Ornekleri


## MindMap
- https://tobloef.com/text2mindmap/


## Manipulating arrays and objects in JavaScript

https://tr.javascript.info/

https://developer.mozilla.org/en-US/docs/Web/JavaScript


Komut|Açıklaması
---|---
Kaynak|https://www.youtube.com/watch?v=n3NKGsM3iEw
Kaynak|https://www.freecodecamp.org/news/manipulating-arrays-in-javascript/
`toString()`|converts an array to a string separated by a comma.
`join()`|combines all array elements into a string.
`concat`|combines two arrays together or add more items to an array and then return a new array.
`push()`|adds item(s) to the end of an array and changes the original array.
`pop()`|removes the last item of an array and returns it
`shift()`|removes the first item of an array and returns it
`unshift()`|adds an item(s) to the beginning of an array and changes the original array.
`splice()`|changes an array, by adding, removing and inserting elements.
`slice()`|copies a given part of an array and returns that copied part as a new array. It does not change the original array.
`split()`|divides a string into substrings and returns them as an array.
`indexOf()`|looks for an item in an array and returns the index where it was found else it returns -1
`lastIndexOf()`|looks for an item from right to left and returns the last index where the item was found.
`filter()`|creates a new array if the items of an array pass a certain condition.
`map()`|creates a new array by manipulating the values in an array.
`reduce()`|calculates a single value based on an array.
`forEach()`|iterates through an array, it applies a function on all items in an array
`every()`|checks if all items in an array pass the specified condition and return true if passed, else false.
`some()`|checks if an item (one or more) in an array pass the specified condition and return true if passed, else false.
`includes()`|checks if an array contains a certain item.


## JavaScript String Methods/Functions You should Know

Komut|Açıklaması
---|---
Kaynak|https://codequs.com/p/ryERJilLL
`length`|It is used to count the number of characters in a string javascript.
`toLocaleLowerCase()`|The javascript toLocaleLowerCase() is used to changed string into lower case.
`toLocaleUpperCase()`|The javascript toLocaleUpperCase () is used to changed string into upper case.
`indexOf()`|The indexof () method returns the first position of a specified value in a string.
`slice()`|The slice () method removes the parts of a string and returns the extracted parts to a new string. Use the Start and End Ultimate to specify the part of the string that you want to remove.
`includes()`| The includes() method is used to determine whether a string contains the characters of a specified string or not. If is exist return true or not return false.
`concat()`| The concat() method is used for join two or more strings.
`lastIndexOf()`| The lastIndexOf() the method returns the index of the last occurrence of a specified text in a string:
`split`|The javascript split method, which is used to convert string to an array:
`search()`|The javascript search () method searches a string for the specified value, and returns the status of the match.
`substring()`|The Javascript substring() method is used to removes the characters from one string, between two specified indices, and returns the new substring.
`substr()`|A string substr() method begins on the character in the specified position, and returns the specified number of characters.
`replace()`|The Javascript replace() changes the defined value to an another value:
`charAt()`|The Javascript charAt() is used to take a character to a described index location:
`charCodeAt()`|The charCodeAt() method returns the Unicode of the character at a specified index in a string:
`trim()`|The javascript trim() method removes whitespace from both sides of a given string:
`match()`|The match() method searches a string for a match against a regular expression, and returns the matches, as an Array object.
`toString()`|The javascript toString() method returns the value of a String object.
`valueOf()`|The javascript valueOf() method, which is used to gets the primitive value of a String object.


