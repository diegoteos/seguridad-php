<?php
$cifrar = 'Hola';

echo '<br>';
$contraseña_cifrada = password_hash($cifrar, PASSWORD_DEFAULT, ['cost' => 10]);
echo '<br>';
echo $contraseña_cifrada;
echo '<br>';


if (password_verify($cifrar, $contraseña_cifrada)){  // veerificamos si la contraseña ingresada es igual a la segunda que debe estar en la base de datos
    echo "las contraseñas son igugales";
    echo '<br>';
} else  {
    echo "las contraseñas no son idugales";
    echo '<br>';
}