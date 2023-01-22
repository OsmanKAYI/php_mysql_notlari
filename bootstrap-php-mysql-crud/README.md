
# Bootstrap + PHP + MySQL ile CRUD örneği


### VERİTABANI BAĞLANTISI - Database Connection
```PHP
$servername  =  "localhost";
$username  =  "root";
$password  =  "rootroot";
try  {
  $conn  =  new  PDO("mysql:host=$servername;dbname=test",  $username,  $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
}  catch(PDOException  $e)  {
  echo  "Connection failed: "  .  $e->getMessage();
}
```  

### KAYIT EKLEME - CREATE/INSERT
```PHP
$name  =  "Nuri";
$email =  "nuri@gmail.com";
$sql   =  "INSERT INTO users (name, email) VALUES (:name, :email)";
$stmt  =  $conn->prepare($sql);

$stmt->bindParam(':name',  $name);
$stmt->bindParam(':email',  $email);

$stmt->execute();

echo  "User created";
```
  
 ### KAYIT LİSTELEME - SELECT/READ
```PHP
$stmt  =  $conn->prepare("SELECT id, name, email FROM users");
$stmt->execute();

$users  =  $stmt->fetchAll(PDO::FETCH_ASSOC);
//echo '<pre>'; print_r($users);

foreach($users  as  $user)  {
  echo  $user['id']  ;
  echo  $user['name']  ;
  echo  $user['email']  ;
}
```
  
### KAYIT GÜNCELLEME - UPDATE
```PHP
$name  =  "Nuri Akman";
$email =  "nuriakman@gmail.com";
$id    =  1;

$sql   =  "UPDATE users SET  name  = :name, email = :email WHERE id = :id";
$stmt  =  $conn->prepare($sql);

$stmt->bindParam(':name',  $name);
$stmt->bindParam(':email',  $email);

$stmt->execute();
echo  "User updated";
```
  
  ### KAYIT SİLME - DELETE
```PHP
$id   =  1;
$sql  =  "DELETE  FROM users WHERE id = :id";
$stmt =  $conn->prepare($sql);

$stmt->bindParam(':id',  $id);

$stmt->execute();
echo  "User deleted";
```

