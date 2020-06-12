<?php   
$var = explode("\\", dirname(__FILE__));
set_include_path("$var[0]\\"."$var[1]\\"."$var[2]\\"."$var[3]");

require("Session/Session.php");
if(isset($_GET["id"])) {
    $_SESSION["id"] = $_GET["id"];
}

header("Location: http://localhost/$var[3]/View/ArticulosListView.php");

?>
