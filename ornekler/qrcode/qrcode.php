
Örnek Kullanım: <a href='?mesaj=Hello World'>?mesaj=Hello World</a>
<h1>PHP İle QR Code Üretme</h1>
<?php
require 'vendor/autoload.php';

use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;

$renderer = new ImageRenderer(
    new RendererStyle(800),
    new ImagickImageBackEnd()
);
$writer = new Writer($renderer);
$MESAJ = (isset($_GET['mesaj'])) ? $_GET['mesaj'] : 'Hello World!';

$qr_image = base64_encode($writer->writeString($MESAJ));
echo "<img src='data:image/png;base64, {$qr_image}' />";

/*
  // Sonucu RESİM DOSYASI olarak üretmek için:
  $writer->writeFile($MESAJ, 'qrcode.png');
  echo "<img src='qrcode.png'>";
**/
