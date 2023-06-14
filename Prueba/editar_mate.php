<?php 
    $id = $_GET["id"];
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
            <form action="editar_mate2.php" method="post" name="form">
                <input type="hidden" id="id" name="id" value="<?php echo $id?>">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre">
                <br>
                <select name="profesor" id="profesor">Profesor:
                <option value="">Selecciona el profesor</option>
                <?php 
                    require "conexion.php";
                    // Consulta para obtener los profesores
                    $consulta = "SELECT id, nombre, apellido FROM profesores";
                    $resultados = $conectar->query($consulta);

                    // Generar las opciones de profesor
                    if ($resultados->num_rows > 0) {
                        while ($row = $resultados->fetch_assoc()) {
                            $profesorId = $row["id"];
                            $nombreProfesor = $row["nombre"] . " " . $row["apellido"];
                            echo "<option value='$profesorId'>$nombreProfesor</option>";
                        }
                    }
                ?>
                </select>
                <br>
                <button type="submit">Confirmar</button>
            </form>
        </div>
    </div>
</body>
</html>