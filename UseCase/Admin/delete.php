<?php

require("Controllers/CtrlClient.php");

$ctrl = new CtrlClient();

$ID_CLIENT = $_GET["id"];

$ctrl->delete($ID_CLIENT);

header('Location: index.php');

?> 