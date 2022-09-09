<?php

require_once("Car.php");
require_once("Moto.php");

$ferrari = new Car;
$ferrari->brand = "Ferrari";
$ferrari->color = "Red";
$ferrari->engine = 300;
$ferrari->wheels = 4;
$ferrari->doors = 2;

$audi = new Car;
$audi->brand = "Audi";
$audi->color = "Grey";
$audi->engine = 300;

$bis = new Moto;
$bis->brand = "Honda";
$bis->color = "Black";
$bis->engine = 125;

echo $ferrari->brand;
echo "<br>";
echo $ferrari->getEngine();
echo "<br>";
echo $ferrari->wheels();
echo "<br>";
echo $ferrari->doors;


echo "<hr>";

echo $bis->brand;