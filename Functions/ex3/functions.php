<?php


    function ageCheck($age){

        if ($age >= 18 ) {

            echo 'You are old enough to enter';

        } else {

            echo  "You aren't old enough to enter, please step back";

        }

    }

//    function checkAge($age){
//
//        $chk = $age >= 21 ? 'Access approved!' : 'Access denied!';
//
//        return $chk;
//
//    }