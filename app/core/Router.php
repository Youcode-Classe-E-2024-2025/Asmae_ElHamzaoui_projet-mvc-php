<?php
namespace App\Core;

//  gérer le système de routage, en analysant les URL et en appelant les méthodes des contrôleurs appropriées
class Router {
    private $routes = [];

    public function addRoute($method, $route, $action) {
        $this->routes[$method][$route] = $action;
    }

    public function handleRequest($method, $uri) {
        if (isset($this->routes[$method][$uri])) {
            return $this->routes[$method][$uri];
        }
        throw new \Exception('Route not found.');
    }
}
