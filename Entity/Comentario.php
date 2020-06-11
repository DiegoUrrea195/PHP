<?php

class Comentario {
    private $Id;
    private $Id_user;
    private $Id_articulo;
    private $Comentario;

    public function __construct($id, $id_user, $comentario, $id_articulo) {
        $this->Id = $id;
        $this->Id_user = $id_user;
        $this->Id_articulo = $id_articulo;
        $this->Comentario = $comentario;
    }

    public getIdUser() {
        return $this->Id_user;
    }

    public getComentario() {
        return $this->Comentario;
    }

    public function __destruct() {

    }
}


?>