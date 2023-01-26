
# Bootstrap + PHP + MySQL ile CRUD örneği

## Bootstrap İşlemleri

### Boş HTML Şablonu

```HTML
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

</body>
</html>
```

### Boş Bootstrap Şablonu

```HTML
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
  <div class="container">

    <!-- İÇERİK BURAYA GELECEK -->

  </div>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
```

## Kullanıcıları Listeleme Yalın HTML Sayfası

```HTML
<table>
  <tr>
    <th>Name</th>
    <th>eMail</th>
    <th>Action</th>
  </tr>
  <tr>
    <td>Person 1</td>
    <td>email 1</td>
    <td>
      <button>Update</button>
      <button>Delete</button>
    </td>
  </tr>
  <tr>
    <td>Person 2</td>
    <td>email 2</td>
    <td>
      <button>Update</button>
      <button>Delete</button>
    </td>
  </tr>
</table>
```

## Kullanıcı Listeleme Bootstrap Sayfası

```HTML
        <div class="row mt-3 mb-3">
            <div class="col-md-6">
                <h2>Users list</h2>
            </div>
            <div class="col-md-6 text-end">
                <a href="create.php" class="btn btn-primary">Create</a>
            </div>
        </div>

        <table class='table table-striped table-light table-hover'>
            <tr>
                <th> ID </th>
                <th> Name </th>
                <th> EMail </th>
                <th class='text-end'> Actions </th>
            </tr>

            <tr>
              <td> 1 </td>
              <td> Person 1 </td>
              <td> email 1 </td>
              <td class='text-end'>
                  <a href='update.php?id=1' class='btn btn-success'>Update</a>

                  <form action='db/action.php' method='post' class='d-inline'>
                      <input type='hidden' name='id' value='1'>
                      <button class='btn btn-danger' type='submit' name='delete'>Delete</button>
                  </form>

              </td>
            </tr>

        </table>
```

### Kullanıcı Ekleme Yalın HTML Sayfası

```HTML
    <h2>Create user</h2>
    <form action="db/action.php" method="post">
        <p>Name: <input type="text" name="name"></p>
        <p>eMail: <input type="text" name="email"></p>
        <button type="submit" name="create">Create User</button>
    </form>
```

### Kullanıcı Ekleme Bootstrap Sayfası

```HTML
    <h2 class="mt-5">Create user</h2>
    <form action="db/action.php" method="post" class="border p-5">
        <div>
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>

        <div class="mt-3">
            <label for="email" class="form-label">EMail</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>

        <div class="mt-3">
            <button type="submit" name="create" class="btn btn-primary">Create User</button>
        </div>
    </form>
```

## MySQL İşlemleri

### Tablo Oluşturma

```SQL

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`) VALUES
  (1,'Nuri AKMAN','nuri@gmail.com'),
  (2,'Osman KAYI','osman@gmail.com');
```

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

