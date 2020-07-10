<?php
require "City.php";
require "CensusAPI.php";
require "CityAnalyzer.php";
require "vendor/autoload.php";
use Illuminate\Support\Collection;

$citiesJson = CensusAPI::fetchCities();
$analyzer = new CityAnalyzer($citiesJson);

$analyzer->printHighestPopulatedCities();
$analyzer->printLowestPopulatedCities();
echo "Random City: {$analyzer->randomCity()}";