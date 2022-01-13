<?php

namespace CircleAndCylinder;
class Circle
{
    public $radius;
    public $color;

    /**
     * @param $radius
     * @param $color
     */
    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius): void
    {
        $this->radius = $radius;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter()
    {
        return 2 * pi() * $this->radius;
    }

    public function toString()
    {
        return "Hình tròn có : radius ".$this->radius.", color ".$this->color.", area ".$this->calculateArea().", perimeter ".$this->calculatePerimeter();
    }
}