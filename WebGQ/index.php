<?php
// Habilitar el reporte de errores (solo para desarrollo, en producción desactívalo)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Cargar automáticamente las clases
spl_autoload_register(function ($class) {
    $file = __DIR__ . '/App/controllers/' . $class . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});

// Obtener la ruta desde la URL
$route = isset($_GET['route']) ? $_GET['route'] : 'home';

// Definir las rutas permitidas
$routes = [
    'home' => 'HomeController@index'
];

// Verificar si la ruta existe
if (array_key_exists($route, $routes)) {
    list($controllerName, $method) = explode('@', $routes[$route]);
    
    // Instanciar el controlador y ejecutar el método
    if (class_exists($controllerName)) {
        $controller = new $controllerName();
        if (method_exists($controller, $method)) {
            $controller->$method();
        } else {
            die("Método no encontrado.");
        }
    } else {
        die("Controlador no encontrado.");
    }
} else {
    die("Ruta no válida.");
}
?>
