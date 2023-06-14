<?php 
    require "conexion.php";

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];

    $insertar = "INSERT INTO profesores (nombre, apellido) VALUES ('$nombre', '$apellido')";

    $query = mysqli_query($conectar, $insertar);

    if($query){
        echo '
        <script>
            alert("El registro se agrego con éxito.");
            location.href="ver_profesores.php";
        </script>
        ';
    }else{
        echo '
        <script>
            alert("No se pudo agregar el registro.");
            location.href="ver_profesores.php";
        </script>
        ';
    }
?>