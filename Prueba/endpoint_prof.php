<?php
    require "conexion.php";

    $id_prof = $_GET["id"];

    if (!empty($id_prof)) {
        $consulta = "SELECT * FROM profesores WHERE id = $id_prof";
        $query = mysqli_query($conectar, $consulta);

        if ($query) {
            if (mysqli_num_rows($query) > 0) {
                $datos = mysqli_fetch_assoc($query);
                echo json_encode($datos);
            } else {
                echo "No se encontró el profesor con ID: $id_prof";
            }
        } else {
            echo "Error en la consulta: " . mysqli_error($conectar);
        }
    } else {
        echo "La variable 'id' no está definida";
    }
?>