<?php   
require("session.php");
if(isset($_GET["id"])) {
    $_SESSION["id"] = $_GET["id"];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller</title>
</head>
<body>
    <?php 
    require("View/partials/header.php");
    require("View/partials/navbar.php");
    ?>
</body>
</html>