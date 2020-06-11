<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert.php" method="post">

    Nombre: <input type="text" name="nombre">
    Apellido: <input type="text" name="apellido"> <br>
    Telefono: <input type="text" name="telefono">
    Direccion: <input type="text" name="direccion"> <br>
    Fecha de nacimiento : <input type="date" name="fecha">

    <input type="submit">

    </form>


    <ul>
        <?php   require("list.php") ?>
    </ul>


</body>
</html>