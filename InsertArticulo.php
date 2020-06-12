<?php
require("MySQLConnection.php");
require("CtrlArticulo.php");

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
if($ctrlArticulo->insert($Articulo) == false){
    echo "Nel";
}else {

    header("Location: ArticulosListView.php");
}



?>