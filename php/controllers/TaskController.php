<?php
define('ROOT_PATH', __DIR__ . '/../../');
echo getcwd();
//
//echo '<pre>';
//var_dump($_POST);
//echo '</pre>';
//
//$task_file_path = './data/tasks.json';
//
//function get_data () {
//    $task_data = array();
//    $task_data[] = array(
//        'Name' => $_POST['name'],
//        'Description' => $_POST['description'],
//        'Priority' => $_POST['priority'],
//
//    );
//    return $task_data;
//}
//
//if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//    echo getcwd();
//    $json_data = file_get_contents('../../data/tasks.json');
//    $tasks = json_decode($json_data, true);
//
//    $tasks[] = get_data();
//
//    file_put_contents('../../data/tasks.json', json_encode($tasks, JSON_PRETTY_PRINT));
//}
//
//echo get_cwd();
////$tasks = file_get_contents('./data/tasks.json');
//$tasks = json_decode(file_get_contents('./data/tasks.json'), true);
//echo getcwd();
//define('ROOT_PATH', __DIR__);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//    echo getcwd();
    require_once 'add_task.php';
    $task_data = array();
    $task_data[] = array(
        'Name' => $_POST['name'],
        'Description' => $_POST['description'],
        'Priority' => $_POST['priority'],
    );
    add_task($task_data);
}

