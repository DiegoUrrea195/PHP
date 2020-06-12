<?php
require("MySQLConnection.php");
require("Session.php");
require("CtrlComentario.php");

$ID_USER = $_SESSION["id"];
$ID_ARTICULO = $_GET["articulo"];
$COMENTARIO = $_POST["comentario"];

$ctrl = new CtrlComentario();

if($ctrl->insert(new Comentario(null, $ID_USER, $ID_ARTICULO, $COMENTARIO)) == false) {
    echo "Mal";
}else {
    header("Location: ArticulosView.php?id=$ID_ARTICULO");
}



?>