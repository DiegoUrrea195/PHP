<?php

class Articulo {
    
    private $Id;
    private $Id_Usuario;
    private $Nombre;
    private $Imagen;
    private $Descripcion;

    public function __construct($id, $nombre, $descripcion, $id_usuario, $imagen) {
        $this->Id = $id;
        $this->Id_Usuario = $id_usuario;
        $this->Nombre = $nombre;
        $this->Descripcion = $descripcion;
        $this->Imagen = $imagen;
    }

    public function getId() {
        return $this->Id;
    }

    public function getIdUsuario() {
        return $this->Id_Usuario;
    }

    public function getNombre() {
        return $this->Nombre;
    }

    public function getImagen() {
        header("Content-type: image/jpg"); 
        echo $this->Imagen;
    }

    public function getComentarios() {
        return $this->Comentarios;
    }

    public function getDescripcion() {
        return $this->Descripcion;
    }

}

?>