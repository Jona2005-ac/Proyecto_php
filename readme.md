# Proyecto MVC en PHP

Este proyecto implementa una arquitectura MVC (Modelo-Vista-Controlador) utilizando PHP en la versión 7.3, y está configurado para ejecutarse en un entorno XAMPP.

## Requisitos

- **PHP**: versión 7.3 o superior
- **Servidor Web**: Apache, Nginx u otro compatible
- **Base de Datos**: MySQL (o cualquier base de datos compatible con PHP)
- **Extensiones de PHP**:
  - `pdo` (para conexión a base de datos)
  - `mbstring`
  - `json`
  - `session`

## Estructura del Proyecto

El proyecto sigue la estructura basica de carpetas de un patrón MVC clásico, no posee composer:

- **/assetts**: Contiene la las imagenes y archivos css para el proyecto
- **/bd**: Contiene la estructura de la base de datos
  - **/controllers**: Controladores que gestionan las solicitudes y lógica de negocio
  - **/models**: Modelos que interactúan con la base de datos
  - **/views**: Vistas que generan la interfaz de usuario
    - **/inicio**: la pantalla de incio de la app
    - **/productos**:los productos a ingresar en el sistema

## Configuración

1. Clona el repositorio:
   ```bash
   git clone https://github.com/usuario/proyecto-mvc.git
   cd proyecto-mvc

## Configuración en XAMPP

1. Clona el repositorio dentro de la carpeta `htdocs` de XAMPP:
   ```bash
   git clone https://github.com/usuario/proyecto-mvc.git
2. Asegúrate de que XAMPP esté ejecutándose. Puedes iniciar Apache y MySQL desde el panel de control de XAMPP.

3. Configura la base de datos en el archivo /config/database.php:

- Abre el archivo y ajusta las credenciales para que coincidan con tu configuración de MySQL en XAMPP.
- Crea una base de datos en phpMyAdmin o mediante la línea de comandos de MySQL para almacenar los datos de tu aplicación.
- Accede al proyecto en tu navegador. Si el proyecto está en una carpeta llamada proyecto-mvc, la URL será:

    ```bash
    http://localhost/proyecto-mvc/public

## Uso

El proyecto utiliza enrutamiento básico para dirigir las solicitudes a los controladores correctos. Asegúrate de que el servidor web apunte a la carpeta /public como raíz del documento, especialmente si configuras un dominio local o entorno de despliegue.

## Funcionalidades
Enrutamiento básico: Mapea URLs a controladores específicos.
Controladores: Gestionan la lógica de negocio.
Modelos: Interactúan con la base de datos para obtener y guardar información.
Vistas: Generan la interfaz visual para el usuario.
Compatibilidad
Este proyecto ha sido probado en PHP 7.3 (a través de XAMPP) y debería ser compatible con versiones superiores.

Contribución
Las contribuciones son bienvenidas. Por favor, abre un Issue para reportar errores o sugerir nuevas funcionalidades.
