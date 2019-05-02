<?php

$person = [
    'age' => 31,
    'hair' => 'brown',
    'career' => 'web developer'
];

$person['name'] = 'Jeffrey';

//remove age
//unset($person['age']);


//var_dump($person);
//die("Hello world")

//$animals = ['dog', 'cat'];
//$animals[] = 'elephant';


//foreach ($names as $name ){
//    echo $name . ', ';
//}

require 'index.view.php';






//<!DOCTYPE html>
//<html lang="en">
//
//<head>
//    <meta charset="UTF-8">
//    <title>Document</title>
//
//    <style>
//        header {
//            background: #e3e3e3;
//            padding: 2em;
//            text-align: center;
//        }
//    </style>
//</head>
//
//<body>
//
//<ul>
//
//    <!-- Better for the li tag with many attribute -->
//    <?php foreach ($person as $feature => $value) : ?>
<!--        <li>--><?//= $feature ?><!-- --><?//= $value ?><!--</li>-->
<!--    --><?php //endforeach; ?>
<!---->
<!---->
<!--</ul>-->
<!---->
<!--</body>-->
<!---->
<!--</html>-->