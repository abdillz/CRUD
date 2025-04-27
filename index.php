<?php
spl_autoload_register(function ($class_name) {
    $directories = [
        'controllers/',
        'models/',
        'config/'
    ];
    
    foreach ($directories as $directory) {
        $path = __DIR__ . '/' . $directory . $class_name . '.php';
        if (file_exists($path)) {
            require_once $path;
            return;
        }
    }
    
    die("Class $class_name not found in: " . implode(', ', $directories));
});

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null;

$controller_class = ucfirst($controller) . 'Controller';
if (class_exists($controller_class)) {
    $controller_instance = new $controller_class();
    
    if (method_exists($controller_instance, $action)) {
        if ($id !== null) {
            $controller_instance->$action($id);
        } else {
            $controller_instance->$action();
        }
    } else {
        die("Action tidak ditemukan");
    }
} else {
    die("Controller tidak ditemukan");
}
?>
