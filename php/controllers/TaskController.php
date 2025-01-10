<?php
require 'get_task_list.php';

function checkInArray() {
    $tasks = getTasksData();
    foreach ($tasks as $task) {
        if($tasks['Name'] === $_POST['name']){
            die('Fatal Error');
        }
    }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    require_once 'add_task.php';
    $task_data = array();
    $task_data[] = array(
        'Name' => $_POST['name'],
        'Description' => $_POST['description'],
        'Priority' => $_POST['priority'],
    );
    checkInArray($tasks_data['Name']);
    add_task($task_data);
}

