<?php 
require("session.php");
require("View/partials/header.php");
require("View/partials/navbar.php");
?>

<br>

<div class="container dark">
    <a href="AddNewUserView.php" class="btn btn-success btn-block">Añadir Nuevo Usuario</a>
</div>

<br>

<div class = "container">

<table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php  require("ListUsers.php") ?>
            </tbody>
</table>
</div>

