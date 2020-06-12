<?php
    $var = explode("\\", dirname(__FILE__));
    set_include_path("$var[0]\\"."$var[1]\\"."$var[2]\\"."$var[3]");

    require("View/partials/header.php");
    require("View/partials/navbar.php");
?>

<br>

<div class="container dark">
    <?php
    $var = explode("\\", dirname(__FILE__));
    set_include_path("$var[0]\\"."$var[1]\\"."$var[2]\\"."$var[3]");

        require("Session/Session.php");
        if($_SESSION["id"] == 1) {
           echo "<a href='AddNewArticuloView.php' class='btn btn-success btn-block'>Añadir Nuevo Articulo</a>";
        }
    ?>
</div>

<br>

<div class = "container">

<table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php  
                $var = explode("\\", dirname(__FILE__));
                set_include_path("$var[0]\\"."$var[1]\\"."$var[2]\\"."$var[3]");
                require("UseCase/Articulos/ListArticulos.php") ?>
            </tbody>
</table>
</div>