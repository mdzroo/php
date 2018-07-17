<?php

class Task {

    public $desc;

    public function __construct()
    {
        //var_dump('CALLED');
        $this->desc = 'kkt';
    }


}


$task = new Task();

var_dump($task->desc);