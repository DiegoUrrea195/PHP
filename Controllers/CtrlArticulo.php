<?php
$var = explode("\\", dirname(__FILE__));
set_include_path("$var[0]\\"."$var[1]\\"."$var[2]\\"."$var[3]");

require("Entity/Articulo.php");

class CtrlArticulo {
    
    private $connection;

    public function __construct() {
        $this->connection = new MySQLConnection("localhost", "diego", "300799Diego", "final");
    }

    public function getAll() {
        $Articulo = array();
        $conn = $this->connection->getConnection();
        $sql = "SELECT * FROM Articulo";
        $result = $conn->query($sql);
        $conn->close();
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                array_push($Articulo, new Articulo($row["Id_Articulo"], $row["Nombre"], $row["Descripcion"], $row["Id_Usuario"], $row["Imagen"]));
            }
            return $Articulo;
        }else {
            return false;
        }
    }

    public function getArticuloById($id) {
        $conn = $this->connection->getConnection();
        $sql = "SELECT * FROM Articulo WHERE Id_Articulo = $id";
        $result = $conn->query($sql);
        $conn->close();
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return new Articulo($row["Id_Articulo"],
            $row["Nombre"],
            $row["Descripcion"],
            $row["Id_Usuario"],
            $row["Imagen"]);
        }
    }

    public function insert($articulo) {

        $NOMBRE = $articulo->getNombre();
        $DESCRIPCION = $articulo->getDescripcion();
        $ID_USER = $articulo->getIdUsuario();
        $IMAGEN = $articulo->getImagen();

        $conn = $this->connection->getConnection();
        $sql = "INSERT INTO Articulo(Nombre, Descripcion, Id_Usuario, Imagen)
         VALUES ('$NOMBRE', '$DESCRIPCION', $ID_USER, '$IMAGEN')";

        $flag = false;
        if($conn->query($sql) == true) {
            $flag = true;
        }
        $conn->close();
        return $flag;
    }

    public function update($articulo) {

        $ID_ARTICULO = $articulo->getId();
        $NOMBRE = $articulo->getNombre();
        $DESCRIPCION = $articulo->getDescripcion();

        $conn = $this->connection->getConnection();
        $sql = "UPDATE Articulo SET Nombre = '$NOMBRE',
         Descripcion = '$DESCRIPCION'
        WHERE Id_Articulo = $ID_ARTICULO";

        $flag = false;
        if($conn->query($sql) == true) {
            $flag = true;
        }
        $conn->close();
        return $flag;
    }

    public function delete($id) {

        $conn = $this->connection->getConnection();
        $sql = "DELETE FROM Articulo WHERE Id_Articulo = $id";

        $flag = false;

        if($conn->query($sql) == true) {
            $flag = true;
        }
        $conn->close();
        return $flag;
    }

    public function getImageArticulo($id_articulo) {
        $conn = $this->connection->getConnection();
        $sql = "SELECT Imagen FROM Articulo WHERE Id_Articulo = $id_articulo";
        $result = $conn->query($sql);
        $conn->close();

        if($result->num_rows > 0) {
            $img = $result->fetch_assoc();

            header("Content-type: image/jpg");
            return $img["Imagen"];
        }
    }

    public function __destruct() {
        
    }


}