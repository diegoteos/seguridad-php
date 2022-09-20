<?php

session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: login.php');
}
echo "El usuario logueado es: " . $_SESSION['usuario'] . '<br/>';


echo "Hola tienes session iniciada y tu session es: " . $_SESSION['tipo'] . '<br/>';

echo '<br><a href="logout.php">Cerrar sesion...</a>';