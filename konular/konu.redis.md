# Redis Örneği

## Redis Kurulumu
```BASH
sudo apt update
sudo apt install redis-server php-redis -y
systemctl enable redis-server
systemctl start redis-server
systemctl restart apache2

```

## PHP ile Redis Kullanımı

```PHP
<?php

$redis = new Redis(); 
$redis->connect('127.0.0.1', 6379); 
// $redis->auth('REDIS_PASSWORD'); // Redis için parola belirlendiyse buraya yazılır

$sql = 'SELECT student_id, first_name, last_name FROM student ';
$cache_key = md5($sql);

if ($redis->exists($cache_key)) {
    $data = unserialize($redis->get($cache_key));
    // echo "Veriler, Redis'den alınmıştır";
} else {
    $pdo = new PDO('mysql:host=' . $mysql_host . '; dbname=' . $database_name, $database_user, $database_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    // echo "Veriler, Veritabanıdan alınmıştır";
    
    $data = []; 
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {          
       $data[] = $row;  
    }  
    $redis->set($cache_key, serialize($data)); 
    $redis->expire($cache_key, 10);
}

echo "Cevap: ";
print_r($data);

```
