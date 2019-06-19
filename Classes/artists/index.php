<?php

require 'functions.php';

class Artist {

    public $name;

    public $description;

    public $active = false;

    public function __construct($name, $description)
    {
        $this->name = $name;

        $this->description = $description;
    }


    public function active() {
        $this->active = true;
    }

    public function isActive() {
        return $this->active;
    }

}



//$artist = new Artist('Lumieux', 'Bla bla bla');

$artists = [
    new Artist('Cally', 'so many to say'),
    new Artist('Lumieux', 'desc desc desc'),
    new Artist('Nu Zau', 'best of desc')
    ];


$artists[1]->active();

//dd($artists[0]);



require 'index.view.php';
