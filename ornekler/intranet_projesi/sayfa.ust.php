<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bizim Şirket</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

  <div class='container'>

    <div class='row text-center'>
      <h1><a href='index.php'>İntranet Sayfamız</a></h1>
      <h5>Kullanıcı: <?php echo $_SESSION['adsoyad']; ?></h5>
      <div class='row text-end'>
        <p><a href='logout.php' class="btn btn-primary btn-sm"> Oturumu Kapat </a></p>
      </div>
    </div>