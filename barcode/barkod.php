
<h1>PHP İle Barkod Üretme</h1>
<?php
require 'vendor/autoload.php';

// This will output the barcode as HTML output to display in the browser
$generator = new Picqer\Barcode\BarcodeGeneratorPNG();
echo '<p></p><img src="data:image/png;base64,' . base64_encode($generator->getBarcode('8682109342193', $generator::TYPE_CODE_128)) . '"><br>8682109342193</p>';
echo '<p></p><img src="data:image/png;base64,' . base64_encode($generator->getBarcode('4547741547752', $generator::TYPE_CODE_128)) . '"><br>4547741547752</p>';
echo '<p></p><img src="data:image/png;base64,' . base64_encode($generator->getBarcode('8469877445227', $generator::TYPE_CODE_128)) . '"><br>8469877445227</p>';

