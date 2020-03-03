<?php namespace App;

$router = new \Core\Router();

//Routing

$router->add('/' , 'HomeController@index');

//don't touch this return
return $router;
