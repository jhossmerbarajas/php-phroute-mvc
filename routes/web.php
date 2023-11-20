<?php 

use App\Controllers\Contacts\ContactController;

use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;

$router = new RouteCollector;


$router->get("/", [ContactController::class, 'index']);
$router->get("/{id}", [ContactController::class, 'show']);
$router->post("/{id}", [ContactController::class, 'update']);
$router->post("/", [ContactController::class, 'store']);
$router->post("/destroy/{id}", [ContactController::class, 'destroy']);



$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
echo $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));