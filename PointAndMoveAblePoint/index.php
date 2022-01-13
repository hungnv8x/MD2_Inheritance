<?php
include_once "Point.php";
include_once "MoveAblePoint.php";
$point = new \PointAndMoveAblePoint\Point(4,6);
$moveAblePoint = new \PointAndMoveAblePoint\MoveAblePoint(2,4,4,3);
echo $point->toString();
echo "<br>";
echo $moveAblePoint->toString();
$moveAblePoint->move();
echo "<br>Sau khi di chuyển với xSpeed = ".$moveAblePoint->getXSpeed()." va ySpeed = ".$moveAblePoint->getYSpeed()." :";
echo $moveAblePoint->toString();

