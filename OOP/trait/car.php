<?php
trait MadeInUSA{
    public function makeInfo()
    {
        echo "Made in USA";
    }
}

class Car{
    use MadeInUSA;
    public function displayInfo()
    {
        // $this>makeInfo();
    }
}

$car = new Car();
$car->makeInfo();