<?php
include_once 'Shape.php';
class Rectangle extends Shape 
{
    public $width;
    public $height;
    
    
    public function __construct($name,$width,$height)
    {
        parent::__construct($name);
        $this->height = $height;
        $this->width = $width;
    }

    public function calculateArea()
    {
        return $this->height * $this->width;
    }

    public function calculatePerimeter() 
    {
        return ($this->height + $this->width) *2;
    }
}
?>