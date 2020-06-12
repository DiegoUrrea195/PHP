<?php
$var = explode("\\", dirname(__FILE__));
set_include_path("$var[0]\\"."$var[1]\\"."$var[2]\\"."$var[3]");


require("Session/session.php");

session_destroy();

header("Location: http://localhost/$var[3]/SignIn.php");

?>