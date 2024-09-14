<?php

require_once __DIR__ . '/../Router.php';
require_once __DIR__ . '/../Controllers/ProductoController.php';

use MVC\Router;
use Controllers\ProductoController;

$router = new Router();

$ProductoController = new ProductoController();

$router->get('/', [$ProductoController, 'index']);
$router->get('/obtenerPorId', [$ProductoController, 'obtenerPorId']);

$router->comprobarRutas();


