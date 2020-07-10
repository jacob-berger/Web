<?php

require "vendor/autoload.php";
use Illuminate\Support\Collection;

$names = ["neo", "trinity", "morpheus", null];

//remove null
//make uppercase

$nonNullNames = array_filter($names, function($name) {
    return !is_null($name);
});

$upperNames = array_map(function($name) {
    return strtoupper($name);
}, $nonNullNames);

sort($upperNames);

//print_r($nonNullNames);
//print_r($upperNames);

$namesCollection = collect($names);

$modifiedNames = $namesCollection -> reject(function($names) {
    return empty($names);
}) -> map(function($names) {
    return strtoupper($names);
}) -> sort() -> values();

print_r($modifiedNames);