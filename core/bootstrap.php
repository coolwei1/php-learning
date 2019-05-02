<?php

use App\Core\App;

//require 'Task.php';
//require 'core/database/QueryBuilder.php';
//require 'core/database/Connection.php';
//require 'core/database/Request.php';
//require 'core/Router.php';


//$app['config'] = require 'config.php';
App::bind('config', require 'config.php');

//die(var_dump(App::get('config')));

//$app['database'] = new QueryBuilder(Connection::make($app['config']['database']));

App::bind('database', new QueryBuilder(Connection::make(App::get('config')['database'])));

function view($name, $data = []){
    extract($data);
    return require "app/views/{$name}.view.php";
}

function redirect($path){
    header("Location: /{$path}");
}
