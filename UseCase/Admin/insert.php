<?php

require("Controllers/CtrlClient.php");

$ID_USER = null;
$NOMBRE_USER = $_POST["nombre"];
$APELLIDO_USER = $_POST["apellido"];
$TELEFONO_USER = $_POST["telefono"];
$DIRECCION_USER = $_POST["direccion"];
$FECHA_USER = $_POST["fecha"];

if($NOMBRE_USER == "" && $APELLIDO_USER == "" && $TELEFONO_USER == "" && $TELEFONO_USER == "" && $DIRECCION_USER == "" && $FECHA_USER == "") {
    header('Location: index.php');
    exit();
}

$ctrl = new CtrlClient();
$cliente = new Client($ID_USER, $NOMBRE_USER, $APELLIDO_USER, $TELEFONO_USER, $DIRECCION_USER, $FECHA_USER);
$ctrl->insert($cliente);

header('Location: index.php');

?>