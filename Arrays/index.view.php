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
				<ul>

				<?php

					// func
					shuffle($names);

					foreach ($names as $name) {
						
							echo '<li>' . $name . '</li>';

					}
				?>
					
				</ul>
				
				
		</h1>

	</header>
	

</body>

</html>