<?php

class User {
    
    private $id;
    private $nombre;
    private $apellido;
    private $telefono;
    private $direccion;
    private $fecha_nacimiento;

    public function __construct($id, $nombre, $apellido, $telefono, $direccion, $fecha_nacimiento){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    public function __destruct() {
        
    }

    public function getId() {
        return $this->id;
    }
    
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function setApellido($lastName) {
        $this->apellido = $lastName;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function getFechaNacimiento() {
        return $this->fecha_nacimiento;
    }

    public function setFechaNacimiento($fecha) {
        $this->fecha_nacimiento = $fecha;
    }
}


?>