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

    public function FormCrear(){
        require_once __DIR__ . '/../vistas/encabezado.php';
        require_once __DIR__ . '/../vistas/productos/form.php';
        require_once __DIR__ . '/../vistas/pie.php';   
    }

    public function Guardar() {
        $p = new Producto();
        $p->setPro_id(intval($_POST["ID"]));
        $p->setPro_nom($_POST["Nombre"]);
        $p->setPro_mar($_POST["Marca"]);
        $p->setPro_cos($_POST["Costo"]);
        $p->setPro_pre($_POST["Precio"]);
        $p->setPro_can($_POST["Cantidad"]);
    
        $this->modelo->Insertar($p);
    
        header("location:?c=producto");
    }
    
}

