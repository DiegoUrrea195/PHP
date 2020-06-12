<?php
require("MySQLConnection.php");
require("CtrlUsuario.php");

$usuario = $_POST["correo"];
$contraseña = $_POST["contraseña"];

$ctrl = new CtrlUsuario();

$user = $ctrl->getUsuarioByEmail($usuario);


if($user != false) {
    if($user->getContrasena() == $contraseña) {
        $id = $user->getId();
        header("Location: Index.php?id=$id");
    }else {
        echo '<script language="javascript">alert("Correo o contraseña incorrectos");window.location.href="SignIn.php"</script>';    
    }
}else {
    echo '<script language="javascript">alert("Correo o contraseña incorrectos");window.location.href="SignIn.php"</script>';
}

?>