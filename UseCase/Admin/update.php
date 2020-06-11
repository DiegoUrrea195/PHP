<?php

require("Controllers/CtrlClient.php");

$ID_USER = $_GET["id"];
$NOMBRE_USER = $_POST["nombre"];
$APELLIDO_USER = $_POST["apellido"];
$TELEFONO_USER = $_POST["telefono"];
$DIRECCION_USER = $_POST["direccion"];
$FECHA_USER = $_POST["fecha"];

$ctrl = new CtrlClient();
$client = new Client($ID_USER, $NOMBRE_USER, $APELLIDO_USER, $TELEFONO_USER, $DIRECCION_USER, $FECHA_USER);

$ctrl->update($client);

header('Location: index.php');

?>
