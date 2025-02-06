<?php
class Router {
    public function handleRequest() {
        $url = $_SERVER['REQUEST_URI'];
        var_dump($url);  // Pour voir l'URL capturée

        $routes = include('../config/routes.php');
        foreach ($routes as $route => $controllerAction) {
            if (preg_match("~^$route$~", $url, $matches)) {
                list($controller, $action) = explode('@', $controllerAction);
                var_dump($controller, $action);  // Pour voir le contrôleur et l'action
                $controller = new $controller();
                $controller->$action(...array_slice($matches, 1));
                return;
            }
        }
        echo "Page non trouvée!";
    }
}

