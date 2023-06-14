<?php 
    require "conexion.php";

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $materias = $_POST["opciones"];
    $array_materias = implode(",", $materias);  // Combina las opciones seleccionadas en una cadena separada por comas


    $insertar = "INSERT INTO alumnos (nombre, apellido, materias) VALUES ('$nombre', '$apellido', '$array_materias')";

    $query = mysqli_query($conectar, $insertar);

    if($query){
        echo '
        <script>
            alert("El registro se agrego con éxito.");
            location.href="ver_alumnos.php";
        </script>
        ';
    }else{
        echo '
        <script>
            alert("No se pudo agregar el registro.");
            location.href="ver_alumnos.php";
        </script>
        ';
    }
?>