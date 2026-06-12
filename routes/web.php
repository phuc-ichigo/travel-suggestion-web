<?php
// Định nghĩa các routes
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($uri) {
    case '/':
    case '/home':
        require '../app/Controllers/HomeController.php';
        break;
    case '/destinations':
        require '../app/Controllers/DestinationController.php';
        break;
    default:
        http_response_code(404);
        echo "404 Not Found";
}
