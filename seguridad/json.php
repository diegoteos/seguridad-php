<?php

$datos = file_get_contents('pago.php');
$datos = json_encode($datos);
var_dump($datos);
echo '<br><br>';
$hola = explode(".", "https://zyro.com/es/blog/ejemplos-de-paginas-web-en-html-sencillas/");

var_dump($hola);