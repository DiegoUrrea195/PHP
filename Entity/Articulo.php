<?php

class Articulo {
    
    private $Id;
    private $Nombre;
    private $Imagen;
    private $Comentarios = array();

    public function __construct($id, $nombre, $imagen) {
        $this->Id = $id;
        $this->Nombre;
        $this->Imagen;
    }

    public function getId() {
        return $this->Id;
    }

    public function getNombre() {
        return $this->Nombre;
    }

    public function getImagen() {
        return $this->Imagen;
    }

    public function getComentarios() {
        return $this->Comentarios;
    }

    public function addComentario($comentario) {
        array_push($this->Comentarios, $comentario);
    }
}

?>