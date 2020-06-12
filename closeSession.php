<?php

require("session.php");

session_destroy();

$host  = $_SERVER['HTTP_HOST'];
$extra = 'SignIn.php';
$DIR =  explode("/", $_SERVER["PHP_SELF"]);

header("Location: http://$host/$DIR[1]/$extra");

?>