<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Artist</title>
</head>
<body>

    <h1>Artist</h1>

    <ul>
        <li>
            <strong>Name: </strong> <?= $artist['name'] ?>
        </li>
        <li>
            <strong>Description: </strong> <?= $artist['desc'] ?>
        </li>
        <li>
            <strong>Status: </strong>
            <?php if ($artist['status']) : ?>
                <span>&#9989;</span>
            <?php else : ?>
                <span>disabled</span>
            <?php endif ?>
        </li>
    </ul>

</body>
</html>