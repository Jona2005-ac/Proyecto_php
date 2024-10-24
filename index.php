<?php
//var_dump($_GET["controlador"]);

if(isset($_GET["c"])){
    require_once "controladores/inicio.contrador.php";
    $controlador = new InicioControlador();
    call_user_func(array($controlador,"Inicio"));
    
}else{
    $controlador = $_GET["c"];
    require_once
    "controladores/$controlador.controlador.php";
    $controlador = ucwords($controlador)."controlador";
    $controlador = new $controlador;
    $accion = isset($_GET["a"]) ? $_GET["a"] :"Inicio";
    call_user_func($controlador,$accion);
    
}
//https://www.youtube.com/watch?v=6zY2Pnoled0&list=PLflx_ynPrJQZuVCxOwEYDfpu7tJNnEtvJ&index=3