<?php
include_once 'Circle.php';
class Cylinder extends Circle
{
    public $height;

    public function __construct($height,$name,$radius)
    {
        parent::__construct($name,$radius);
        $this->height = $height;
    }

    public function calculateArea()
    {
        return (float)parent::calculateArea() * 2 + (float)parent::calculatePerimeter() * (float)$this->height;
    }

    public function calculateVolume() 
    {
        return parent::calculateArea() * $this->height;
    }
}
?>