<?php 

$name = htmlspecialchars($_GET['name']);



$greeting = 'hy ' . $name;

require 'index.view.php';


?>