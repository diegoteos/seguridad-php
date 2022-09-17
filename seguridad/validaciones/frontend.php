<?php
include_once 'encabezado.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion de formularios</title>
</head>

<body>
    <div class="container">
        <br>
        <h1>Validaciones del lado del cliente:</h1>
        <hr>
        <div class="container">
            <div class="container">
                <li>Forzar que un campo sea lleno y no pueda habilitarse la opcion enviar hasta que todos los campos esten llenos, ejemplo:</li>
                <p>Para ello tenemos el atributo required es usado para indicar al usuario que un input es requerido en un elemento antes de que un form pueda ser enviado.</p>
            </div>
        </div>
        <form action="frontend.php" method="post">
            <strong>Campo obligatorio: </strong><input type="text" name="primercampo" id="primercampo" required="hola">
            <button type="submit">Enviar</button>
        </form>
        <hr>
        <div class="container">
            <div class="container">
                <li>Declarar el tipo de datos que se espera, si es texto, numero, correo... ejemmplo:</li>
                <p>Para ello definimos los input como txt, email, password, number, otros.</p>
            </div>
        </div>
        <form action="frontend.php" method="post">
        <strong>Tipo correo electronico:</strong>    
        <input type="email" name="primercampo" id="primercampo" required="hola">
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>

</html>