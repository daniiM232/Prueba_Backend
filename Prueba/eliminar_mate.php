<?php 
    require "conexion.php";
    $id = $_GET["id"];
 
    $eliminar = "DELETE FROM materias WHERE id=$id"; 
    $resultado = mysqli_query($conectar, $eliminar);

    if($resultado){
        echo '
        <script>
            alert("El registro se eliminó con éxito.");
            location.href="ver_materias.php";
        </script>
        ';
    }else{
        echo '
        <script>
            alert("El registro no se pudo eliminar.");
            location.href="ver_materias.php";
        </script>
        ';
    }
?>
