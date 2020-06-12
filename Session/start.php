<?php
$var = explode("\\", dirname(__FILE__));
set_include_path("$var[0]\\"."$var[1]\\"."$var[2]\\"."$var[3]");

require("Controllers/MySQLConnection.php");
require("Controllers/CtrlUsuario.php");

$usuario = $_POST["correo"];
$contraseña = $_POST["contraseña"];

$ctrl = new CtrlUsuario();

$user = $ctrl->getUsuarioByEmail($usuario);


if($user != false) {
    if($user->getContrasena() == $contraseña) {
        $id = $user->getId();
        header("Location: http://localhost/$var[3]/Index.php?id=$id");
    }else {
        echo '<script language="javascript">alert("Correo o contraseña incorrectos");window.location.href="SignIn.php"</script>';    
    }
}else {
    echo '<script language="javascript">alert("Correo o contraseña incorrectos");window.location.href="SignIn.php"</script>';
}

?>