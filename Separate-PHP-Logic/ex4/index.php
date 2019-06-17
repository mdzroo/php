<?php

if(isset($_GET['name'])){
    $name = htmlspecialchars($_GET['name']);
}

require 'index.view.php';