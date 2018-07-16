<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ex</title>
</head>

<body>

<header>
    <h1>
        <ul>

            <?php

            //shuffle($artists);

            foreach ($artists as $artist) {

                echo '<li>' . $artist . '</li>';

            }

            ?>

        </ul>
    </h1>
</header>


</body>

</html>