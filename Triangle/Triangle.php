<?php

namespace Triangle;
class Triangle
{
    public $side1 ;
    public $side2 ;
    public $side3 ;

    public function __construct( $side1 =1, $side2 =1, $side3=1)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }


    /**
     * @return int
     */
    public function getSide1(): int
    {
        return $this->side1;
    }

    /**
     * @param int $side1
     */
    public function setSide1(int $side1): void
    {
        $this->side1 = $side1;
    }

    /**
     * @return int
     */
    public function getSide2(): int
    {
        return $this->side2;
    }

    /**
     * @param int $side2
     */
    public function setSide2(int $side2): void
    {
        $this->side2 = $side2;
    }

    /**
     * @return int
     */
    public function getSide3(): int
    {
        return $this->side3;
    }

    /**
     * @param int $side3
     */
    public function setSide3(int $side3): void
    {
        $this->side3 = $side3;
    }

    public function getArea()
    {
        $p = ($this->side1 + $this->side2 + $this->side3)/2;
        return pow($p*($p-$this->side1)*($p-$this->side2)*($p-$this->side3),0.5);
    }

    public function getPerimeter()
    {
        return $this->side1 + $this->side2 + $this->side3;
    }

    public function toString()
    {
        return "Ba cạnh của tam giác là : ".$this->side1.", ".$this->side2.", ".$this->side3."<br>"
            ."Có diện tích là : ".$this->getArea().", và chu vi là : ".$this->getPerimeter();

    }
}