<?php

class InicioControlador{
    private $modelo;

    public function _CONSTRUCT(){
        $this->modelo=new Producto();
    }

    public function Inicio(){
        $bd = base_dato::Conectar();
        require_once "vistas/inicio/principal.php";

    }
} 

