<?php

require_once("Car.php");
require_once("Moto.php");

$ferrari = new Car("Ferrari", "Red");
// $ferrari->engine = 300;
// $ferrari->wheels = 4;
$ferrari->setDoors(2);
echo $ferrari->brand;

$audi = new Car("Audi", "Grey");
$audi->engine = 300;
$audi->setDoors(4);

// $bis = new Moto("Honda", "Black");
// echo $bis->color;
// echo $bis->color;

// echo $ferrari->brand;
// echo "<br>";
// echo $ferrari->getEngine();
// echo "<br>";
// echo $ferrari->wheels();
// echo "<br>";
// echo $ferrari->getDoors();
// echo "<hr>";
// echo $audi->getDoors();