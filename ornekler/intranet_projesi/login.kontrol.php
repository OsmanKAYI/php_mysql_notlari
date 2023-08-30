<?php
@session_start();
if (isset($_SESSION['girisyapti'])) {
  // Oturum açmış
} else {
  // Giriş yapmamış
  header("location: login.php");
  die();
}
