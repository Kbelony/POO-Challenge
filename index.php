<?php

//Bicycle
require_once 'Bicycle.php';
$bicycle = new Bicycle('blue', 1);
//echo $bicycle->forward();


//car
require_once 'cars.php';
$car = new Car('green', 4, 'electric');
//echo $car->forward();


//camion
require_once 'camion.php';
$truck = new Trucks('green', 4, 'electric',100);
echo $truck->forward();
echo '<br> Vitesse du camion : ' . $truck->currentSpeed . ' km/h' . '<br>';
echo $truck->brake();
echo '<br> Vitesse du camion : ' . $truck->currentSpeed . ' km/h' . '<br>';
echo $truck->brake();
?>