<?php 
    require "conexion.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="cont1 ancho">
        <div class="cont_in2">
            <form action="nuevo_alum.php" method="post" name="form">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre">
                <br>
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido">
                <br>
                <label for="">Selecciona tus materias:</label>
                <br>
                <?php 
                    // Consulta para obtener las materias
                    $consulta = "SELECT id, nombre FROM materias";
                    $resultados = $conectar->query($consulta);

                    // Generar las opciones de materias
                    if ($resultados->num_rows > 0) {
                        while ($row = $resultados->fetch_assoc()) {
                            $materiaId = $row["id"];
                            $nombreMateria = $row["nombre"];
                            echo "<input type='checkbox' name='opciones[]' value='$materiaId'>$nombreMateria<br>";
                        }
                    }
                ?>
                <br>
                <button type="submit">Guardar</button>
            </form>
        </div>
    </div>
</body>
</html>