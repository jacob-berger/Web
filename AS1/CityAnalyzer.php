<?php
require "vendor/autoload.php";

class CityAnalyzer
{
    public $cities;

    public function __construct($cities) {
        $this->cities = $cities;
    }

    public function printHighestPopulatedCities() {
        $sorted = collect($this->cities)->map(function ($city) {
            return new City($city["place_name"], $city["total_population_2010"]);
        })->sortByDesc('population')->values()->all();

        echo("10 highest populated cities:\n");
        echo("____________________________\n");
        for ($ix = 0; $ix < 10; $ix++) {
            echo("$sorted[$ix]\n");
        }
        echo("\n");
    }

    public function printLowestPopulatedCities() {
        $sorted = collect($this->cities)->map(function ($city) {
            return new City($city["place_name"], $city["total_population_2010"]);
        })->sortBy('population')->values()->all();

        echo("10 lowest populated cities:\n");
        echo("___________________________\n");
        for ($ix = 0; $ix < 10; $ix++) {
            echo("$sorted[$ix]\n");
        }
        echo("\n");
    }

    public function randomCity() {
        $collection = collect($this->cities)->map(function ($city) {
            return new City($city["place_name"], $city["total_population_2010"]);
        })->values()->all();

        $value = array_rand($collection, 1);
        return ($collection[$value]);
    }
}