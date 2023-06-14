<?php 
    require "conexion.php";

    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];

    $acutalizar = "UPDATE profesores SET nombre='$nombre', apellido='$apellido' WHERE id='$id'";

    $resultado = mysqli_query($conectar, $acutalizar);

    if($resultado){
        echo '
        <script>
            alert("El registro se edito con éxito.");
            location.href="ver_profesores.php";
        </script>
        ';
    }else{
        echo '
        <script>
            alert("No se pudo editar el registro.");
            location.href="ver_profesores.php";
        </script>
        ';
    }
?>