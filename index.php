<?php


require_once 'Bicycle.php';

$bicycle = new Bicycle('blue', 1);

var_dump($bicycle);


require_once 'Car.php';

$car = new Car('green', 4, 'electric');

var_dump($car);

var_dump(Car::ALLOWED_ENERGIES);


require_once 'Truck.php';

$truck = new Truck('white', 2, 80);

var_dump($truck);


$truck->setCurrentSpeed(30);

echo $truck->forward();

echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';

echo $truck->brake();

echo '<br> Vitesse du camion : ' . $truck->getCurrentSpeed() . ' km/h' . '<br>';

echo $truck->brake(). '<br>'. '<br>';

$truck->setStorage(0);

echo '<br> Chargement : ' . $truck->getStorage() . ' m3' . '<br>';

echo $truck->cargo(). '<br>';

$truck->setStorage(25);

echo '<br> Chargement: ' . $truck->getStorage() . ' m3' . '<br>';

echo $truck->cargo(). '<br>';

$truck->setStorage(80);

echo '<br> Chargement: ' . $truck->getStorage() . ' m3' . '<br>';

echo $truck->cargo();