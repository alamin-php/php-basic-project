<?php
    require_once('shape.php');
    class Triangle extends Shape{
        private $base;
        private $heigth;

        public function __construct($name, $base, $heigth){
            parent::__construct($name);
            $this->base = $base;
            $this->heigth = $heigth;
        }

        public function getArea(){
            return 0.5*$this->base * $this->heigth;
        }
    }