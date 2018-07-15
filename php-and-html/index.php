<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>

<style>

	header {
		background: #e3e3e3;
		padding: 2em;
		text-align: center;
	}

</style>

<body>

	
	<header>
		
		<h1>

			<?php

			 	$greeting = 'Hello World';

			 	$name = htmlspecialchars($_GET['name']);

			 	echo "Hello {$name}";

			?>
				
		</h1>

	</header>
	

</body>

</html>