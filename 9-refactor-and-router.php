<?php

$query = require 'core/bootstrap.php';

require Router::load('routes.php')
    ->direct(Request::uri());

//$tasks = $query->selectAll('todos');

//$tasks = $statement->fetchAll(PDO::FETCH_OBJ);
//var_dump($task[0]->description);

//require 'index.view.php';
