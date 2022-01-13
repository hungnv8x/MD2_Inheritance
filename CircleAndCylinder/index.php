<?php
include_once "Circle.php";
include_once "Cylinder.php";
$circle = new \CircleAndCylinder\Circle(10, "red");
$cylinder = new \CircleAndCylinder\Cylinder(10, "red", 20);
echo $circle->toString();
echo "<br>";
echo $cylinder->toString();