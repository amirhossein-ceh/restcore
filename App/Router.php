<?php namespace App;

$router = new \Core\Router();

//Routing

$router->add('/test' , 'HomeController@index');

return $router;
