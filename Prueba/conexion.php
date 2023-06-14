<?php 
    # hace la conexion con la base de datos

    $host = "localhost";
    $user = "root";
    $pwd = "";
    $bd = "Instituto";

    $conectar = mysqli_connect($host, $user, $pwd, $bd);

   
    /*if($conectar){
        echo "Siuuuuuuuuuuu";
    }else{
        echo "no funciono";   
    }*/

?>