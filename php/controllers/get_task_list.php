<?php
define('ROOT_PATH', __DIR__ . '/../../');
function getTasksData() {
//    echo getcwd();
    $tasks = file_get_contents(ROOT_PATH . 'data/tasks.json');
    $tasks = json_decode($tasks, true);
    return $tasks;

}

$tasks = getTasksData();