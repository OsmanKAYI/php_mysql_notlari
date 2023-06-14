<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update users</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <?php
        if(!isset($_GET['id']) || empty($_GET['id'])) {
            echo "ID is required"; exit;
        }
        include('db/connection.php');
        $SORGU = $DB->prepare("SELECT id, name, email FROM users WHERE id = :id");
        $SORGU->bindParam(':id', $_GET['id']);
        $SORGU->execute();
        $user = $SORGU->fetch(PDO::FETCH_ASSOC);
    ?>
    <h2 class="mt-5">Update user</h2>
    <form action="db/action.php" method="post" class="border p-5">
        <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
        <div>
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="<?php echo $user['name'] ?>">
        </div>
        
        <div class="mt-3">
            <label for="email" class="form-label">EMail</label>
            <input type="email" name="email" id="email" class="form-control" value="<?php echo $user['email'] ?>">
        </div>

        <div class="mt-3">
            <button type="submit" name="update" class="btn btn-primary">Update User</button>
        </div>
    </form>
</div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>