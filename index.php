<?php

//cars
require_once 'cars.php';
$car = new Cars();
var_dump($car);


require_once 'Bicycle.php';
$bike = new Bicycle();
$bike->color = 'blue';
$bike->currentSpeed = 0;
var_dump($bike);
// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
?>