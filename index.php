<?php

use Triangle\Triangle;
use shape\Shape;
include_once "Triangle.php";
$shape=new Shape('tam giác');
$triangle=new Triangle('tam giác','blue');
echo $triangle->show()."<br>";
$triangle->setSide(6,6,8);
echo $triangle->show();
?>