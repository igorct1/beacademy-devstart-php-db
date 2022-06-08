<?php
use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\CategoryController;


function createRoute(string $controllerName, string $methodName) {
    return [
        'controller' => $controllerName,
        'method' => $methodName,
    ];
}
$routes = [
    '/' => createRoute(IndexController::class, 'indexAction'),
    '/produtos' => createRoute(ProductController::class, 'listAction'),
    '/categorias' => createRoute(CategoryController::class, 'listAction'),

];

return $routes;