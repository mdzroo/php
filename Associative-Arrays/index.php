<?php

$artists = [

    'name' => 'Carola',
    'age' => '40',
    'gender' => 'male'

];

// change value from array
//$artists['name'] = 'Somethingelse';

echo '<pre>';

var_dump($artists);

echo '</pre>';

//die();


require 'index.view.php';