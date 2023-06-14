<?php 
    $id = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="cont1 ancho">
        <div class="cont_in2">
            <form action="editar_prof2.php" method="post" name="form">
                <input type="hidden" id="id" name="id" value="<?php echo $id?>">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre">
                <br>
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido">
                <br>
                <button type="submit">Confirmar</button>
            </form>
        </div>
    </div>
</body>
</html>