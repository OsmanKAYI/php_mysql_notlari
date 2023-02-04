<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create users</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
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
</div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>