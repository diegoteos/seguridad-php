<?php
$pass = 'hola';

echo '<br>';
$password = password_hash($pass, PASSWORD_DEFAULT, ['cost' => 5]);
echo '<br>';

echo '<br>';
if (password_verify('hola', $password)){  // veerificamos si la contraseña ingresada es igual a la segunda que debe estar en la base de datos
echo "las contraseñas son idugales";
} else  {
    echo "las contraseñas no son idugales";
}