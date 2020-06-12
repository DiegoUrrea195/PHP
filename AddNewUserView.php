<?php
require("View/partials/header.php");
?>

<div class="container">
<div class="container border mt-5">
    <form class="form-signin" action="InsertUser.php" method="POST">
        <div class="text-center mb-4">
            <img src="../public/images/external-content.duckduckgo.com.png" alt="" class="mb-4" width="72" height="72">
            <h1 class="h2 ">Nuevo usuario</h1>
        </div>
        <div class="form-label-group">
            <input type="text" name ="nombre" class="form-control" placeholder="Nombre">
            <br>
        </div>
        <div class="form-label-group">
            <input type="email" name="correo" class="form-control" placeholder="Email">
            <br>
        </div>
        <div class="form-label-group">
            <input type="password" name="contraseña" class="form-control" placeholder="Password">
            <br>
        </div>
        <button class="btn btn-lg btn-success btn-block" type="submit">Registrar</button>
        <br>
    </form>
</div>
</div>