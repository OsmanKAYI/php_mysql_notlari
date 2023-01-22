# MySQL CLI Komutları

**Giriş İçin:**

`mysql -u root -p`

**Root kullanıcısının şifresini değiştirmek için:**

``` SQL
USE mysql;
SET PASSWORD FOR root@'localhost' = PASSWORD('rootroot');
FLUSH PRIVILEGES;
```


**Girdikten Sonra:**

```SQL
SHOW DATABASES;
USE OGRENCI;
CREATE TABLE OGRENCI (id int  AUTO_INCREMENT PRIMARY KEY, ad varchar(50), yas int);
INSERT INTO OGRENCI SET ad='osman';
INSERT INTO OGRENCI SET ad='nuri', yas=20;
SELECT * FROM OGRENCI;
UPDATE OGRENCI set yas=18 WHERE id=1;
SELECT * FROM OGRENCI;
UPDATE OGRENCI set yas=20, ad='Osman' WHERE id=2;
SELECT * FROM OGRENCI;
DELETE FROM OGRENCI WHERE id=2;
SELECT * FROM OGRENCI;
DROP TABLE OGRENCI;
SHOW TABLES;
```
