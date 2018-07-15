<?php 

$name = isset($_GET['name']) ? $_GET['name'] : '';

if (empty($name)) {
	
	$greeting = 'Hy';

} else {

	$greeting = 'Hy ' . $name;

}

require 'index.view.php';


?>