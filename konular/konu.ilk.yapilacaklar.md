# İlk Yapılacaklar (Windows Kullanıcıları İçin)

## xampp İndirilmesi ve Kurulması

- xampp setup dosyasını [buradan](https://www.apachefriends.org/download.html) indirin.
- İndirilen dosyayı çalıştırın ve peşisıra `Next (İleri)` düğmesine basarak kurulumu tammalayalım (Herhangi bir özel ayar gerektirmez).
- Kurulum varsayılan olarak `C:\xampp` dizinine yapılacaktır. 

### php.ini dosyasının sonuna eklenecekler

```PHP
display_startup_errors = On
display_errors         = On
upload_max_filesize    = 128M
upload_max_size        = 128M
post_max_size          = 128M
max_input_vars         = 5000
error_reporting        = E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE & ~E_WARNING
mbstring.language          = Turkish
mbstring.internal_encoding = UTF-8
```

### my.ini dosyasında yapılacak değişiklikler

- `sql_mode=NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION` satırı `sql_mode=''` olarak değiştirilecek

## MySQL yönetimi için Adminer programı kurulumu

- `xammp/htdocs` dizini altındaki her şey silinir
- `xammp/htdocs` dizini altında `adminer` adında bir klasör oluşturulur.
- https://www.adminer.org/latest.php dosyası indirilir ve `index.php` adı ile `adminer` dizini içine kaydedilir.

### MySQL Root kullanıcısı için şifre değiştirme
- `xampp/mysql/bin` dizinine geçiş yapılır.
- Aşağıdaki komnutlar sırası ile yazılarak MySQL Root kullanıcısının şifresinin değiştirilmesi sağlanır
```SQL
mysql -u root -p
  SET PASSWORD FOR 'root'@'localhost' = PASSWORD("root");
  exit;
```

### MySQL Yeni kullanıcı ekleme

```SQL
CREATE USER 'dbadmin'@'localhost' IDENTIFIED BY 'dbadmin';
GRANT ALL PRIVILEGES ON *.* TO 'dbadmin'@'localhost' WITH GRANT OPTION;
FLUSH PRIVILEGES;
```
