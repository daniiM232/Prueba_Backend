<?php 
    require "conexion.php";

    $id = $_POST["id"];
    $nombre = $_POST["nombre"];

    $acutalizar = "UPDATE materias SET nombre='$nombre' WHERE id='$id'";

    $resultado = mysqli_query($conectar, $acutalizar);

    if($resultado){
        echo '
        <script>
            alert("El registro se edito con éxito.");
            location.href="ver_materias.php";
        </script>
        ';
    }else{
        echo '
        <script>
            alert("No se pudo editar el registro.");
            location.href="ver_materias.php";
        </script>
        ';
    }
?>