<?php 
    require "conexion.php";

    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $materias = $_POST["opciones"];
    $array_materias = implode(",", $materias);  // Combina las opciones seleccionadas en una cadena separada por comas


    $acutalizar = "UPDATE alumnos SET nombre='$nombre', apellido='$apellido' materias='$array_materias' WHERE id='$id'";

    $resultado = mysqli_query($conectar, $acutalizar);

    if($resultado){
        echo '
        <script>
            alert("El registro se edito con éxito.");
            location.href="ver_alumnos.php";
        </script>
        ';
    }else{
        echo '
        <script>
            alert("No se pudo editar el registro.");
            location.href="ver_alumnos.php";
        </script>
        ';
    }
?>