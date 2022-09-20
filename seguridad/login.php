<?php
session_start();

if (isset($_SESSION['id'])) {
    header('Location: index.php');
}
if (isset($_POST['contraseña']) && isset($_POST['usuario'])) { // si existe el dato recibido mediante POST con el nombre contraseña, se ingresa a la condicion
    $pass = $_POST['contraseña'];
    $usuario = $_POST['usuario'];
    $user = 'admin';
    echo '<br>';
    $contraseña_cifrada = password_hash('admin', PASSWORD_DEFAULT, ['cost' => 10]);
    echo '<br>';


    if (password_verify($pass, $contraseña_cifrada) && $usuario == $user) {  // verificamos si la contraseña ingresada es igual a la segunda que debe estar en la base de datos
        $_SESSION['usuario'] = $user;
        $_SESSION['tipo'] = 1;
        header("location: index.php");
    } else {
        $mensaje = '<div class="alert alert-danger" role="alert">
        Usuario o contraseña incorrecto.
      </div>';
        echo '<br>';
    }
} else {
    $mensaje = '<div class="alert alert-success" role="alert">
    Ingrese sus credenciales para continuar...
  </div>';
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
                        <?php if (isset($mensaje)) {
                            echo $mensaje;
                        } ?>
                        <form method="post">
                            <div class="form-group">
                                <label>Usuario:</label>
                                <input type="txt" class="form-control" name="usuario" aria-describedby="emailHelp" placeholder="Ingrese su usuario" required>
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Contraseña:</label>
                                <input type="password" class="form-control" name="contraseña" placeholder="Ingresa tu contraseña" required>
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