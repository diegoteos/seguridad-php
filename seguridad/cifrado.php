<?php
if (isset($_POST['contraseña'])) {
    $pass = $_POST['contraseña'];

echo '<br>';
$contraseña_cifrada = password_hash('admin', PASSWORD_DEFAULT, ['cost' => 10]);
echo '<br>';
echo $contraseña_cifrada;
echo '<br>';


if (password_verify($pass, $contraseña_cifrada)){  // verificamos si la contraseña ingresada es igual a la segunda que debe estar en la base de datos
    echo "las contraseñas son igugales";
    echo '<br>';
    $pass = password_hash($pass, PASSWORD_DEFAULT, ['cost' => 10]);
    echo $pass;
} else  {
    echo "las contraseñas no son iguales";
    echo '<br>';
}
} else {
echo "Ingrese sus credenciales de acceso";    
}



?>
<!doctype html>
<html lang="es">

<head>
    <title>Administrador</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <br><br />
                <div class="card">
                    <div class="card-header">
                        Ingreso al sistema
                    </div>
                    <div class="card-body">
                        <?php if (isset($mensaje)) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $mensaje; ?>
                            </div>
                        <?php } ?>
                        <form method="post">
                            <div class="form-group">
                                <label>Usuario:</label>
                                <input type="txt" class="form-control" name="usuario" aria-describedby="emailHelp" placeholder="Ingrese su usuario">
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Contraseña:</label>
                                <input type="password" class="form-control" name="contraseña" placeholder="Ingresa tu contraseña">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Ingresar</button>
                        </form>


                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>