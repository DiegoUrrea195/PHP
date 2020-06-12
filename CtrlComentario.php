<?php

require("Entity/Comentario.php");

class CtrlComentario {

    private $connection;


    public function __construct() {
        $this->connection = new MySQLConnection("localhost", "diego", "300799Diego", "final");
    }

    public function getAllCommentByIdArticle($id) {
        $Coments = array();
        $conn = $this->connection->getConnection();
        $sql = "SELECT * FROM Comentario WHERE Id_Articulo = $id";
        $result = $conn->query($sql);
        $conn->close();
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                array_push($Coments, new Comentario($row["Id_Comentario"], $row["Id_Usuario"], $row["Id_Articulo"], $row["Comentario"]));
            }
            return $Coments;
        }else {
            return false;
        }
    }

    public function insert($comentario) {
        $ID_USER = $comentario->getIdUsuario();
        $ID_ARTICULO = $comentario->getIdArticulo();
        $COMENTARIO = $comentario->getComentario();

        $conn = $this->connection->getConnection();
        $sql = "INSERT INTO Comentario (Id_Usuario, Id_Articulo, Comentario) 
        VALUES ($ID_USER, $ID_ARTICULO, '$COMENTARIO')";

        $flag = false;
        if($conn->query($sql) == true) {
            $flag = true;
        }else {
           echo $conn->error;
        }
        $conn->close();
        return $flag;
    }
}