<?php

/**
 * @property  description
 */
class Task
{
    public $description;
    public $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }

    public function complete(){
        $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }

}

$tasks = [
    new Task('Go to store'),
    new Task('Finish homework'),
    new Task('Learn something')
];

$tasks[0]->complete();

//require '7-function.php';
//dd($tasks);

//var_dump($task->isComplete());

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
//    <?php foreach($tasks as $task) : ?>
<!--        <li>-->
<!--            --><?php //if($task->completed) : ?>
<!--                <strike>--><?//= $task->description; ?><!--</strike>-->
<!--            --><?php //else : ?>
<!--                --><?//= $task->description; ?>
<!--            --><?php //endif; ?>
<!--        </li>-->
<!--    --><?php //endforeach; ?>
<!--</ul>-->
<!---->
<!---->
<!--</body>-->
<!---->
<!--</html>-->


