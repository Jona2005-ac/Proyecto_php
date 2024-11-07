<?php

require_once "modelos/productos.php";

class InicioControlador {
    private $modelo;

    public function __construct() {
        $this->modelo = new Producto();
    }

    public function Inicio(){
        require_once $_SERVER['DOCUMENT_ROOT'] . '/proyecto_prueba/Proyecto_php-main/vistas/encabezado.php'; 
        require_once $_SERVER['DOCUMENT_ROOT'] . '/proyecto_prueba/Proyecto_php-main/vistas/inicio/principal.php';
        require_once('C:/xampp/htdocs/proyecto_prueba/Proyecto_php-main/vistas/pie.php');

    }
}


