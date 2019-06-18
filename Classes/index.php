<?php

class Task {

    // define properties
    public $description;

    public $completed = false;

    // automatically triggered on instantiation
    public function __construct($description)
    {
        $this->description = $description;
    }

    public function isComplete()
    {
        return $this->completed;
    }

    public function complete()
    {
        $this->completed = true;
    }

}


$tasks = [

    new Task('Go to the store'),
    new Task('Finish my screen task'),
    new Task('Clean my room'),
    new Task('hey hey'),
    new Task('hey hey 2')

];

$tasks[0]->complete();
$tasks[2]->complete();
$tasks[4]->complete();

require 'index.view.php';