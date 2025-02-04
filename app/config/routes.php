<?php

// Définission des routes nécessaires%
$router->addRoute('GET', '/', 'HomeController@index');
$router->addRoute('GET', '/article/{id}', 'ArticleController@show');

?>