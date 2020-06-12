<?php
$var = explode("\\", dirname(__FILE__));
set_include_path("$var[0]\\"."$var[1]\\"."$var[2]\\"."$var[3]");

require("Controllers/MySQLConnection.php");
require("Session/Session.php");
require("Controllers/CtrlUsuario.php");

$ID_USER = $_GET["id"];
$NOMBRE_USER = $_POST["nombre"];
$CORREO_USER = $_POST["correo"];
$CONTRASEÑA_USER = $_POST["contraseña"];

$ctrl = new CtrlUsuario();
$client = new Usuario($ID_USER, $NOMBRE_USER, $CONTRASEÑA_USER, $CORREO_USER);

$ctrl->update($client);

if($_SESSION["id"] == 1) {
    header("Location: http://localhost/$var[3]/View/AdminView.php");
}else {
    header("Location: http://localhost/$var[3]/View/ArticulosListView.php");
}


?>
