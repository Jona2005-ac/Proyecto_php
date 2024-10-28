<?php
// Verificar si el parámetro 'c' está definido

require_once "modelos/base_dato.php";

if (!isset($_GET["c"])) {
    // Si no está definido, cargar el controlador de inicio por defecto
    require_once "controladores/Inicio.controlador.php";
    $controlador = new InicioControlador();
    $controlador->Inicio();
} else {
    // Limpiar el nombre del controlador para evitar inyecciones
    $controlador = preg_replace('/[^a-zA-Z0-9]/', '', $_GET["c"]);
    // Construir la ruta del archivo del controlador
    $archivoControlador = "controladores/" . ucwords($controlador) . ".controlador.php";
    // Verificar si el archivo del controlador existe
    if (file_exists($archivoControlador)) {
        require_once $archivoControlador;
        
        // Instanciar el controlador y ejecutar la acción
        $nombreControlador = ucwords($controlador) . "Controlador";
        $controlador = new $nombreControlador;

        // Determinar la acción, por defecto es "Inicio"
        $accion = isset($_GET["a"]) ? $_GET["a"] : "Inicio";
        // Llamar al método del controlador de forma dinámica
        call_user_func(array($controlador, $accion));
    } else {
        // Manejo de error si el controlador no existe
        echo "Error: el controlador especificado no existe.";
    }
}
