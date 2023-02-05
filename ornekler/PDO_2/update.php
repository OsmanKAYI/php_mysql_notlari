<?php

    require_once('db.php');

    if(isset($_POST['name'])){
        ///////////////////////////////////////
        /////////////////////////////////////// GÜNCELLEME İŞLEMİ 
        ///////////////////////////////////////
        // echo "<pre>"; print_r($_POST);
        // echo "<pre>"; print_r($_GET);

        $name  = $_POST['name'];
        $email = $_POST['email'];
        $id    = $_GET['id'];

        $sql = "UPDATE users SET name = :name, email = :email WHERE id = :id";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':name',  $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':id',    $id);

        // die(date("H:i:s"));
        $stmt->execute();
        echo "User updated";
    }

    $id    = $_GET['id'];

    $sql = "SELECT * FROM users WHERE id = :id";
    $stmt = $conn->prepare($sql);
    
    $stmt->bindParam(':id', $id);
    
    $stmt->execute();

    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $user  = $users[0];

    // echo "<pre>"; print_r($users);
?>

<h1>KAYIT GÜNCELLEME</h1>

<form method='POST'>
    <p>user name:  <input type='text' name='name'  value='<?php echo $user['name'];  ?>'></p>
    <p>user email: <input type='text' name='email' value='<?php echo $user['email']; ?>'></p>
    <p><input type='submit' value='GÜNCELLE'></p>
</form>

<p><a href='list.php'>Listeye Dön</a></p>