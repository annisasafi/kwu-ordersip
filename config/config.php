<?php
// Database Configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'ordersip');

// App Configuration
define('BASE_URL', 'http://localhost/OrderSip/public');
define('APP_NAME', 'OrderSip');

// Error Reporting (Turn off for production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Session Configuration
session_start();
