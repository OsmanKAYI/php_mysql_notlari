## PHP ile Oturum Yönetimi

### Oturum Açma:

```PHP
  @session_start;
  $_SESSION['giris_yapildi'] = 1;
```

### Oturum Kapatma:

```PHP
  @session_start;
  session_destroy();
```

### Oturum Değişkenlerini Listeleme:

```PHP
  @session_start;
  print_r($_SESSION);
```

### Oturum Açmış mı kontrolü:

```PHP
  @session_start;
  if( isset($_SESSION['giris_yapildi']) ) {
    // Kullanıcı daha önce oturum açmış
  } else {
    // Kullanıcı oturum açmamış. Login sayfasına yönlendirelim
    header("location: login.php");
    die();
  }
```

### Oturum Açmak (Login Olmak) Ne Demek?

- `Kullanıcılar` tablosunda o kişinin kaydının olması demektir.
- Bu kayda, kullanıcının girdiği `kullanıcı adı` ve `parola` bilgisinden erişilir

##### Örnek
Kullanıcı Adı bilgisi olarak `nuri@gmail.com` ve şifre olarak `123` kullanıldığını düşünürsek:
```PHP
SELECT * FROM kullanicilar WHERE email='nuri@gmail.com' AND parola='123'
```

- Yukarıdaki SQL sorgusunun 1 kişiye ait 1 adet kayıt getirmesini bekleriz.
- Eğer, bu sorgu sonucunda 
  - kayıt gelmiyorsa: Böyle bir kullanıcı yoktur VEYA kullanıcı adı veya parolası yanlıştır.
  - kayıt geliyorsa: Kayıtlardaki bilgi ile kullanıcının yazdığı doğrudur. Yani, kullanıcı vardır.
- Sorguya cevap olarak kayıt gelmesi, kullanıcının oturumu başlatabileceğini gösterir.
