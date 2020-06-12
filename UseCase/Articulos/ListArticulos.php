<?php
$var = explode("\\", dirname(__FILE__));
set_include_path("$var[0]\\"."$var[1]\\"."$var[2]\\"."$var[3]");

require("Controllers/MySQLConnection.php");
require("Controllers/CtrlArticulo.php");

$ctrl = new CtrlArticulo();

$result = $ctrl->getAll();

if( $result == false ) {
    echo "No hay articulos que mostrar";
    exit();
}

foreach ($result as $row) {
    echo "<tr>";
    echo "<td>".$row->getNombre()."</td>";
    echo "<td><a href="."ArticulosView.php?id=".$row->getId()." class='btn btn-primary'>Ver</a>";
    echo "</tr>";
}


?>