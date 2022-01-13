<?php
include_once "Triangle.php";
$triangle1 = new \Triangle\Triangle();
$triangle2 = new \Triangle\Triangle(3,4,5);
echo $triangle1->toString();
echo "<br>";
echo $triangle2->toString();