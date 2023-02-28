<?php 
class Car{
    public $name;
    public $color;

    public function __construct($name,$color){
        $this->name  = $name;
        $this->color = $color;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function getColor(){
        return $this->color;
    }
}

class BMW extends Car{
    public $sceret_engine;
    public function setEngine($engine=null){
        $this->sceret_engine = $engine;
    }
    public function fullSpecs(){
        echo "This car name is {$this->name} which color is {$this->color} and engin number is {$this->sceret_engine}";
    }
}

// $bmw = new BMW('BMW', 'black');
// $bmw->setEngine('TF0998');
// $bmw->fullSpecs();

$bmw = new BMW('Toyota', 'Blue');
$bmw->fullSpecs();