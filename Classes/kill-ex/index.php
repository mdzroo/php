<?php

include 'class_lib.php';

// Instantiate/create your object
// Classes are the blueprints/templates of php objects.
// Classes don’t actually become objects until you do something called: instantiation.

$daniel = new Person();

// When accessing methods and properties of a class, you use the arrow (->) operator.
$daniel->setName('Daniel');

$daniel->getName();

var_dump($daniel);

echo '<hr>';

$book = new Book;

$book->setTitle('The Firm');
$book->setAuthor('John Grisham');
$book->setDescription('The Firm is a 1991 legal thriller by American writer John Grisham');
$book->setPrice('£3.55');

var_dump($book);

echo '<hr>';

$book = new Book;

$book->setTitle('The Shining');
$book->setAuthor('Stephen King');
$book->setDescription('The Shining is a horror novel by American');
$book->setPrice('£6.99');

var_dump($book);
