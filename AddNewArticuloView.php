<?php
require("View/partials/header.php");
?>

<div class="container">
<div class="container border mt-5">
    <form class="form-signin" action="InsertArticulo.php" method="POST" enctype="multipart/form-data">
        <div class="text-center mb-4">
            <img src="../public/images/external-content.duckduckgo.com.png" alt="" class="mb-4" width="72" height="72">
            <h1 class="h2 ">Nuevo Articulo</h1>
        </div>
        <div class="form-label-group">
            <input type="text" name ="nombre" class="form-control" placeholder="Nombre">
            <br>
        </div>
        <div class="form-label-group ">
            <textarea name="descripcion" id="" cols="150" rows="10">Texto</textarea>
            <br>
            <br>
        </div>
        <div class="form-label-group">
            <input type="file" name="imagen" class="form-control" id = "imagen">
            <br>
        </div>
        <button class="btn btn-lg btn-success btn-block" type="submit">Registrar</button>
        <br>
    </form>
</div>
</div>