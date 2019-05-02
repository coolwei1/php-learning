<?php

//use App\Core\Router;
//use App\Core\Request;

use App\Core\{Router, Request};

require 'vendor/autoload.php';
require 'core/bootstrap.php';



Router::load('App/routes.php')
    ->direct(Request::uri(), Request::method());

//require Router::load('routes.php')
//    ->direct(Request::uri(), Request::method());

//$tasks = $query->selectAll('todos');

//$tasks = $statement->fetchAll(PDO::FETCH_OBJ);
//var_dump($task[0]->description);

//require 'index.view.php';
