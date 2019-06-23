<?php

/*
    Classes are the blueprints for php objects – more on that later.
    One of the big differences between functions and classes is that a class contains both data (variables) and functions
    that form a package called an: ‘object’.
*/

// Don’t forget that in a class, variables are called ‘properties’ and functions are called ‘methods’.

    class Person {

        var $name;

        /**
         * These methods follow a common OOP convention that you see in many languages (including Java and Ruby)
         * – where you create methods to ‘set’ and ‘get’ properties in a class.
         */

        /**
         * The $this is a built-in variable (built into all objects) which points to the current object
         */

        /**
         * @param mixed $name
         */
        public function setName($name)
        {
            $this->name = $name;
        }

        /**
         * @return mixed
         */
        public function getName()
        {
            return $this->name;
        }


    }


    class Book {

        var $title;

        var $author;

        var $description;

        var $price;

        /**
         * @param mixed $title
         */
        public function setTitle($title)
        {
            $this->title = $title;
        }

        /**
         * @param mixed $author
         */
        public function setAuthor($author)
        {
            $this->author = $author;
        }

        /**
         * @param mixed $description
         */
        public function setDescription($description)
        {
            $this->description = $description;
        }

        /**
         * @param mixed $price
         */
        public function setPrice($price)
        {
            $this->price = $price;
        }

        /**
         * @return mixed
         */
        public function getTitle()
        {
            return $this->title;
        }

        /**
         * @return mixed
         */
        public function getAuthor()
        {
            return $this->author;
        }

        /**
         * @return mixed
         */
        public function getDescription()
        {
            return $this->description;
        }

        /**
         * @return mixed
         */
        public function getPrice()
        {
            return $this->price;
        }

    }