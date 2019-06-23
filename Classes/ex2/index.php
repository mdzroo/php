<?php
require 'class_lib.php';


$persons = [
    new Person('Daniel'),
    new Person('Marcu')
];


$persons[1]->setName('Girgica');


echo $persons[1]->getName();