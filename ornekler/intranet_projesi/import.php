<?php
require_once '_kutuphanem.php';
$JSON = json_decode(file_get_contents('https://api.genelpara.com/embed/doviz.json'), true);
DD($JSON);
