<?php


$animals = ['cat', 'dog'];

function dd($value){

    echo '<pre>';

    die(var_dump($value));

    echo  '</pre>';

}



dd($animals); // dd = die and dump



require 'index.view.php';