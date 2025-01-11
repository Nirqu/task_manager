<?php
require 'get_task_list.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    foreach ($tasks as $task) {
        foreach ($task as $task_field) {
            if ($task_field['Name'] === $_POST['name']);{
                echo 'Error';
                die('Memeland');
            }
        }
    }

    require_once 'add_task.php';
    $task_data = array();
    $task_data[] = array(
        'Name' => $_POST['name'],
        'Description' => $_POST['description'],
        'Priority' => $_POST['priority'],
    );
    add_task($task_data);
}

