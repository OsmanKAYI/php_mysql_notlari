<?php
@session_start(); // Oturumu aç
@session_destroy(); // Oturumu sonlandır
?>
<h1>Oturum sonlandı.</h1>
<p><a href='login.php'>Yeniden giriş yap...</a></p>