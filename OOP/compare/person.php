<?php 
    class Person{
        public $name;
        public $age;

        public function __construct($name,$age){
            $this->name = $name;
            $this->age = $age;
        }
    }

    $person1 = new Person("Person1", 23);
    $person2 = new Person("Person1", 23);

    if($person1 == $person2){
        echo "The two object are equal using the == operator.\n";
    }else{
        echo "The two object are not equal using the == operator.\n";
    }
?>