<?php
$pass = 'holaj';

echo '<br>';
$password = password_hash($pass, PASSWORD_DEFAULT, ['cost' => 5]);
$p = password_hash($pass, PASSWORD_DEFAULT, ['cost' => 5]);
echo '<br>';
echo $password;
echo '<br>';
echo $p;
echo '<br>';


if (password_verify($pass, $password)){  // veerificamos si la contraseña ingresada es igual a la segunda que debe estar en la base de datos
    echo "las contraseñas son igugales";
    echo '<br>';
} else  {
    echo "las contraseñas no son idugales";
    echo '<br>';
}
if (password_verify('holaj', $p)){  // veerificamos si la contraseña ingresada es igual a la segunda que debe estar en la base de datos
    echo "las contraseñas son igugales";
    echo '<br>';
} else  {
    echo "las contraseñas no son idugales";
    echo '<br>';
}