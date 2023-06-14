<?php 
    require "conexion.php";

    $nombre = $_POST["nombre"];
    $profesorId = $_POST["profesor"];

    $insertar = "INSERT INTO materias (nombre, profesor_id) VALUES ('$nombre', '$profesorId')";

    $query = mysqli_query($conectar, $insertar);

    if($query){
        echo '
        <script>
            alert("El registro se agrego con éxito.");
            location.href="ver_materias.php";
        </script>
        ';
    }else{
        echo '
        <script>
            alert("No se pudo agregar el registro.");
            location.href="ver_materias.php";
        </script>
        ';
    }
?>