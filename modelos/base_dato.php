<?php

class base_dato {
    const servidor = "localhost";
    const usuario = "root";
    const clave = "";
    const nombrebd = "proyecto_php";

    public static function conectar() {
        try {
            $conexion = new PDO(
                "mysql:host=" . self::servidor . ";dbname=" . self::nombrebd . ";charset=utf8",
                self::usuario,
                self::clave
            );

            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion; // Devuelve la conexión si es exitosa
        } catch (PDOException $e) { // Nombre correcto de la clase de excepción
            return "Fallo: " . $e->getMessage();
        }
    }
}
