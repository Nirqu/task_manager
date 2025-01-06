<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task Manager</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<h1>Welcome to Task Manager</h1>


<form action="../php/controllers/TaskController.php" method="POST">
    <p>
        <label for="name">Task name</label>
        <input type="text" id="name" name="name"/>
    </p>
    <label for="description"></label>
    <textarea rows="5" cols="33" id="description" name="description" placeholder="Task description here..."></textarea>
    <p>
        <label for="prior">Priority</label>
        <select name="priority" id="prior">
            <option value="high">High</option>
            <option value="medium">Medium</option>
            <option value="low">Low</option>
        </select>
    </p>
    <p>
        <input type="submit"/>
    </p>
</form>

<ul>
<?php foreach ($tasks as $taskGroup): ?>
    <?php foreach ($taskGroup as $task): ?>
    <li><?= $task['Name']?> </li>
    <?php endforeach; ?>
<?php endforeach; ?>
</ul>


</body>
</html>