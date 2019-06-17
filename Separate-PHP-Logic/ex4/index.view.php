<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index view php</title>
    <style>

        header {
            background: aliceblue;
            text-align: center;
            padding: 4em;
        }

        h1  {
            color: orangered;
        }

        h3 {
            color: lightseagreen;
        }

    </style>
</head>

<body>
<header>
    <h1>
        <?php

        if (isset($name)) {
            echo $name;
        } else {
            echo 'no name set';
        }

        ?>
    </h1>
</header>
</body>

</html>