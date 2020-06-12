<?php

require("MySQLConnection.php");

class CtrlImage {

    private $connection;

    public function __construct() {
        $this->connection = new MySQLCnnection("localhost", "diego", "300799Diego", "final");
    }

    public function saveImage($image, $id_a) {

        $conn = $this->connection->getConnection();

        $sql = "INSERT INTO Imagen (Id_Articulo, Imagen_C) VALUES ($id_a, '$image')";

        $flag = false;
        if($conn->query($sql) == true) {
            $flag = true;
        }
        $conn->close();
        return $flag;
    }

    public function getImagesByAriculo($id) {
        $conn = $this->connection->getConnection();
        $sql = "SELECT * FROM  Imagen WHERE Id_Articulo = $id";

        $result = $conn->query($sql);
        $conn->close();
        if($result->num_rows > 0) {
            return $result;
        }else {
            return false;
        }
    }

    public function __destruct() {
        
    }
}