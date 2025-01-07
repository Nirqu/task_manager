<?php
require 'get_task_list.php';
function add_task($task_data)
{
//    echo getcwd();
    $tasks = getTasksData();
    echo '<pre>';
    var_dump($task_data);
    echo '</pre>';
    $tasks[] = $task_data;

file_put_contents('../../data/tasks.json', json_encode($tasks, JSON_PRETTY_PRINT));
}

