<?php
$var = explode("\\", dirname(__FILE__));
set_include_path("$var[0]\\"."$var[1]\\"."$var[2]\\"."$var[3]");

require("Controllers/MySQLConnection.php");
require("Controllers/CtrlUsuario.php");

$ID_USER = null;
$NOMBRE_USER = $_POST["nombre"];
$CORREO_USER = $_POST["correo"];
$CONTRASEÑA_USER = $_POST["contraseña"];


if($NOMBRE_USER == "" && $CORREO_USER == "" && $CONTRASEÑA_USER == "") {
    
    header("Location: http://localhost/$var[3]/View/AddNewUserView.php");
    exit();
}

$ctrl = new CtrlUsuario();
$cliente = new Usuario($ID_USER, $NOMBRE_USER, $CONTRASEÑA_USER, $CORREO_USER);
$ctrl->insert($cliente);

header("Location:  http://localhost/$var[3]/View/AdminView.php");

?>