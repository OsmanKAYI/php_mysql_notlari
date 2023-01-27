## PHP ile Oturum Yönetimi

### Oturum Açma:
```PHP
  <?php
  @session_start;
  $_SESSION['giris_yapildi'] = 1;
```

### Oturum Kapatma:
```PHP
  <?php
  @session_start;
  session_destroy();
```

### Oturum Değişkenlerini Listeleme:
```PHP
  <?php
  @session_start;
  session_destroy();
```

### Oturum Açmış mı kontrolü:
```PHP
  <?php
  @session_start;
  if( isset($_SESSION['giris_yapildi']) ) {
    // Kullanıcı daha önce oturum açmış
  } else {
    // Kullanıcı oturum açmamış. Login sayfasına yönlendirelim
    header("location: login.php");
    die();
  }
```

