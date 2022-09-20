<?php

session_start();
if (isset($_SESSION['tipo'])) {
    session_destroy(); // destruimos la session y luego redireccionamos
    header('Location: login.php');
} else {

    echo "No tiene session iniciada";
    
}