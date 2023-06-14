<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users list</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        
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

    <?php
        include('db/connection.php');
        $stmt = $DB->prepare("SELECT id, name, email FROM users");
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //echo '<pre>'; print_r($users);

        foreach($users as $user) { ?>
            <tr>
                <td> <?= $user['id'] ?> </td>
                <td> <?= $user['name'] ?> </td>
                <td> <?= $user['email'] ?> </td>
                <td class='text-end'>
                    <a href='update.php?id=<?= $user['id'] ?>' class='btn btn-success'>Update</a>
                    <form action='db/action.php' method='post' class='d-inline'>
                        <input type='hidden' name='id' value='<?= $user['id']; ?>'>
                        <button class='btn btn-danger' type='submit' name='delete'>Delete</button>
                    </form>
                </td>
            </tr>
        <?php } ?>

    </table>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

