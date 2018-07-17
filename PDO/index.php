<?php


try {

   $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');

} catch (PDOException $exception) {

    //die('could not connect.');
    die($exception->getMessage());

}

// prepare statement
$statement = $pdo->prepare('select * from todos');

// execute statement
$statement->execute();


// Fetch All from db
$tasks = $statement->fetchAll(PDO::FETCH_OBJ);

//var_dump($results);

require 'index.view.php';
