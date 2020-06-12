<?php
require("MySQLConnection.php");
require("CtrlClient.php");

$ID_USER = $_GET["id"];

$ctrl = new CtrlClient();

$client = $ctrl->getClientById($ID_USER);

echo    "<form action='update.php?id=".$ID_USER."' method = 'POST'>";
echo        "Nombre: <input type='text' name='nombre' value='".$client->getNombre()."'>";
echo        "Apellido: <input type='text' name='apellido' value='".$client->getApellido()."'> <br>";
echo        "Telefono: <input type='text' name='telefono' value='".$client->getTelefono()."'>";
echo        "Direccion: <input type='text' name='direccion' value='".$client->getDireccion()."'> <br>";
echo        "Fecha de nacimiento : <input type='date' name='fecha' value='".$client->getFechaNacimiento()."'>";
echo        "<br>";
echo        "<input type='submit'>" ;  
echo    "</form>";


?>

