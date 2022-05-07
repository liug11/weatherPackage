<?php
/*
 Joe Liu
 CSE451 spring - 2022
 composer assignment
 5/6/2022
*/

namespace liug11\OpenWeatherClient;

class WeatherDay {
    // private properties using OOP
    private $date;
    private $unit;
    private $temperature;
    private $feelsLike;
    private $pressure;
    private $humidity;

    // Constructor
    function __construct($date, $unit, $temperature, $feelsLike, $pressure, $humidity) {
	$this->date = $date;
	$this->unit = $unit;
	$this->temperature = $temperature;
	$this->feelsLike = $feelsLike;
	$this->pressure = $pressure;
	$this->humidity = $humidity;
    }

    // Getters
    function getDate() {
        return $this->date;
    }

    function getUnit() {
        return $this->unit;
    }

    function getTemperature() {
        return $this->temperature;
    }

    function getFeelsLike() {
        return $this->feelsLike;
    }

    function getPressure() {
        return $this->pressure;
    }

    function getHumidity() {
        return $this->humidity;
    }
}


?>
