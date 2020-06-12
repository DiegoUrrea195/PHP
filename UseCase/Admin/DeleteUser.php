<?php
$var = explode("\\", dirname(__FILE__));
set_include_path("$var[0]\\"."$var[1]\\"."$var[2]\\"."$var[3]");

require("Controllers/MySQLConnection.php");
require("Controllers/CtrlUsuario.php");
require("Controllers/CtrlComentario.php");

$ctrl = new CtrlUsuario();
$ctrlComentario = new CtrlComentario(); 
$ID_CLIENT = $_GET["id"];
$ctrlComentario->deleteComentariosById($ID_CLIENT);
$ctrl->delete($ID_CLIENT);

header("Location: http://localhost/$var[3]/View/AdminView.php");

?> 