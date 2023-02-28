<?php 
    abstract class Car{
        public $name;
        public function __construct($name){
            $this->name = $name;
        }
        abstract public function intro() : string;
    }

    class Audi extends Car{
        public $madeIn;
        public function intro():string{
            return "Choose {$this->madeIn} quality I'm an {$this->name}!";
        }

        public function myOwnMethod(){
            echo "This is my method";
        }

    }

    $audi = new Audi('Audi');
    $audi->madeIn = 'German';
    echo $audi->intro();
?>