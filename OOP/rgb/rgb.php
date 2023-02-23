<?php
class RGB{

    private $color;
    private $red;
    private $green;
    private $blue;

    public function __construct($colorCode='')
    {
        $this->color = ltrim($colorCode, '#');
        $this->parseColor();
    }

    public function redRGBColor()
    {
        echo "Read = {$this->red}\nGreen = {$this->green}\nBlue = {$this->blue}\n";
    }

    public function setRGBColor($colorCode)
    {
        $this->color = ltrim($colorCode, '#');
        $this->parseColor();
    }

    private function parseColor(){
        if($this->color){
            list($this->red, $this->green, $this->blue) = sscanf($this->color, '%02x%02x%02x');
        }else{
            list($this->red, $this->green, $this->blue) = array(0,0,0);
        }
    }
}

$myColor = new RGB('#44466');
$myColor->setRGBColor('#ff9900');
$myColor->redRGBColor();