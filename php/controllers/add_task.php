<?php
function add_task($task_data)
{
    $tasks = getTasksData();
    $tasks[] = $task_data;

file_put_contents('../../data/tasks.json', json_encode($tasks, JSON_PRETTY_PRINT));
}

