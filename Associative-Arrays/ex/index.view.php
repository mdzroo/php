<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ex</title>
</head>
<body>
<header>
    <h1>
        <ul>

            <?php

                if ($task['completed'] == true ) {

                    foreach ($task as $val) {

                        echo '<li>' . $val . '</li>';

                    }

                }


            ?>

        </ul>
    </h1>
</header>
</body>
</html>