<?php
// class ParentClass{
//     protected $name;
//     public function __construct($name)
//     {
//         $this->name = $name;
//         $this->sayHi();
//     }

//     public function sayHi()
//     {
//         echo "I am from Parent class";
//     }
// }

// class ChildClass extends ParentClass{
//     public function sayHi()
//     {
//         parent::sayHi();
//         echo PHP_EOL;
//         echo "Hi I am from child class";
//     }
// }

// $cc = new ChildClass('ASDF');

abstract class OurClass{
    public function sayHi()
    {
        echo "Hi";
    }

    abstract function eat();
}

class MyClass extends OurClass{
    function eat(){
        echo 'I am eating';
    }
    public function sayHi()
    {
        echo "Hi, I am from MyClass";
    }

}

$mc = new MyClass();
$mc->sayHi();
$mc->eat();