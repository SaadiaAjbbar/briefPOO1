<?php

class Router
{
    public function redirecte()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        $basePath = '/briefPoo1/public';
        $page = str_replace($basePath, '', $uri);

        if ($page === '') {
            $page = '/home'; 
        }

        $routes = [
            '/home' => __DIR__ . '/../controllers/home.controller.php',
            '/lecteur' => __DIR__ . '/../controllers/lecteur.controller.php',
            '/livre'   => __DIR__ . '/../controllers/livre.controller.php',
            '/emprunt' => __DIR__ . '/../controllers/emprunt.controller.php',
        ];

        if (array_key_exists($page, $routes)) {
            require_once $routes[$page];
        } else {
            echo "Page non trouvée";
        }
    }
}
