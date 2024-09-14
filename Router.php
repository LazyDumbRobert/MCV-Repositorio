<?php

namespace MVC;

class Router
{
    public array $getRoutes = [];
    public array $postRoutes = [];
    public array $patchRoutes = [];

    public function get($url, $fn)
    {
        $this->getRoutes[$url] = $fn;
    }

    public function post($url, $fn)
    {
        $this->postRoutes[$url] = $fn;
    }

    public function patch($url, $fn)
    {
        $this->patchRoutes[$url] = $fn;
    }

    public function comprobarRutas()
    {
        $url_actual = $_SERVER['PATH_INFO'] ?? '/';
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method === 'GET') {
            $fn = $this->getRoutes[$url_actual] ?? null;
        } elseif ($method === 'POST') {
            $fn = $this->postRoutes[$url_actual] ?? null;
        } elseif ($method === 'PATCH') {
            $fn = $this->patchRoutes[$url_actual] ?? null;
        }

        if (is_callable($fn)) {
            call_user_func($fn, $this);
        } else {
            echo "Página No Encontrada o Ruta no válida";
        }
    }

    public function render($view, $datos = [])
    {
        // Convertir los datos en variables locales
        foreach ($datos as $key => $value) {
            $$key = $value;
        }

        ob_start(); // Iniciar el buffer de salida

        // Incluir la vista
        include_once __DIR__ . "/views/$view.php";

        $contenido = ob_get_clean();
        echo $contenido;
    }
}
