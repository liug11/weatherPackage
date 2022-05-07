<?php
/*
 Joe Liu
 CSE451 spring - 2022
 composer assignment
 5/6/2022
*/

namespace liug11\OpenWeatherClient;
require "vendor/autoload.php";
use GuzzleHttp\Client;

class OpenWeatherClient {
    // private field
    private $apiKey;

    // Constructor
    function __construct($apiKey) {
	$this->apiKey = $apiKey;
    }

    // function 
    function getCurrentWeather($location) {
	$uri = "http://api.openweathermap.org/data/2.5/";

   	//create a new client
    	$client = new GuzzleHttp\Client([
	    // Base URI is used with relative requests
    	    'base_uri' => $uri,
    	    // You can set any number of default request options.
    	    'timeout'  => 2.0,
    	]);

    	try {
  	    $response = $client->request('GET','weather',
				['query'=>['q'=>$location->city . $location->state . $location->country,
				 'appid'=>$this->apiKey,
				 'units'=>'imperial']);
    	} catch (Exception $e) {
      	    print $e->getMessage();
    	}
        $data = json_decode($response->getBody(), true);

	return new \liug11\OpenWeatherClient\WeatherDay(
            new \DateTime('now'),
            $location,
            'imperial',
            $data['main']['temp'],
            $data['main']['feels_like'],
            $data['main']['pressure'],
            $data['main']['humidity']
        );
    }
}
