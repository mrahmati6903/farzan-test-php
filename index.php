<?php

// project configurations
define('BASE_MOTORBIKE_DIR_PATH', __DIR__);
define('BASE_MOTORBIKE_NAMESPACE', 'Includes');
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'motorbike_php_db');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_CHARSET', 'UTF8');

// register class autoloader
spl_autoload_register(function ($class) {
    if (0 !== strpos($class, BASE_MOTORBIKE_NAMESPACE)) {
        return;
    }
    $path = BASE_MOTORBIKE_DIR_PATH . DIRECTORY_SEPARATOR . $class . '.php';
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $path);
    $path = str_replace('/', DIRECTORY_SEPARATOR, $path);
    if (is_readable($path)) {
        include_once $path;
    }
});

// project routes
$routes = [
    ['/motorbike/create', 'GET', \Includes\Controllers\MotorbikeController::class, 'create'],
    ['/motorbike/store', 'POST', \Includes\Controllers\MotorbikeController::class, 'store'],
    ['/motorbike/list', 'GET', \Includes\Controllers\MotorbikeController::class, 'list'],
    ['/motorbike/show', 'GET', \Includes\Controllers\MotorbikeController::class, 'show'],
];

// run controller action based on route
$parsedUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
foreach ($routes as $route) {
    if (
        $parsedUri === $route[0]
        &&
        $_SERVER['REQUEST_METHOD'] === $route[1]
    ) {
        call_user_func([new $route[2], $route[3]]);
    }
}