<?php
$routes = [
    '/' => 'HomeController@index',
    '/article/(\d+)' => 'ArticleController@show',
];
