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
        <h2>Lista de Profesores:</h2><br>
        <a href="index.php">Regresar</a>
        &nbsp;|&nbsp;
        <a href="agregar_prof.php">Agregar</a><br>
        <div class="cont_in2">
            <?php 
                require "conexion.php";
                $todos_datos = "SELECT * FROM profesores ORDER BY id ASC";
                $resultado = mysqli_query($conectar, $todos_datos);
            ?>
            <table class="tabladatos">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>EDITAR</th>
                    <th>ELIMINAR</th>
                </tr>
                <?php
                    while($fila = mysqli_fetch_assoc($resultado)){
                ?>
                <tr>
                    <td><?php echo $fila["id"]."<br>";?></td>
                    <td><?php echo $fila["nombre"]."<br>";?></td>
                    <td><?php echo $fila["apellido"]."<br>";?></td>
                    <td><a href='editar_prof.php?id=<?php echo $fila["id"];?>'>EDITAR</a></td>
                    <td><a href="#" onclick="validar('eliminar_prof.php?id=<?php echo $fila["id"];?>')">Eliminar</a></td>
                    
                </tr>
                <?php
                    }
                ?>
            </table>
        </div>
    </div>
</body>
</html>

<script>
    function validar(url){
        var eliminar = confirm("¿SEGURO QUE QUIERES ELIMINAR EL REGISTRO?");
        if(eliminar == true){
            window.location=url;
        }
    }
</script>