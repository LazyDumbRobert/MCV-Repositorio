<?php

namespace Controllers;
require_once __DIR__ . '/../Model/Producto.php';
use Model\IndustriaTextil;
use Model\Producto;
use MVC\Router;

class ProductoController

{
    public function index(Router $router)
    {
        require_once __DIR__ . '/../config/database.php';
        $IndustriasTextiles = new Producto($conn);

        $resultados = $IndustriasTextiles->textiles();

        $router->render('index',['resultados' => $resultados]);
    }

    public function obtenerPorId(Router $router)
    {
        require_once __DIR__ . '/../config/database.php';
        $producto = new Producto($conn);

        $resultados = $producto->obtenerPorId(1);

        $router->render('index',['resultados' => $resultados]);
    }
}

