<?php


if(isset($_GET['name'])){
    $name = htmlspecialchars($_GET['name']);
}


$greeting = "Hello";

$message = 'How are you?';


require 'index.view.php';