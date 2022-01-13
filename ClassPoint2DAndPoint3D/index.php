<?php
include_once "Point2D.php";
include_once "Point3D.php";
$poi2d = new \ClassPoint2DAndPoint3D\Point2D(4,8);
$poi3d = new \ClassPoint2DAndPoint3D\Point3D(4,8,9);
echo "<pre>";
print_r($poi2d->getXY());
print_r($poi3d->getXYZ());
$poi2d->setXY(5,9);
$poi3d->setXYZ(2,5,7);
print_r($poi2d->getXY());
print_r($poi3d->getXYZ());