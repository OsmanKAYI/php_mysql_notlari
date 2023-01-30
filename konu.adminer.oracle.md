
# Windows'da xampp ve adminer ile ORACLE'a bağlantısı

- Adım 1:
  - Bu yazıdaki açıklamalar okunur: https://blogs.oracle.com/opal/post/installing-xampp-on-windows-for-php-and-oracle-database

- Adım 2:
  - Buradaki şu program indirilir: https://www.oracle.com/database/technologies/instant-client/microsoft-windows-32-downloads.html
  - Basic Package   instantclient-basic-nt-21.7.0.0.0dbru.zip

- Adım 3:
  - İndirilen dosya içeriği C:\oracle\instantclient_21_7 dizinine kopyalanır

- Adım 4:
  - PATH'e şu adres eklenir: C:\oracle\instantclient_21_7

- Adım 5:
  - php.ini içindeki "extension=php_oci8_12c.dll;" satırı önündeki ";" kaldırılır ve dosya kaydedilir.

- Adım 6:
  - Apache yeniden başlatılır

