<?php
$var = explode("\\", dirname(__FILE__));
set_include_path("$var[0]\\"."$var[1]\\"."$var[2]\\"."$var[3]");

require("Controllers/MySQLConnection.php");
require("Session/Session.php");
require("View/partials/header.php");
require("View/partials/navbar.php");
require("Controllers/CtrlArticulo.php");
require("Controllers/CtrlComentario.php");
require("Controllers/CtrlUsuario.php");

$ID_ARTICULO = $_GET["id"];

$ctrl = new CtrlArticulo();
$ctrlComentario = new CtrlComentario();

$Articulo = $ctrl->getArticuloById($ID_ARTICULO);
$Comentario = $ctrlComentario->getAllCommentByIdArticle($ID_ARTICULO); 

function printArray($array) {
    if($array !== false) {
        $ctrlUsuario = new CtrlUsuario();
        foreach($array as $row) {
            $user = $ctrlUsuario->getUsuarioById($row->getIdUsuario());
            echo "<tr>";
            echo "<td>".$user->getNombre()."</td>";
            echo "<td>".$user->getCorreo()."</td>";
            echo "<td>".$row->getComentario()."</td>";
            echo "</tr>";
        }
    }
}

echo "<br>";
echo "<div class = 'container'>";
echo "<div class='text-center mb-4'><h1>".$Articulo->getNombre()."</h1></div>";
echo "<br>";
echo "<div class='text-center jumbotron jumbotron-fluid'> <p>".$Articulo->getDescripcion()."</p> </div>";
echo "</div>";
echo "<div class='container text-center'>";
echo    "<img src='../UseCase/view.php?id=".$ID_ARTICULO."' alt='Img' width='600' >";   
echo "</div>";
echo "<br>";
echo "<section>";
echo    "<div class = 'container'>";
echo        "<form class='form-signin' action='AddComentario.php?articulo=$ID_ARTICULO' method='POST'>";
echo                "<div class='form-label-group'>";
echo                    "<input type='text' name ='comentario' class='form-control' placeholder='Comentario'>";
echo                    "<br>";
echo                    "<button class='btn btn-lg btn-success btn-block' type='submit'>Comentar</button>";
echo                "</div>";
echo                "<br>";
echo            "</form>";
echo    "</div>";
echo "</section>";
echo "<br>";
echo "<hr>";
echo "<section>";
echo "<div class='container'>";
echo "<table class='table table-hover'>";
echo            "<thead>";
echo                "<tr>";
echo                    "<th>Nombre</th>";
echo                     "<th>Correo</th>";
echo                     "<th>Comentario</th>";
echo                "</tr>";
echo             "</thead>";
echo            "<tbody>";
                printArray($Comentario);
echo            "</tbody>";
echo "</table>";
echo "</div>";
echo "</section>";

?>

