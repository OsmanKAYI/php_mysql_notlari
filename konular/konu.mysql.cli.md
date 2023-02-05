# MySQL CLI Komutları

### Giriş İçin:

`mysql -u root -p`

### Girdikten Sonra:

```SQL
SET PASSWORD FOR root@'localhost' = PASSWORD('root');

SHOW DATABASES;

DROP DATABASE OKUL;

CREATE DATABASE OKUL;

SHOW DATABASES;

USE OKUL;

SHOW TABLES;

CREATE TABLE OGRENCI (
    id int  AUTO_INCREMENT PRIMARY KEY, 
    ad varchar(50), 
    yas int
);

SHOW TABLES;

INSERT INTO OGRENCI SET ad='osman';

INSERT INTO OGRENCI SET ad='nuri', yas=20;

SELECT * FROM OGRENCI;

UPDATE OGRENCI set yas=18 WHERE id=1;

SELECT * FROM OGRENCI;

UPDATE OGRENCI set yas=25, ad='Nuri' WHERE id=2;

SELECT * FROM OGRENCI;

DELETE FROM OGRENCI WHERE id=2;

SELECT * FROM OGRENCI;

TRUNCATE TABLE OGRENCI;

SELECT * FROM OGRENCI;

DROP TABLE OGRENCI;

SHOW TABLES;

DROP DATABASE OKUL;

EXIT;
```

## MySQL'e terminalden .SQL dosyası import etme

`mysql -u root -p DATABASEADI < sql/dosyasi/yolu.sql`

### MySQL için PATH Tanımı

- Sistemde herhangi bir dizin içerisindeyken `mysql` veya `php` yazıldığında programların çalışabilmesi için `PATH` tanımı yapılmalıdır.
- PATH tanımı Ortam Değişkenleri ekranından yapılır.
- Bunun için `c:\xampp\mysql\bin` ve `c:\xampp\php` adreslerinin PATH'e eklenmesi gerekir.
- [PATH tanım ekranından](https://www.java.com/tr/download/help/path_tr.html) ekleme yapılabilir.


