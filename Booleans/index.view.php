<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body, ul li {
            list-style-type: none;
        }
    </style>
</head>
<body>

<h1>Task for the day</h1>

    <ul>

        <li>
            <strong>Name: </strong> <?= $task['title'] ?>
        </li>

        <li>
            <strong>Due date: </strong> <?= $task['due'] ?>
        </li>

        <li>
            <strong>By: </strong> <?= $task['assigned_to'] ?>
        </li>

        <li>
            <strong>Status: </strong> <?= $task['completed'] ? 'Complete' : 'Incomplete'; ?>
        </li>

    </ul>


</body>
</html>