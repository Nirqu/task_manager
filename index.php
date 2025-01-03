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


<form action="" method="post">
    <p>
        <label for="name">Task name</label>
        <input type="text" id="name" name="task_name"/>
    </p>
        <label for="description"></label>
        <textarea rows="5" cols="33" id="description" name="task_description" placeholder="Task description here..."></textarea>
    <p>
        <label for="prior">Priority</label>
        <select name="task_prior" id="prior">
            <option value="high">High</option>
            <option value="medium">Medium</option>
            <option value="low">Low</option>
        </select>
    </p>
    <p>
        <input type="submit"/>
    </p>
</form>


</body>
</html>