## Composer Kullanımı

- `composer require` komutu ile paket projeye dahil edilir.
- **Örnek:** `composer require picqer/php-barcode-generator`
- Bunun sonucunda aşağıdaki `composer.json` dosyası oluşur.
- Kütüphanelerin yüklenebilmesi için `composer update` komutu çalıştırılır.
- Bunun sonucunda `vendor` adlı dizin içerisine kütüphane ve bağımlılıkları otomatik olarak yüklenir.

### composer.json

```JSON
{
    "require": {
        "picqer/php-barcode-generator": "^2.2"
    }
}
``` 

### PHP'den Paketlerin Çağrılması

- Aşağıdaki kod çalıştığında tüm proje kütüphaneleri otomatik olarak yüklenir ve kullanıma hazır hale getirilir.

```PHP
<?php
require 'vendor/autoload.php';
```

### Composer Örnekleri
- [Barcode Üretimi](../ornekler/barcode/)
- [QR Code Üretimi](../ornekler/qrcode/)