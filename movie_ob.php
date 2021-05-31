<?php

class Movie{

    //ATTRIBUTI
    public $title;
    public $country;
    public $release_date;
    public $rate;
    public $plot;

    //COSTRUTORE
    function __construct($title, $country, $release_date = 'Coming Soon'){
        $this -> title = $title;
        $this -> country = $country;
        $this -> release_date = $release_date;
    }

    //METODO
    public function setRate( ){
        return $this->rate = rand(1, 10);
    }

}