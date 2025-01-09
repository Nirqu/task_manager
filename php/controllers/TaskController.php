<?php
require 'get_task_list.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'add_task.php';
    $task_data = array();
    $task_data[] = array(
        'Name' => $_POST['name'],
        'Description' => $_POST['description'],
        'Priority' => $_POST['priority'],
    );
    add_task($task_data);
}

