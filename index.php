<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/views/input.php';
        break;
    case '' :
        require __DIR__ . '/views/input.php';
        break;
    case '/display' :
        require __DIR__ . '/views/display.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}