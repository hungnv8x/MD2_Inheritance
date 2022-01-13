<?php
namespace ClassPoint2DAndPoint3D;
class Point2D
{
    public $x;
    public $y;

    /**
     * @param $x
     * @param $y
     */
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param mixed $x
     */
    public function setX($x): void
    {
        $this->x = $x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param mixed $y
     */
    public function setY($y): void
    {
        $this->y = $y;
    }

    public function setXY($x,$y)
    {
        $this->x = $x;
        $this->y=$y;
    }

    public function getXY()
    {
        return [$this->x,$this->y];
    }
}