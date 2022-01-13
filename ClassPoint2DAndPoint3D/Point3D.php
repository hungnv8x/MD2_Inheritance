<?php

namespace ClassPoint2DAndPoint3D;
include_once "Point2D.php";
class Point3D extends Point2D
{
    public $z;
    public function __construct($x, $y,$z)
    {
        parent::__construct($x, $y);
        $this->z =$z;
    }

    /**
     * @return mixed
     */
    public function getZ()
    {
        return $this->z;
    }

    /**
     * @param mixed $z
     */
    public function setZ($z): void
    {
        $this->z = $z;
    }
    public function setXYZ($x, $y,$z)
    {
        $this->x =$x;
        $this->y = $y;
        $this->z = $z;
    }
    public function getXYZ()
    {
        return [$this->x,$this->y,$this->z];
    }
}