<?php

require("Controllers/MySQLConnection.php");
require("Entity/User.php");

class CtrlClient {

    private $connection;

    public function __construct() {
        $this->connection = new MySQLConnection("localhost", "diego", "300799Diego", "supermercado");
    }

    public function getAll(){
        $conn = $this->connection->getConnection();
        $sql = "SELECT * FROM Cliente";
        $result = $conn->query($sql);
        $conn->close();
        if($result->num_rows > 0) {
            return $result;
        }else {
            return false;
        }
    }

    public function getClientById($id) {
        $conn = $this->connection->getConnection();
        $sql = "SELECT * FROM Cliente WHERE id = $id";
        $result = $conn->query($sql);
        $conn->close();

        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return new Client($row["id"], 
            $row["nombre"], 
            $row["apellido"], 
            $row["telefono"], 
            $row["direccion"], 
            $row["fecha_nacimiento"]);
            
        }else {
            return false;
        }
    }

    public function insert($client) {

        //Preparar datos del cliente
        $nombre = $client->getNombre();
        $apellido = $client->getApellido();
        $telefono = $client->getTelefono();
        $direccion = $client->getDireccion();
        $fecha = $client->getFechaNacimiento();

        $conn = $this->connection->getConnection();
        $sql = "INSERT INTO Cliente(nombre, apellido, telefono, direccion, fecha_nacimiento)
             VALUES (
            '$nombre',
            '$apellido',
            '$telefono',
            '$direccion',
            '$fecha')";

        $flag = false;
        if($conn->query($sql) == true) {
            $flag = true;
        }
        $conn->close();
        return $flag;
    }

    public function update($client) {

        //Preparar datos del cliente
        $id = $client->getId();
        $nombre = $client->getNombre();
        $apellido = $client->getApellido();
        $telefono = $client->getTelefono();
        $direccion = $client->getDireccion();
        $fecha = $client->getFechaNacimiento();

        $conn = $this->connection->getConnection();
        $sql = "UPDATE Cliente SET nombre = '$nombre',
            apellido = '$apellido',
            telefono = '$telefono', 
            direccion = '$direccion', 
            fecha_nacimiento = '$fecha' WHERE id = $id";
 
        $flag = false;
        if($conn->query($sql) == true) {
            $flag = true;
        }
        $conn->close();
        return $flag;
    }


    public function delete($id) {
        $conn = $this->connection->getConnection();
        $sql = "DELETE FROM Cliente WHERE id = $id";

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