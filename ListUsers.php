<?php
require("MySQLConnection.php");
require("CtrlUsuario.php");

$ctrl = new CtrlUsuario();

$result = $ctrl->getAll();

if( $result == false ) {
    echo "No hay usuarios que mostrar";
    exit();
}

foreach ($result as $row) {
    echo "<tr>";
    echo "<td>".$row->getNombre()."</td>";
    echo "<td>".$row->getCorreo()."</td>";
    echo "<td><a href="."EditUserView.php?id=".$row->getId()." class='btn btn-primary'>Editar</a>  <a href="."DeleteUser.php?id=".$row->getId()." class='btn btn-primary'>Eliminar</a></td>";
    echo "</tr>";
}


?>