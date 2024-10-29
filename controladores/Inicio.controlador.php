<?php


class InicioControlador {
    private $modelo;

    public function __construct() {
        //$this->modelo = new Producto();
    }

    public function Inicio() {
        $bd = base_dato::Conectar();
        require_once $_SERVER['DOCUMENT_ROOT'] . '/proyecto_prueba/Proyecto_php-main/vistas/encabezado.php'; 
        require_once $_SERVER['DOCUMENT_ROOT'] . '/proyecto_prueba/Proyecto_php-main/vistas/inicio/principal.php';
        require_once "../vistas/pie.php";
    }
}


