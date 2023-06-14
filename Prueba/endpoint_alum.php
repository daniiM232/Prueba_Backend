<?php
require "conexion.php";

$id_alumno = $_GET["id"];

if (!empty($id_alumno)) {
    $consulta = "SELECT * FROM alumnos WHERE id = $id_alumno";
    $query = mysqli_query($conectar, $consulta);

    if ($query) {
        if (mysqli_num_rows($query) > 0) {
            $datos = mysqli_fetch_assoc($query);
            echo json_encode($datos);
        } else {
            echo "No se encontró el alumno con ID: $id_alumno";
        }
    } else {
        echo "Error en la consulta: " . mysqli_error($conectar);
    }
} else {
    echo "La variable 'id' no está definida";
}
?>