<?php
$var = explode("\\", dirname(__FILE__));
set_include_path("$var[0]\\"."$var[1]\\"."$var[2]\\"."$var[3]");

require("Controllers/MySQLConnection.php");
require("Controllers/CtrlArticulo.php");

$ID_USER = 1;
$NOMBRE_ARTICULO = $_POST["nombre"];
$DESCRIPCCION_ARTICULO = $_POST["descripcion"];
$IMAGEN_ARTICULO = getimagesize($_FILES["imagen"]["tmp_name"]);

if($ID_USER == "" && $NOMBRE_ARTICULO == "" && $DESCRIPCCION_ARTICULO == "" && $IMAGEN_ARTICULO == false){
    echo '<script language="javascript">alert("Por favor rellene todo los campos");window.location.href="AddNewArticuloView.php"</script>';
}

$IMAGEN_ARTICULO = $_FILES['imagen']['tmp_name'];
$IMG_CONTENIDO = addslashes(file_get_contents($IMAGEN_ARTICULO));


$ctrlArticulo = new CtrlArticulo();
$Articulo = new Articulo(null, $NOMBRE_ARTICULO, $DESCRIPCCION_ARTICULO, $ID_USER, $IMG_CONTENIDO);
$ctrlArticulo->insert($Articulo);
header("Location:  http://localhost/$var[3]/View/ArticulosListView.php");



?>