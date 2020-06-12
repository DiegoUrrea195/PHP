<?php
require("MySQLConnection.php");
require("Session.php");
require("CtrlUsuario.php");

$ID_USER = $_GET["id"];
$NOMBRE_USER = $_POST["nombre"];
$CORREO_USER = $_POST["correo"];
$CONTRASEÑA_USER = $_POST["contraseña"];

$ctrl = new CtrlUsuario();
$client = new Usuario($ID_USER, $NOMBRE_USER, $CONTRASEÑA_USER, $CORREO_USER);

$ctrl->update($client);

if($_SESSION["id"] == 1) {
    header('Location: AdminView.php');
}else {
    header("Location: Index.php");
}


?>
