<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
    </head>
    
    <body>
        <h1>Titre principal</h1>
<?php

require_once 'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$bike = new Bicycle($color = 'blue');
var_dump($bike);

$jcCar = new Car($color = 'red', $nbSeats = 2, $energy = 'essence');
var_dump($jcCar);

$bike->forward();
echo $jcCar->start();
$jcCar->forward();

var_dump($bike);
var_dump($jcCar);

$bike->brake();
$jcCar->brake();

var_dump($bike);
var_dump($jcCar);

echo $bike->brake();
echo $jcCar->brake();

var_dump($bike);
var_dump($jcCar);

$truck1 = new Truck('red', 3, 'fuel', 150);
var_dump($truck1);

$truck2 = new Truck('yellow', 2, 'fuel', 50);
var_dump($truck2);

echo $truck1->start();
echo $truck2->start();

$truck2->setCharged(true);
$truck1->setCharged(false);

$truck1->forward();
var_dump($truck1);
var_dump($truck2);

echo $truck1->brake();

$MW1 = new MotorWay(4, 130);
$PW1 = new PedestrianWay(1, 10);
$RW1 = new ResidentialWay(2, 50);

var_dump($MW1);

$MW1->addVehicle($truck1);
$MW1->addVehicle($jcCar);

echo "affichage <br>";
var_dump($MW1->getCurrentVehicles());

echo "Residence<br>";
$RW1->addVehicle($truck1);
var_dump($RW1->getCurrentVehicles());

$RW1->addVehicle($bike);
var_dump($RW1->getCurrentVehicles());

?>
        <p>Un paragraphe</p>
    </body>
</html>