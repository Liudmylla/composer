<?php
require_once __DIR__ . '/../vendor/autoload.php';
use App\Wcs\Hello ;
$string =new Hello();
echo $string->talk();