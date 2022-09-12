<?php

class Movie
    {
        public $title;
        public $genre;
        public $year;
        public $overview;

        public function __construct($title, $genre, $year,  $overview, $cast)
        {
            $this->title = $title;
            $this->genre = $genre;
            $this->year = $year;
            $this->overview = $overview;
            $this->cast = $cast;
        }

        public function getYear()
        {
            return $this-> year ;
        }

        public function getCast()
        {
           foreach($this->cast as $actor) {
            echo $actor . ", ";
           };
        }


    }