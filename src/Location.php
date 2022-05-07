<?php
/*
 Joe Liu
 CSE451 spring - 2022
 composer assignment
 5/6/2022
*/

namespace liug11\OpenWeatherClient;

class Location {
    // properties of the class, using private access modifier to follow OOP
    private $city;
    private $state;
    private $country;

    // the constructor
    function __construct($city, $state, $country) {
        $this->city = $city;
	$this->state = $state;
	$this->country = $country;
    }

    // Getters
    function getCity() {
	return $this->city;
    }
 
    function getState() {
        return $this->state;
    }

    function getCountry() {
        return $this->country;
    }
}

?>
