
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilo.css">



<body>  
<div class="container">

    
    <?php

$alumnos = simplexml_load_file('alumnos.xml');

$total_alumnos = count($alumnos->alumno);

echo "<table class='table table-striped table-bordered' border='1'>\n";
echo "<tr><th>Nombre</th><th>Apellido</th><th>Nota</th></tr>\n";

for ($i = 0; $i < $total_alumnos; $i++){
    echo "<tr><td>".$alumnos->alumno[$i]->nombre."</td><td>" . $alumnos->alumno[$i]->apellido. "</td><td>".$alumnos->alumno[$i]->nota."</td></tr>\n";
}

echo "</table>\n";
?>
</div>