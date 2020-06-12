<?php
$var = explode("\\", dirname(__FILE__));
set_include_path("$var[0]\\"."$var[1]\\"."$var[2]\\"."$var[3]");

require("Entity/Usuario.php");

class CtrlUsuario {

    private $connection;

    public function __construct() {
        $this->connection = new MySQLConnection("localhost", "diego", "300799Diego", "final");
    }

    public function getAll(){
        $Users = array();
        $conn = $this->connection->getConnection();
        $sql = "SELECT * FROM Usuario";
        $result = $conn->query($sql);
        $conn->close();
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                array_push($Users, new Usuario($row["Id_Usuario"], $row["Nombre"], $row["Contrasena"], $row["Correo"]));
            }
            return $Users;
        }else {
            return false;
        }
    }

    public function getUsuarioById($id) {
        $conn = $this->connection->getConnection();
        $sql = "SELECT * FROM Usuario WHERE Id_Usuario = $id";
        $result = $conn->query($sql);
        $conn->close();

        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return new Usuario($row["Id_Usuario"], 
            $row["Nombre"], 
            $row["Contrasena"], 
            $row["Correo"]);
            
        }else {
            return false;
        }
    }

    public function getUsuarioByEmail($email) {
        $conn = $this->connection->getConnection();
        $sql = "SELECT * FROM Usuario WHERE Correo = '$email'";
        $result = $conn->query($sql);
        $conn->close();
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return new Usuario($row["Id_Usuario"], 
            $row["Nombre"], 
            $row["Contrasena"], 
            $row["Correo"]);
        }else {
            return false;
        }
    }

    public function insert($usuario) {

        //Preparar datos del cliente
        $nombre = $usuario->getNombre();
        $apellido = $usuario->getContrasena();
        $correo = $usuario->getCorreo();

        $conn = $this->connection->getConnection();
        $sql = "INSERT INTO Usuario(Nombre, Contrasena, Correo)
             VALUES (
            '$nombre',
            '$apellido',
            '$correo')";

        $flag = false;
        if($conn->query($sql) == true) {
            $flag = true;
        }
        $conn->close();
        return $flag;
    }

    public function update($usuario) {

        //Preparar datos del cliente
        $id = $usuario->getId();
        $nombre = $usuario->getNombre();
        $contra = $usuario->getContrasena();
        $correo = $usuario->getCorreo();

        $conn = $this->connection->getConnection();
        $sql = "UPDATE Usuario SET Nombre = '$nombre',
            Contrasena = '$contra',
            Correo = '$correo' WHERE Id_Usuario = $id";
 
        $flag = false;
        if($conn->query($sql) == true) {
            $flag = true;
        }
        $conn->close();
        return $flag;
    }


    public function delete($id) {
        $conn = $this->connection->getConnection();
        $sql = "DELETE FROM Usuario WHERE Id_Usuario = $id";

        $flag = false;

        if($conn->query($sql) == true) {
            $flag = true;
        }
        $conn->close();
        return $flag;
    }

    public function __destruct() {
        
    }

}

?>