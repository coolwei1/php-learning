<?php

$task = [
    'title' => 'Finish homework',
    'due' => 'today',
    'assigned_to' => 'Jeffrey',
    'completed' => false
];

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
//<h1>Task For The Day</h1>
//
//<ul>
//
//    <?php foreach ($task as $heading => $value) :?>
<!---->
<!--<li>-->
<!--    <strong>--><?//= ucwords($heading) ?><!--</strong>: --><?//= $value ?>
<!---->
<!--</li>-->
<!---->
<!--    --><?php //endforeach; ?>
<!--</ul>-->
<!---->
<!---->
<!---->
<!--<ul>-->
<!--    <li>-->
<!--        <strong>Name: </strong>--><?//= $task['title'] ?>
<!--    </li>-->
<!--    <li>-->
<!--        <strong>Due Date: </strong>--><?//= $task['due'] ?>
<!--    </li>-->
<!--    <li>-->
<!--        <strong>Person Responsible: </strong>--><?//= $task['assigned_to'] ?>
<!--    </li>-->
<!--    <li>-->
<!--        <strong>Status: </strong>--><?//= $task['completed'] ? 'Completed' : 'Incomplete' ?>
<!--    </li>-->
<!--</ul>-->
<!---->
<!---->
<!---->
<!--</body>-->
<!---->
<!--</html>-->














<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!---->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <title>Document</title>-->
<!---->
<!--    <style>-->
<!--        header {-->
<!--            background: #e3e3e3;-->
<!--            padding: 2em;-->
<!--            text-align: center;-->
<!--        }-->
<!--    </style>-->
<!--</head>-->
<!---->
<!--<body>-->
<!--<h1>Task For The Day</h1>-->
<!---->
<!--<ul>-->
<!---->
<!--    --><?php //foreach ($task as $heading => $value) : ?>
<!---->
<!--        <li>-->
<!--            <strong>--><?//= ucwords($heading) ?><!--</strong>: --><?//= $value ?>
<!---->
<!--        </li>-->
<!---->
<!--    --><?php //endforeach; ?>
<!--</ul>-->
<!---->
<!---->
<!--<ul>-->
<!--    <li>-->
<!--        <strong>Name: </strong>--><?//= $task['title'] ?>
<!--    </li>-->
<!--    <li>-->
<!--        <strong>Due Date: </strong>--><?//= $task['due'] ?>
<!--    </li>-->
<!--    <li>-->
<!--        <strong>Person Responsible: </strong>--><?//= $task['assigned_to'] ?>
<!--    </li>-->
<!--    <li>-->
<!--        <strong>Status: </strong>--><?//= $task['completed'] ? 'Completed' : 'Incomplete' ?>
<!--        --><?php
//        if ($task['completed']) {
//            echo '&#9989;';
//        } else {
//            echo '&#10062;';
//        }
//        ?>
<!---->
<!--        --><?php //if ($task['completed']) : ?>
<!--            <span class="icon">&#9989;</span>-->
<!--        --><?php //else : ?>
<!--            <span class="icon">&#10062;</span>-->
<!--        --><?php //endif ?>
<!--    </li>-->
<!--</ul>-->
<!---->
<!---->
<!--</body>-->
<!---->
<!--</html>-->