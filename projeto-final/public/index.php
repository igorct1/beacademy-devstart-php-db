<?php
ini_set('display_errors', 1);
include '../vendor/autoload.php';
use App\Connection\Connection;
// conexão do banco de dados com o php, utilizando nome,  login e senha do bd
$connection = Connection::getConnection();
$query = 'SELECT * FROM tb_category';
$preparacao = $connection->prepare($query);
$preparacao->execute();
// while ($registros = $preparacao->fetch()) {
//     var_dump($registros);
// }
// use App\Controller\IndexController;
// use App\Controller\ProductController;
// use App\Controller\CategoryController;
// use App\Controller\ErrorController;

// $url = explode("?",  $_SERVER['REQUEST_URI'])[0];

// function createRoute(string $controllerName, string $methodName) {
//     return [
//         'controller' => $controllerName,
//         'method' => $methodName,
//     ];
// }
// $routes = [
//     '/' => createRoute(IndexController::class, 'indexAction'),
//     '/produtos' => createRoute(ProductController::class, 'listAction'),
//     '/categoria' => createRoute(CategoryController::class, 'listAction'),

// ];

// if(false === isset($routes[$url])) {
//     // $e = new ErrorController();
//     // $e->notFoundAction();
//     ( new ErrorController() )->notFoundAction();
//     exit;
// }
// $controllerName = $routes[$url]['controller'];
// $methodName = $routes[$url]['method'];

// (new $controllerName())->$methodName();


// $c = new IndexController();
// // $c->indexAction();
// $c->loginAction();

// $p = new ProductController();

// $p->listAction();
// $p->addAction();
// $p->editAction();


// $category = new CategoryController();
// $category->listAction();

