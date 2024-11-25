<?php

require 'vendor/autoload.php';

use App\Controllers\contactController;

// Ensure the ContactController class is defined and autoloaded correctly
if (!class_exists(contactController::class)) {
    die('ContactController class not found. Please check the namespace or autoload configuration.');
}

$contactController = new contactController();

$requestUri = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($requestUri == '/contact' && $requestMethod == 'GET') {
    $contactController->showForm();
} elseif ($requestUri == '/contact' && $requestMethod == 'POST') {
    $contactController->sendMail();
} else {
    // Default route or 404
    include 'homePage.php';
}
