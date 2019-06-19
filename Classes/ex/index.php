<?php

require 'functions.php';

class Task {

    public $description;

    protected  $completed = false;

    public function __construct($description) // Automatically triggered on instantion
    {

        $this->description = $description;

    }

    public function complete()
    {
        $this->completed = true;
    }

    /**
     * @return bool
     */
    public function isComplete()
    {
        return $this->completed;
    }

}


//$task = new Task('Go to the store'); // a new task object

$tasks = [
  new Task('Go to the store'),
  new Task('Finish the screencast'),
  new Task('Clean my room')
];

require 'index.view.php';




