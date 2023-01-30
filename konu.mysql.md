# MySQL İçinde SQL Komutları Kullanımı

## MySQL Root kullanıcısı için şifre değiştirme

```SQL
mysql -u root -p
  SET PASSWORD FOR 'root'@'localhost' = PASSWORD("root");
  exit;
```

## MySQL Yeni kullanıcı ekleme
```SQL
CREATE USER 'dbadmin'@'localhost' IDENTIFIED BY 'dbadmin';
GRANT ALL PRIVILEGES ON *.* TO 'dbadmin'@'localhost' WITH GRANT OPTION;
FLUSH PRIVILEGES;
```

## MySQL terminali içinde SQL komutlarının kullanımı

- MySQL terminaline girebilmek için `mysql -u root -p` komutu yazılır
- Root kullanıcısının parolası girilerek terminal başlatılır


```SQL

-- Yorum satırı

/ *
	Bu aralıkta
	yorum satırları
	bulunur
* /

SET NAMES utf8;

SET sql_mode = '';

SET NAMES utf8mb4;

DROP DATABASE IF EXISTS test;

CREATE DATABASE test;

USE test;

DROP TABLE IF EXISTS users;

CREATE TABLE users (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(50) NOT NULL,
  mail varchar(50) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

TRUNCATE TABLE users;

INSERT INTO users (id, name, mail) VALUES
(1,	'nuri','nuri@gmail.com'),
(2,	'osman','osman@gmail.com'),
(3,	'kemal','kemal@gmail.com');

TRUNCATE TABLE users;

INSERT INTO users (name, mail) VALUES
('nuri','nuri@gmail.com'),
('osman','osman@gmail.com'),
('kemal','kemal@gmail.com');

INSERT INTO users 
SET 
	name='kadir', 
	mail='kadir@gmail.com';

SELECT * FROM users;

SELECT * FROM users WHERE name='kadir';

UPDATE users SET mail='kadir@hotmail.com' WHERE name='kadir';

UPDATE users SET mail='kadir@hotmail.com' WHERE id=4;

DELETE FROM users WHERE id=4;


```
