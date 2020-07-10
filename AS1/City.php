<?php

class City
{
    public $name, $population;

    public function __construct($name, $population)
    {
        $this->name = $name;
        $this->population = $population;
    }

    public function __toString()
    {
        return "$this->name ($this->population)";
    }
}