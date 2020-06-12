<?php
require("MySQLConnection.php");
require("CtrlUsuario.php");

$ID_USER = null;
$NOMBRE_USER = $_POST["nombre"];
$CORREO_USER = $_POST["correo"];
$CONTRASEÑA_USER = $_POST["contraseña"];

$host  = $_SERVER['HTTP_HOST'];
$extra = 'AddNewUserView.php';
$DIR =  explode("/", $_SERVER["PHP_SELF"]);

header("Location: http://$host/$DIR[1]/$extra");

if($NOMBRE_USER == "" && $CORREO_USER == "" && $CONTRASEÑA_USER == "") {
    
    header("Location: http://$host/$DIR[1]/$extra");
    exit();
}

$ctrl = new CtrlUsuario();
$cliente = new Usuario($ID_USER, $NOMBRE_USER, $CONTRASEÑA_USER, $CORREO_USER);
$ctrl->insert($cliente);

header("Location:  http://$host/$DIR[1]/AdminView.php");

?>