
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OYK 2023 - PHP Sınıfı</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class='container'>

    <form method='POST' action='' class='mt-5'>
        <div class='row'>
            <div class="alert alert-success display-3 text-center" role="alert">
                Sayıları Topla!
            </div>
        </div>

        <div class='row'>
            <div class="col-md-6 mb-5 offset-md-3">
                <input value='<?php echo $_POST['sayi1']; ?>' type="text" class="form-control form-control-lg text-center" name="sayi1" style='font-size: 90px;' placeholder='Sayı 1'>
            </div>
        </div>


        <div class='row'>
            <div class="col-md-6 mb-5 offset-md-3">
                <input value='<?php echo $_POST['sayi2']; ?>' type="text" class="form-control form-control-lg text-center" name="sayi2" style='font-size: 90px;' placeholder='Sayı 2'>
            </div>
        </div>

        <div class='row  mb-5'>
            <div class="d-grid col-md-2 offset-md-4">
                <input class="btn btn-primary btn-lg" type="submit" name="islem" value="TOPLA" style='font-size: 40px;'>
            </div>
            <div class="d-grid col-md-2">
                <input class="btn btn-primary btn-lg" type="submit" name="islem" value="ÇIKAR" style='font-size: 40px;'>
            </div>
        </div>

        <div class='row'>
            <div class="col-md-6 mb-5 offset-md-3">
                <div class="alert alert-danger display-3 text-center" role="alert">


                    <?php
                    if( isset($_POST['islem']) ) {
                        $a = $_POST['sayi1'];
                        $b = $_POST['sayi2'];
                        
                        if( $_POST['islem'] == "TOPLA" ) echo $a + $b;

                        if( $_POST['islem'] == "ÇIKAR" ) echo $a - $b;

                    }

                    ?>

                
                </div>
            </div>
        </div>

    </form>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>


