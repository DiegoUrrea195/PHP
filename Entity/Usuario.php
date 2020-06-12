<?php

class Usuario {
    
    private $Id;
    private $Nombre;
    private $Contrasena;
    private $Correo;

    public function __construct($id, $nombre, $contrasena, $correo){
        $this->Id = $id;
        $this->Nombre = $nombre;
        $this->Contrasena = $contrasena;
        $this->Correo = $correo;
    }

    public function __destruct() {
        
    }

    public function getId() {
        return $this->Id;
    }
    
    public function getNombre() {
        return $this->Nombre;
    }

    public function setNombre($nombre) {
        $this->Nombre = $nombre;
    }

    public function getContrasena() {
        return $this->Contrasena;
    }

    public function setContrasena($contra) {
        $this->Contrasena = $contra;
    }

    public function getCorreo() {
        return $this->Correo;
    }

    public function setCorreo($correo) {
        $this->Correo = $correo;
    }
}


?>