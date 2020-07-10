<?php
echo "hello world";

class Profile {
    public $name, $age, $address;

    public function __construct($name, $age)
    {
        $this -> name = $name;
        $this -> age = $age;
    }

    public function __toString()
    {
        return "Name: $this->name, Age: $this->age";
    }
}

$aprofile = new Profile("jane doe", 99);
echo "\n\n";
print_r($aprofile);
echo $aprofile;

class Math {
    public static function sum($n1,$n2) {
        return $n1 + $n2;
    }
}
echo "\n\n";
echo Math::sum(12,32);