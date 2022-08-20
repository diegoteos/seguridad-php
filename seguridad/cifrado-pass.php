<?php
/*
$algo = '.';
$pass = 'rasmuslerdorf';
$contraseña = crypt($algo, 'alksd');

echo password_hash($pass, )





var_dump($algo);
echo '<br>';
echo $contraseña;

*/



$fecha = array(
    "dia" => 01,
    "mes" => 'diciembre',
    "año" => 1995,
    "nombre" => 'Juan Luis Guerra'
);

$nombre = $fecha['nombre'];
$dia = $fecha['dia'];
$mes = $fecha['mes'];
$año = $fecha['año'];

echo "Su nombre es: " . $nombre . "<br>";
echo "Nacio el : " . $dia . "<br>";
echo "Mes: " . $mes . "<br>";
echo "Año: " . $año . "<br>";
