<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body ul li {
        list-style-type: square;
    }
</style>
<body>

<ul>

    <?php foreach ($tasks as $task) : ?>

        <li>

            <?php if ($task->completed) : ?>
            <span style="text-decoration: line-through; color: darkred;">
            <?php endif; ?>


            <?= $task->description ?>

            <?php if ($task->completed) : ?>
            </span>
            <?php endif; ?>

        </li>

    <?php endforeach; ?>

</ul>

</body>
</html>