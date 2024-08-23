<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/new', 'UsersController@add');
$router->post('/new', 'UsersController@addAction');
$router->get('/user/{id}/edit', 'UsersController@edit');
$router->post('/user/{id}/edit', 'UsersController@editAction');
$router->get('/user/{id}/delete', 'UsersController@delete');