# İlk Yapılacaklar (Windows Kullanıcıları İçin)

## xampp İndirilmesi ve Kurulması

- xampp 7.4.33 sürümünün setup dosyasını [buradan](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/7.4.33/xampp-windows-x64-7.4.33-0-VC15.zip/download) indirin.
- İndirilen dosyayı çalıştırın ve `Next (İleri)` düğmesine basarak kurulumu tammalayalım (Herhangi bir özel ayar gerektirmez).
- Kurulum varsayılan olarak `C:\xampp` dizinine yapılacaktır.

### php.ini dosyasının sonuna eklenecekler

Aşağıdaki kodlar `xampp/php/php.ini` dosyasının sonuna eklenecektir

```PHP
display_startup_errors     = On
display_errors             = On
upload_max_filesize        = 128M
upload_max_size            = 128M
post_max_size              = 128M
max_input_vars             = 5000
memory_limit               = -1
error_reporting            = E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE & ~E_WARNING
mbstring.language          = Turkish
mbstring.internal_encoding = UTF-8
```

### my.ini dosyasında yapılacak değişiklikler

`xampp/mysql/my.ini` dosyası içindeki

- `sql_mode=NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION` satırı `sql_mode=''` olarak değiştirilecek

## MySQL yönetimi için Adminer programı kurulumu

- `xammp/htdocs/` dizini altındaki her şey silinir
- `xammp/htdocs/` dizini altında `adminer` adında bir klasör oluşturulur
- https://www.adminer.org/latest.php dosyası indirilir ve `index.php` adı ile `adminer` dizini içine kaydedilir

### MySQL Root kullanıcısı için şifre değiştirme

- `xampp/mysql/bin` dizinine geçiş yapılır
- Aşağıdaki komutlar sırası ile yazılarak MySQL Root kullanıcısının şifresinin değiştirilmesi sağlanır

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
