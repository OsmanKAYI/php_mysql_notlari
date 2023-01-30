
# PDO fetchAll Komutu Kullanımı

```PHP
$servername  = "localhost";
$username    = "root";
$password    = "root";
$dbname      = "test";

try  {
  $conn  =  new  PDO("mysql:host=$servername;dbname=$dbname",  $username,  $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
  $conn->exec("SET names utf8  "); // utf8mb4
  $conn->exec("SET sql_mode='' ");
  // echo "Connected successfully";
}  catch(PDOException  $e)  {
  echo  "Connection failed: "  .  $e->getMessage();
  die();
}

$stmt1  =  $conn->query('SELECT id, name FROM users');
$stmt2  =  $conn->query('SELECT id, name FROM users');
$stmt3  =  $conn->query('SELECT id, name FROM users');
$stmt4  =  $conn->query('SELECT id, name FROM users');

$cevap1 = $stmt1->fetchAll(PDO::FETCH_KEY_PAIR);
$cevap2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
$cevap3 = $stmt3->fetchAll();
$cevap4 = $stmt4->fetchAll(PDO::FETCH_COLUMN, 1); // İlk kolon 0'dan başlar

print_r($cevap1);
print_r($cevap2);
print_r($cevap3);
print_r($cevap4);

```

### Bu komutların ekran çıktısı:

```
Array
(
  [1] => nuri
  [2] => osman
  [3] => kemal
)


Array
(
  [0] => Array
      (
          [id] => 1
          [name] => nuri
      )


  [1] => Array
      (
          [id] => 2
          [name] => osman
      )

  [2] => Array
      (
          [id] => 3
          [name] => kemal
      )

  )


Array
(
    [0] => Array
        (
            [id] => 1
            [0] => 1
            [name] => nuri
            [1] => nuri
        )

    [1] => Array
        (
            [id] => 2
            [0] => 2
            [name] => osman
            [1] => osman
        )

    [2] => Array
        (
            [id] => 3
            [0] => 3
            [name] => kemal
            [1] => kemal
        )

)


Array
(
  [0] => nuri
  [1] => osman
  [2] => kemal
)

```
