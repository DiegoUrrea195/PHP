<?php
require("MySQLConnection.php");
require("CtrlArticulo.php");

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