<?php

require("Controllers/CtrlClient.php");

$ctrl = new CtrlClient();

$result = $ctrl->getAll();

if( $result == false ) {
    echo "No hay usuarios que mostrar";
    exit();
}

while($row = $result->fetch_assoc()) {
    echo "<li><div> <p>Nombre: ".$row["nombre"].
    "<p>Apellido: ".$row["apellido"].
    "<p>Telefono: ".$row["telefono"].
    "<p>Direccion: ".$row["direccion"].
    "<p>Fehca de nacimiento: ".$row["fecha_nacimiento"].
    "</p> <button><a href="."edit.php?id=".$row["id"].">Editar</a></button>  <button><a href="."delete.php?id=".$row["id"].">Eliminar</a></button> <div></li>";
}


?>