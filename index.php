<?php

define('BASE_MOTORBIKE_DIR_PATH', __DIR__);
define('BASE_MOTORBIKE_NAMESPACE', 'Includes');

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

$routes = [
    ['/motorbike/create', 'GET', \Includes\Controllers\MotorbikeController::class, 'create'],
    ['/motorbike/store', 'POST', \Includes\Controllers\MotorbikeController::class, 'store']
];

foreach ($routes as $route) {
    if (
        $_SERVER['REQUEST_URI'] === $route[0]
        &&
        $_SERVER['REQUEST_METHOD'] === $route[1]
    ) {
        call_user_func([new $route[2], $route[3]]);
    }
}