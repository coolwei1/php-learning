<?php

//$router->define([
//    '' => 'controllers/index.php',
//    'about' => 'controllers/about.view.php',
//    'about/culture' => 'controllers/about-culture.view.php',
//    'contact' => 'controllers/contact.view.php',
//    'names' => 'controllers/add-name.php'
//]);

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('about/culture', 'controllers/about-culture.view.php');
$router->get('contact', 'PagesController@contact');
//$router->post('names', 'controllers/add-name.php');
$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');

