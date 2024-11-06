<?php
// controladores/producto.controlador.php
require_once __DIR__ . '/../modelos/productos.php';

class ProductoControlador {

    private $modelo;

    public function __CONSTRUCT() {
        $this->modelo = new Producto;
    }

    public function Inicio() {
        require_once __DIR__ . '/../vistas/encabezado.php';
        require_once __DIR__ . '/../vistas/productos/index.php';
        require_once __DIR__ . '/../vistas/pie.php';
    }
}
