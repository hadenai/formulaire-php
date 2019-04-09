<?php


require_once '../vendor/autoload.php';

Use App\Wcs\Hello;
Use HelloWorld\SayHello;

$say = new SayHello();
$helo = new \App\Wcs\Hello();
echo $helo->talk ();
echo $say->world ();
