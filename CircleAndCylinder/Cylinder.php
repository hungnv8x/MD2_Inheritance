<?php

namespace CircleAndCylinder;
include_once "Circle.php";

class Cylinder extends Circle
{
    public $height;

    public function __construct($radius, $color, $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height): void
    {
        $this->height = $height;
    }

    public function calculateArea()
    {
        return 2 * parent::calculateArea() + parent::calculatePerimeter() * $this->height;
    }
    public function calculatePerimeter()
    {
        return parent::calculatePerimeter()*$this->height;
    }
    public function toString()
    {
        return "Hình trụ có : radius ".$this->radius.", height ".$this->height.", color ".$this->color.", area ".$this->calculateArea().", perimeter ".$this->calculatePerimeter();

    }
}