<?php
require("MySQLConnection.php");
require("CtrlUsuario.php");

$ctrl = new CtrlUsuario();

$ID_CLIENT = $_GET["id"];

$ctrl->delete($ID_CLIENT);

header('Location: AdminView.php');

?> 