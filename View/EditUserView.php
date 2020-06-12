<?php
$var = explode("\\", dirname(__FILE__));
set_include_path("$var[0]\\"."$var[1]\\"."$var[2]\\"."$var[3]");

   require("Controllers/MySQLConnection.php");
    require("View/partials/header.php");
    require("Controllers/CtrlUsuario.php");

    $ID = $_GET["id"];
    $ctrl = new CtrlUsuario();

    $user = $ctrl->getUsuarioById($ID);

echo "<div class='container'>";
echo "<div class='container border mt-5'>";
echo    "<form class='form-signin' action='../UseCase/Admin/UpdateUser.php?id=$ID' method='POST'>";
echo        "<div class='text-center mb-4'>";
echo            "<h1 class='h2 '>Editar</h1>";
echo        "</div>";
echo        "<div class='form-label-group'>";
echo            "<input type='text' name='nombre' class='form-control' placeholder='Name' value='".$user->getNombre()."'>";
echo            "<br>";
echo        "</div>";
echo        "<div class='form-label-group'>";
echo            "<input type='email' name='correo' class='form-control' placeholder='Email' value='".$user->getCorreo()."'>";
echo            "<br>";
echo        "</div>";
echo        "<div class='form-label-group'>";
echo            "<input type='text' name='contraseña' class='form-control' placeholder='Password' value='".$user->getContrasena()."'>";
echo            "<br>";
echo        "</div>";
echo        "<button class='btn btn-lg btn-success btn-block' type='submit'>Aceptar</button>";
echo        "<br>";
echo    "</form>";
echo "</div>";
echo "</div>";
