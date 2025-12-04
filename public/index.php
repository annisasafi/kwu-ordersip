<?php
require_once '../config/config.php';
require_once '../app/core/Database.php';
require_once '../app/core/Router.php';
require_once '../app/core/Controller.php';

// Autoloader for core classes if needed, or manual requires
// For simplicity in this structure, we might manually require core files or use a simple autoloader

// Simple Autoloader
spl_autoload_register(function ($className) {
    if (file_exists('../app/core/' . $className . '.php')) {
        require_once '../app/core/' . $className . '.php';
    } else if (file_exists('../app/controllers/' . $className . '.php')) {
        require_once '../app/controllers/' . $className . '.php';
    } else if (file_exists('../app/models/' . $className . '.php')) {
        require_once '../app/models/' . $className . '.php';
    }
});

$router = new Router();
