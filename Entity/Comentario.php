<?php

class Comentario {
    private $Id;
    private $Id_user;
    private $Id_articulo;
    private $Comentario;

    public function __construct($id, $id_user, $id_articulo, $comentario) {
        $this->Id = $id;
        $this->Id_user = $id_user;
        $this->Id_articulo = $id_articulo;
        $this->Comentario = $comentario;
    }

    public function getIdUsuario() {
        return $this->Id_user;
    }

    public function getComentario() {
        return $this->Comentario;
    }

    public function getIdArticulo() {
        return $this->Id_articulo;
    }

    public function __destruct() {

    }
}


?>